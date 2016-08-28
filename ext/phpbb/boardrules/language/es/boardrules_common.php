<?php
/**
*
* Board Rules extension for the phpBB Forum Software package.
* Spanish translation by Raul [ThE KuKa] (www.phpbb-es.com)
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
	'BOARDRULES'				=> 'Normas',
	'BOARDRULES_TITLE'			=> 'Ver las Normas de este Foro',
	'BOARDRULES_AGREEMENT'		=> 'Usted se compromete a cumplir con las normas de estos foros de la siguiente sección “Normas”',
	'BOARDRULES_VIEWONLINE'		=> 'Viendo las Normas del Foro',
	'BOARDRULES_NOTIFICATION'	=> 'Las Normas del Foro se han actualizado. Haga clic aquí para revisarlas.',
));
