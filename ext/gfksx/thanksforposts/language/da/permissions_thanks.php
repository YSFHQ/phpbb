<?php
/**
 *
 * Thanks For Posts.
 * Adds the ability to thank the author and to use per posts/topics/forum rating system based on the count of thanks.
 * An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, rxu, https://www.phpbbguru.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* rudi_br:
* Translated into danish and the "Thanks" term, which is "Tak" in danish, changed into "syntes godt om" / "Like"
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	'ACL_F_THANKS' 						=> 'Kan syntes godt om indlæg',
	'ACL_M_THANKS' 						=> 'Kan nulstille syntes godt om listen',
	'ACL_U_VIEWTHANKS' 					=> 'Kan se listen med alle syntes godt om',
	'ACL_U_VIEWTOPLIST'					=> 'Kan se topscore listen',
]);
