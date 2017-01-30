<?php
/**
 *
 * @package Recent Topics Extension
 * Czech translation by R3gi
 *
 * @copyright (c) 2016 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 */
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge(
	$lang, array(
	'ACL_U_RT_VIEW'            => 'Může vidět nastavení nedávných témat',
	'ACL_U_RT_ENABLE'          => 'Může zapnout nebo vypnout blok nedávných témat',
	'ACL_U_RT_LOCATION'        => 'Může měnit nastavení umístění bloku nedávných témat',
	'ACL_U_RT_SORT_START_TIME' => 'Může měnit způsob řazení nedávných témat',
	'ACL_U_RT_UNREAD_ONLY'     => 'Může měnit nastavení nepřečtených příspěvků nedávných témat',
	)
);
