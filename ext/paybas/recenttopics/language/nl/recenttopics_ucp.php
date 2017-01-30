<?php
/**
 *
 * @package Recent Topics Extension
 * English translation by PayBas
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
	'RT_ENABLE'              => 'Toon op on index pagina',
	'RT_LOCATION'            => 'Plaatsinstelling',
	'RT_LOCATION_EXP'        => 'Stel plaats van \'recente onderwerpen\' blok in.',
	'RT_SORT_START_TIME'     => 'Sorteer op plaatsingstijd',
	'RT_SORT_START_TIME_EXP' => 'dus niet op laatste reactie',
	'RT_UNREAD_ONLY'         => 'Alleen ongelezen onderwerpen weergeven',
	'RT_TOP'                 => 'Toon boven',
	'RT_BOTTOM'              => 'Toon beneden',
	'RT_SIDE'                => 'Toon rechts',

	)
);
