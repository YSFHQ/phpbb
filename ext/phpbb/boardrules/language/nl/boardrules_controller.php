<?php
/**
*
* Board Rules extension for the phpBB Forum Software package.
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'BOARDRULES_HEADER'			=> 'Forumregels',
	'BOARDRULES_EXPLAIN'		=> 'Onderstaande regels zijn samengesteld door de forumbeheerders van %s. Iedereen die van dit forum gebruik maakt wordt gevraagd met de regels akkoord te gaan. Onderstaande regels zijn samengesteld om het forum aangenaam te houden voor alle leden en bezoekers.',
	'BOARDRULES_CATEGORIES'		=> 'Regelsecties',
	'BOARDRULES_CATEGORY_ANCHOR'=> 'sectie-%s',
	'BOARDRULES_RULE_ANCHOR'	=> 'regel-%s',
));
