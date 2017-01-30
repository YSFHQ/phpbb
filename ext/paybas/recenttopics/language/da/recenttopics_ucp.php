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
	'RT_ENABLE'              => 'Vis seneste emner',
	'RT_LOCATION'            => 'sted indstilling',
	'RT_LOCATION_EXP'        => 'Depot af de seneste emner "blok.',
	'RT_SORT_START_TIME'     => 'Sorter seneste emner efter emnets indsendelses tid.',
	'RT_SORT_START_TIME_EXP' => 'I stedet for at sortere dem efter seneste sendte emne.',
	'RT_UNREAD_ONLY'         => 'Vis kun ulæste emner i seneste emner',
	'RT_TOP'                 => 'Vis på toppen',
	'RT_BOTTOM'              => 'Vis på bunden',
	'RT_SIDE'                => 'Vis på højre side',
	)
);
