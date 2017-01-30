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
	//forum acp
	'RECENT_TOPICS_LIST'            => 'Display on "recent topics"',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Enable to display topics in this forum in the "recent topics" extension.',

	//acp title
	'RECENT_TOPICS'                 => 'Recent Topics',
	'RT_CONFIG'                     => 'Configuration',
	'RECENT_TOPICS_EXPLAIN'         => 'On this page you can change the settings specific for the Recent Topics extension.<br /><br />Specific forums can be included or excluded by editing the respective forums in your ACP.<br />Also be sure to check your user permissions, which allow users to change some of the settings found below for themselves.',

	//User Overridable settings. these apply for anon users and can be overridden by UCP
	'RT_OVERRIDABLE'                => 'UCP overridable Settings',
	'RT_DISPLAY_INDEX'              => 'Display on Index page',
	'RT_LOCATION'                   => 'Display location',
	'RT_LOCATION_EXP'               => 'Select location to display recent topics.',
	'RT_TOP'                        => 'Show on top',
	'RT_BOTTOM'                     => 'Show on bottom',
	'RT_SIDE'                       => 'Show on side',
	'RT_SORT_START_TIME'            => 'Sort by topic start time',
	'RT_SORT_START_TIME_EXP'        => 'Enable to sort recent topics by the starting time of the topic, instead of the last post time.',
	'RT_UNREAD_ONLY'                => 'Only display unread topics',
	'RT_UNREAD_ONLY_EXP'            => 'Enable to only display unread topics (whether they are "recent" or not). This function uses the same settings (excluding forums/topics etc.) as normal mode. Note: this only works for logged-in users; guests will get the normal list.',

	//global settings
	'RT_GLOBAL_SETTINGS'            => 'Global Settings',
	'RT_NUMBER'                     => 'Recent topics',
	'RT_NUMBER_EXP'                 => 'Number of topics to display.',
	'RT_PAGE_NUMBER'                => 'Recent topics pages',
	'RT_PAGE_NUMBER_EXP'            => 'Check to disable recent topics pagination.',
	'RT_MIN_TOPIC_LEVEL'            => 'Minimum topic type level',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Determines the minimum level of the topic-type to display. It will only display topics of the set level, and higher.',
	'RT_ANTI_TOPICS'                => 'Excluded topics',
	'RT_ANTI_TOPICS_EXP'            => 'The IDs of topics to exclude, seperated by "," (Example: 7,9)<br />',
	'RT_PARENTS'                    => 'Display parent forums',
	'RT_PARENTS_EXP'                => 'Display parent forums inside the topic row of recent topics.',
	'RT_RESET_DEFAULT'              => 'Reset user settings.',
	'RT_RESET_DEFAULT_EXP'          => 'Reset user settings to default.',

	//Enable for extensions
	'RT_NICKVERGESSEN_NEWSPAGE'     => 'Support for NewsPage Extension',
	'RT_VIEW_ON'                    => 'Display recent topics on:',

	)
);
