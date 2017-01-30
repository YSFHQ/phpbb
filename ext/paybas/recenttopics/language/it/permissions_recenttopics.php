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
	'ACL_U_RT_VIEW'            => 'Argomenti recenti: Può nascondere l’elenco di argomenti recenti',
	'ACL_U_RT_ENABLE'          => 'Argomenti recenti: Può abilitare l’elenco di argomenti recenti',
	'ACL_U_RT_LOCATION'        => 'Argomenti recenti: Selezionare posizione del display',
	'ACL_U_RT_SORT_START_TIME' => 'Argomenti recenti: Può cambiare metodo di ordinamento di argomenti recenti',
	'ACL_U_RT_UNREAD_ONLY'     => 'Argomenti recenti: Può visualizzare solo argomenti non letti nell’elenco di argomenti recenti',
	)
);
