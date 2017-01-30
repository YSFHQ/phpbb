<?php
/**
 *
 * @package Recent Topics Extension
 * Danish translation by EverPvP
 *
 * @copyright (c) 2015 PayBas
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
	'ACL_U_RT_VIEW'            => 'Seneste emner: vis (master)',
	'ACL_U_RT_ENABLE'          => 'Seneste emner: slå til eller fra',
	'ACL_U_RT_LOCATION'        => 'Seneste emner: brug lokation',
	'ACL_U_RT_SORT_START_TIME' => 'Seneste emner: ændre sortering type',
	'ACL_U_RT_UNREAD_ONLY'     => 'Seneste emner: brug kun ulæste emner',
	)
);
