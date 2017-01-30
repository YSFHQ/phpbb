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
	'RT_ENABLE'              => 'Visa senaste ämnen',
	'RT_LOCATION'            => 'kuvert',
	'RT_LOCATION_EXP'        => 'epot av nya ämnen blockeras',
	'RT_SORT_START_TIME'     => 'Sortera senaste ämnen i ämnet Submission tid ',
	'RT_SORT_START_TIME_EXP' => 'Hellre än att sortera dem efter senast skickade ämne ',
	'RT_UNREAD_ONLY'         => 'Visa bara olästa artiklar i senaste numret',
	'RT_TOP'                 => 'Titta på toppen',
	'RT_BOTTOM'              => 'Visa längst ned',
	'RT_SIDE'                => 'Visa på höger sida',
	)
);
