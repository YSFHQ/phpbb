<?php
/**
*
* topfive [English]
*
* @package language Top Five
* @copyright (c) 2014 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP
	'TF_ACP'		=> 'Top Five Extension',
	'TF_ACTIVE'		=> 'Enabled',
	'TF_TITLE'		=> 'Top Five Extension Settings',
	'TF_VERSION'	=> 'Top Five Version',
	'TOPFIVE_MOD'	=> 'Top Five',
	'TF_CONFIG'		=> 'Settings',
	'TF_SELECT'		=> 'Top Five',
	'TF_SAVED'		=> 'Changes Saved',
	'TF_HOWMANY'	=> 'How Many',
	'TF_HOWMANY_EXPLAIN'	=> 'How many would you like to display...minimum required is 5, maximum is 100',
	'TF_IGNORE_USERS'		=> 'Ignore Inactive Users',
	'TF_IGNORE_USERS_EXPLAIN'	=> 'Will exclude inactive users from the display in top posters and newest users',
	'TF_IGNORE_FOUNDER'		=> 'Ignore Founder(s)',
	'TF_IGNORE_FOUNDER_EXPLAIN'	=> 'Will exclude founders from the display in top posters and newest users',
	'TF_LOCATION'	=> 'Location on forum',
	'TF_LOCATION_EXPLAIN'	=> 'Where do you want the mod to display on the index page',
	'TF_SHOW_ADMINS_MODS'	=> 'Include Admins and Mods',
	'TF_SHOW_ADMINS_MODS_EXPLAIN'	=> 'Will display admins and mods in top posters',
	'TOO_SMALL_TOP_FIVE_HOW_MANY'	=> 'The number to display value is too small.',
	'TOO_LARGE_TOP_FIVE_HOW_MANY'	=> 'The number to display value is too large.',
	'TOP_OF_FORUM'	=> 'Top of Forum',
	'BOTTOM_OF_FORUM'	=> 'Bottom of Forum',

));
