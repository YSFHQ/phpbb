<?php
/**
 *
 * @package Recent Topics Extension
 * Dutch translation by PayBas, Sajaki
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
	'RECENT_TOPICS_LIST'            => 'Weergeven in Recente Onderwerpen',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Activeer om onderwerpen uit dit forum weer te geven in de "Recente Onderwerpen" extensie.',

	//acp title
	'RECENT_TOPICS'                 => 'Recente Onderwerpen',
	'RT_CONFIG'                     => 'Instellingen',
	'RECENT_TOPICS_EXPLAIN'         => 'Hier kan je de instellingen aanpassen voor de Recente Onderwerpen Extensie.<br />
	<br />Activatie van Individuele forums kan ingesteld worden in het Forum beheerderspaneel.<br />Ga ook uw gebruikerspaneel na dat voorrang heeft op beheerderspaneelinstellingen',

	//algemene instellingen voor anonieme gebruikers
	'RT_OVERRIDABLE'                => 'Instellingen waarvoor gebruikerspaneel voorrang heeft',
	'RT_DISPLAY_INDEX'              => 'Toon op index pagina',
	'RT_LOCATION'                   => 'Plaatsinstelling',
	'RT_LOCATION_EXP'               => 'Stel plaats van \'recente onderwerpen\' blok in.',
	'RT_TOP'                        => 'Toon boven',
	'RT_BOTTOM'                     => 'Toon beneden',
	'RT_SIDE'                       => 'Toon rechts',
	'RT_SORT_START_TIME'            => 'Sorteer op plaatsingstijd',
	'RT_SORT_START_TIME_EXP'        => 'Met deze optie worden recente onderwerpen gesorteerd op plaatsingstijd, niet op laatste reactie',
	'RT_UNREAD_ONLY'                => 'Alleen ongelezen onderwerpen weergeven',
	'RT_UNREAD_ONLY_EXP'            => 'Deze optie zorgt ervoor dat alleen ongelezen onderwerpen worden weergegeven (ongeacht of ze recent zijn).
	Deze functie gebruikt dezelfde instellingen (uitsluiting van forums/onderwerpen etc.) als in de normale situatie. NB: dit werkt alleen bij ingelogde gebruikers; gasten krijgen de normale lijst te zien.',

	//global settings
	'RT_GLOBAL_SETTINGS'            => 'Globale Instellingen',
	'RT_NUMBER'                     => 'Aantal recente onderwerpen',
	'RT_NUMBER_EXP'                 => 'Aantal onderwerpen dat weergegeven wordt op de forumindex.',
	'RT_PAGE_NUMBER'                => 'Aantal recente onderwerpen pagina&#39;s',
	'RT_PAGE_NUMBER_EXP'            => 'Stel het pagineringsniveau in van recente onderwerpen. Vul 1 in om deze functie uit te schakelen. Als je een 0 invoert worden er net zoveel pagina&#39;s gebruikt als nodig om alle onderwerpen weer te geven.',
	'RT_MIN_TOPIC_LEVEL'            => 'Onderwerptype',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Stel het minimum weer te geven onderwerptype in.',
	'RT_ANTI_TOPICS'                => 'Uitgesloten onderwerpen',
	'RT_ANTI_TOPICS_EXP'            => 'Gescheiden door een komma (Voorbeeld: 7,9)<br />Als je geen onderwerpen wil uitsluiten, vul dan een 0 in.',
	'RT_PARENTS'                    => 'Weergeven van hoofdforums',
	'RT_PARENTS_EXP'                => 'Toont de hoofdforums in de onderwerpregel van de recente onderwerpen.',

	//voor extensies
	'RT_VIEW_ON'                    => 'Activeer weergave van recente onderwerpen voor de volgende extensies:',

	)
);
