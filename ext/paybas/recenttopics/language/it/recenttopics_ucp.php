<?php
/**
 *
 * @package Recent Topics Extension
 * Italian translation by Mauron
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
	'RT_ENABLE'              => 'Mostra argomenti recenti',
	'RT_LOCATION'            => 'Select location to display recent topics',
	'RT_LOCATION_EXP'        => 'Selezionare posizione per visualizzare gli argomenti recenti.',
	'RT_SORT_START_TIME'     => 'Ordina argomenti recenti per data d’apertura',
	'RT_SORT_START_TIME_EXP' => 'Gli argomenti vengono ordinati in base alla rispettiva data d’apertura e non in base a quella dell’ultimo messaggio.',
	'RT_UNREAD_ONLY'         => 'Mostra solo argomenti non letti come recenti',
	'RT_TOP'                 => 'Mostra sulla cima',
	'RT_BOTTOM'              => 'Mostra sul fondo',
	'RT_SIDE'                => 'Mostra sulla destra',
	)
);
