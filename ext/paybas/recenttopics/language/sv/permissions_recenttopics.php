<?php
/**
 *
 * @package Recent Topics Extension
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
		'ACL_U_RT_VIEW'            => 'Nya ämnen : kan se senaste ämnen',
		'ACL_U_RT_ENABLE'          => 'Nya ämnen : aktivera eller inaktivera',
		'ACL_U_RT_LOCATION'        => 'Nya ämnen : Välj visnings plats',
		'ACL_U_RT_SORT_START_TIME' => 'Nya ämnen : förändring sorteringsordning',
		'ACL_U_RT_UNREAD_ONLY'     => 'Nya ämnen : använd olästa skyddat läge',

	)
);
