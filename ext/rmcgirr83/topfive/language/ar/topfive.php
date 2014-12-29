<?php
/**
*
* @package phpBB Extension - Top Five
* @copyright (c) 2014 Rich McGirr
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Basil Taha Alhitary - www.alhitary.net
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

$lang = array_merge($lang, array(
	'TOP_FIVE'			=> 'آخر 5 أنشطة',
	'NEWEST_TOPICS'		=> 'المشاركات الجديدة',
	'NO_TOPIC_EXIST'	=> 'لا توجد مشاركات جديدة حالياً',
	'TOP_FIVE_ACTIVE'	=> 'أكثر الأعضاء نشاطاً',
	'TOP_FIVE_NEWEST'	=> 'الأعضاء الجُدد',
	'IN'                => 'في',
	'BY'                => 'بواسطة :',
));
