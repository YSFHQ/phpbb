<?php
/**
 *
 * @package Recent Topics Extension
 * Tradução Portuguesa by phpbbpt
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge(
	$lang, array(
	'RT_ENABLE'              => 'Exibir tópicos recentes',
	'RT_LOCATION'            => 'Selecionar localização',
	'RT_LOCATION_EXP'        => 'Selecionar local para exibir tópicos recentes.',
	'RT_SORT_START_TIME'     => 'Ordenar tópicos recentes por tópico hora de início',
	'RT_SORT_START_TIME_EXP' => 'Em vez de classificá-los por último tempo de postagem',
	'RT_UNREAD_ONLY'         => 'Mostrar apenas tópicos não lidos nos tópicos recentes',
	'RT_TOP'                 => 'Mostrar no topo',
	'RT_BOTTOM'              => 'Mostrar no fundo',
	'RT_SIDE'                => 'Mostrar no lado direito',
	)
);
