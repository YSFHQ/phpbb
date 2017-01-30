<?php
/**
 *
 * @package Recent Topics Extension
 * Swedish translation by Holger (http://www.maskinisten.net)
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
	'RECENT_TOPICS_LIST'            => 'Visa i "Aktuella ämnen"',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Aktivera denna funktion för att visa ämnen i tillägget "Aktuella ämnen".',

	//acp title
	'RECENT_TOPICS'                    => 'Aktuella ämnen',
	'RT_CONFIG'                        => 'Setup',
	'RECENT_TOPICS_EXPLAIN'            => 'Här kan du justera inställningarna för Senaste Ämnen Extension. <br/> Aktivera enskilda forum kan ställas in i administratörspanelenforumet . <br/>
Gå också användarpanelenhar inställningar admin panel för denna prioritering',

	//Användar overridable Inställningar
	'RT_OVERRIDABLE'                => 'Institutioner som panel användare har prioritet',
	'RT_DISPLAY_INDEX'              => 'Möt upp på indexsidan',
	'RT_LOCATION'                   => 'display läge',
	'RT_LOCATION_EXP'               => 'Ange platsen för de senaste frågorna ',
	'RT_TOP'                        => 'Syn på toppen',
	'RT_BOTTOM'                     => 'Visa längst ned',
	'RT_SIDE'                       => 'Visa på höger sida',
	'RT_SORT_START_TIME'            => 'Sortera efter objektets starttid',
	'RT_SORT_START_TIME_EXP'        => 'Aktiv " visar bara olästa artiklar " (om det är nyligen eller inte) . Den här funktionen använder samma inställningar ( ex . Forum / ämnen etc. ) som vanligt . Obs : Detta fungerar bara för registrerade användare ; gäster kommer att ha den normala listan.',
	'RT_UNREAD_ONLY'                => 'Visum Bara olästa objektet',
	'RT_UNREAD_ONLY_EXP'            => 'Aktivera två bara visa olästa ämnen ( Om de er " siste " eller ej) . Den här funktionen använder samma inställningar (exklusive forum / ämnen etc. ) som normalläge . Obs : detta fungerar bara för inloggade användare ; gäster kommer att få det normala list .',

	//globala inställningar
	'RT_GLOBAL_SETTINGS'            => 'globala inställningar',
	'RT_NUMBER'                     => 'senaste inlägg',
	'RT_NUMBER_EXP'                 => 'Antalet objekt som ska visas',
	'RT_PAGE_NUMBER'                => 'Recent Topics sidor',
	'RT_PAGE_NUMBER_EXP'            => 'Ställ pagineringsniveau i senaste numren . Enter för att stänga av denna funktion . Om du anger 0 , det finns så många sidor som används som behövs för att visa alla artiklar.',
	'RT_MIN_TOPIC_LEVEL'            => 'Minsta ämne typ',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Bestämmer miniminivån för den typ av objekt att visa. Det kommer endast att visa objekt till inställd nivå och högre.' ,
	'RT_ANTI_TOPICS'                => 'Uteslut inlägg',
	'RT_ANTI_TOPICS_EXP'            => 'Separerade med ett kommatecken (exempel : 7,9). Om du vill utesluta någon produkt som du kan använda en 0',
	'RT_PARENTS'                    => 'visa förälder forum',
	'RT_PARENTS_EXP'                => 'Display förälder forum inuti ämnet raden av senaste ämnen',

	//förlängningar
	'RT_VIEW_ON'                    => 'Visa de senaste ämnen på :',

	)
);
