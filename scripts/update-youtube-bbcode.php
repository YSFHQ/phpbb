<?php
/**
 * Test the YouTube BBCode update, or deploy it with --apply.
 * Run from the forum's PHP environment. Existing posts are left unchanged.
 */
if (PHP_SAPI !== 'cli')
{
	exit;
}

define('IN_PHPBB', true);
$phpbb_root_path = dirname(__DIR__) . '/';
$phpEx = 'php';
require $phpbb_root_path . 'common.php';

$result = $db->sql_query('SELECT * FROM ' . BBCODES_TABLE . " WHERE bbcode_tag = 'youtube'");
$previous = $db->sql_fetchrow($result);
$db->sql_freeresult($result);
if (!$previous)
{
	throw new RuntimeException('The existing YouTube BBCode was not found.');
}

// Preserve content0 so already-parsed posts continue to use the same video ID.
$regexp = '~^\s*(?:(?:https?://)?(?:(?:www\.|m\.)?youtube\.com/(?:watch\?(?:[^\s#\[\]]*&)?v=|embed/|shorts/|live/)|youtu\.be/))?(?<content0>[A-Za-z0-9_-]{11})(?:[?&#][^\s\[\]]*)?\s*$~Di';
$usage = '[youtube url={TEXT;useContent} url={PARSE=' . $regexp . '}]{TEXT}[/youtube]';
$template = '<div style="position:relative;width:100%;height:0;padding-bottom:56.25%">'
	. '<iframe src="https://www.youtube.com/embed/{@content0}" title="YouTube video player" frameborder="0" '
	. 'allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" '
	. 'referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" '
	. 'style="position:absolute;top:0;left:0;width:100%;height:100%"></iframe></div>';

// Exercise the board's formatter without modifying its cached configuration.
$configurator = $phpbb_container->get('text_formatter.s9e.factory')->get_configurator();
unset($configurator->BBCodes['YOUTUBE'], $configurator->tags['YOUTUBE']);
$configurator->BBCodes->addCustom($usage, $template);
$formatter = $configurator->finalize();
$id = 'vZjQaMRU_bo';
$valid = [
	'https://www.youtube.com/watch?v=' . $id,
	'https://www.youtube.com/watch?v=' . $id . '&si=share-token',
	'https://www.youtube.com/watch?v=' . $id . '&t=30s',
	'https://www.youtube.com/watch?feature=shared&v=' . $id,
	'https://youtube.com/watch?v=' . $id,
	'https://m.youtube.com/watch?v=' . $id,
	'http://www.youtube.com/watch?v=' . $id,
	'https://youtu.be/' . $id,
	'https://youtu.be/' . $id . '?si=share-token',
	'https://www.youtube.com/embed/' . $id,
	'https://www.youtube.com/shorts/' . $id,
	'https://www.youtube.com/live/' . $id,
	$id,
];
$invalid = [
	'https://example.com/' . $id,
	'https://youtube.com.example.com/watch?v=' . $id,
	'https://www.youtube.com/watch?v=too-short',
	'https://www.youtube.com/watch?v=' . $id . 'extra',
	'javascript:alert(1)',
	'"><script>alert(1)</script>',
];
foreach (array_merge($valid, $invalid) as $url)
{
	$xml = $formatter['parser']->parse('[youtube]' . $url . '[/youtube]');
	$html = $formatter['renderer']->render($xml);
	$embedded = strpos($html, '<iframe') !== false;
	if ($embedded !== in_array($url, $valid, true)
		|| ($embedded && strpos($html, 'src="https://www.youtube.com/embed/' . $id . '"') === false))
	{
		throw new RuntimeException('Unexpected embed result for ' . $url);
	}
}
$old_xml = '<r><YOUTUBE content0="' . $id . '"><s>[youtube]</s>https://www.youtube.com/watch?v=' . $id . '<e>[/youtube]</e></YOUTUBE></r>';
if (strpos($formatter['renderer']->render($old_xml), 'src="https://www.youtube.com/embed/' . $id . '"') === false)
{
	throw new RuntimeException('Existing parsed YouTube posts no longer render.');
}
echo 'PASS: ' . count($valid) . ' supported inputs, ' . count($invalid) . " invalid inputs, and existing parsed posts.\n";

if (!in_array('--apply', $argv, true))
{
	echo "No configuration changed. Use --apply to deploy.\n";
	exit;
}

$backup = $phpbb_root_path . 'store/youtube-bbcode-backup-' . gmdate('Ymd-His') . '-' . bin2hex(random_bytes(4)) . '.json';
if (file_put_contents($backup, json_encode($previous, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES), LOCK_EX) === false)
{
	throw new RuntimeException('Could not back up the existing BBCode.');
}
// Legacy first/second-pass fields remain intact for pre-3.2 stored posts.
$update = [
	'bbcode_match' => $usage,
	'bbcode_tpl' => $template,
	'bbcode_helpline' => 'YouTube: [youtube]YouTube video URL or video ID[/youtube]',
];
$db->sql_query('UPDATE ' . BBCODES_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $update)
	. ' WHERE bbcode_id = ' . (int) $previous['bbcode_id']);
$cache->destroy('sql', BBCODES_TABLE);
$phpbb_container->get('text_formatter.cache')->invalidate();
echo "YouTube BBCode updated. Backup: $backup\n";
