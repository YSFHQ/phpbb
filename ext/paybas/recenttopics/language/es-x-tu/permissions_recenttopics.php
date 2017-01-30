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
	'ACL_U_RT_VIEW'            => 'Temas recientes: Puedes ocultar la lista de temas recientes',
	'ACL_U_RT_ENABLE'          => 'Temas recientes: Puedes activar la lista de temas recientes',
	'ACL_U_RT_LOCATION'        => 'Temas recientes: Selecciona la posición de visualización',
	'ACL_U_RT_SORT_START_TIME' => 'Temas recientes: Puedes cambiar el método de clasificación de temas recientes',
	'ACL_U_RT_UNREAD_ONLY'     => 'Temas recientes: Puedes ver la lista de los últimos temas temas no leídos',
	)
);
