<?php
/**
 *
 * @package Recent Topics Extension
 * Spanish translation by Raul [ThE KuKa] (www.phpbb-es.com)
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
	'RT_ENABLE'              => 'Visualizar los temas recientes',
	'RT_LOCATION'            => 'Ubicación de la pantalla',
	'RT_LOCATION_EXP'        => 'Elegir un lugar para mostrar los últimos temas.',
	'RT_SORT_START_TIME'     => 'Ordenar los últimos temas de tiempo inicial del tema',
	'RT_SORT_START_TIME_EXP' => 'Los temas están ordenados de acuerdo con su respectiva fecha de apertura y no de acuerdo a la del último mensaje',
	'RT_UNREAD_ONLY'         => 'Mostrar sólo los temas no leídos en los últimos temas',
	'RT_TOP'                 => 'Mostrar en la parte superior',
	'RT_BOTTOM'              => 'Mostrar en el fondo',
	'RT_SIDE'                => 'Mostrar en el lado derecho',
	)
);
