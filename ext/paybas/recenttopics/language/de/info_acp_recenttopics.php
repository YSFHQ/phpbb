<?php
/**
 *
 * @package Recent Topics Extension
 * German translation by Joas Schilling (nickvergessen) & Sajaki (http://www.avathar.be)
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
	//forum acp
	'RECENT_TOPICS_LIST'            => 'In „aktuelle Themen“ anzeigen',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Sollen Themen aus diesem Forum in „aktuelle Themen“ angezeigt werden?',

	//acp title
	'RECENT_TOPICS'                 => 'Aktuelle Themen',
	'RT_CONFIG'                     => 'Konfiguration von aktuelle Themen',
	'RECENT_TOPICS_EXPLAIN'         => 'Auf dieser Seite können Sie die Erweiterung Einstellungen „Aktuelle Themen“ bearbeiten.<br /><br />Spezifische Foren können durch ändern der Einstellungen der jeweiligen Foren eingeschlossen oder ausgeschlossen werden<br />Es wird empfohlen, die Berechtigungen von Benutzern zu überprüfen, so dass sie sich einige Parameter ändern können.',

	//Overridable settings in ucp
	'RT_OVERRIDABLE'                => 'individualisierbare Einstellungen',
	'RT_DISPLAY_INDEX'              => 'Anzeigen auf der Index-Seite',
	'RT_LOCATION'                   => 'Anzeigelage',
	'RT_LOCATION_EXP'               => 'Wähle den Anzeigeort der aktuellen Themen.',
	'RT_TOP'                        => 'Ansicht oben',
	'RT_BOTTOM'                     => 'Ansicht unten',
	'RT_SIDE'                       => 'Ansicht auf die Seite',
	'RT_SORT_START_TIME'            => 'Nach Themen Startzeit sortieren',
	'RT_SORT_START_TIME_EXP'        => 'Wenn diese Option aktiviert ist, werden die Themen nach dem Datum des ersten Beitrags anstelle des letzten Beitrags sortiert.',
	'RT_UNREAD_ONLY'                => 'Nur ungelesene Themen anzeigen',
	'RT_UNREAD_ONLY_EXP'            => 'Diese Option zeigt nur ungelesene Themen an (egal ob diese aktuell sind oder nicht). Diese Funktion nutzt die gleichen Einstellungen (Ausgeschlossene Foren / Themen, etc.) wie die normale Version. Hinweis: diese Funktion steht nur eingeloggten Benutzern zur Verfügung; Gäste sehen die normale „Aktuelle Themen“ Liste.',

	//global settings
	'RT_GLOBAL_SETTINGS'            => 'Globale Einstellungen',
	'RT_NUMBER'                     => 'Aktuelle Themen',
	'RT_NUMBER_EXP'                 => 'Anzahl der Themen, die angezeigt werden',
	'RT_PAGE_NUMBER'                => 'Seitenanzahl „Aktuelle Themen“',
	'RT_PAGE_NUMBER_EXP'            => 'Du kannst weitere aktuelle Themen mit einer kleinen Seitennavigation anzeigen lassen. Um das Feature zu deaktivieren einfach „0“ eintragen.',
	'RT_MIN_TOPIC_LEVEL'            => 'Minimaler Thementyp',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Definiert das Minimum eines Thementyps, der angezeigt wird. Wenn du ein Thementyp angibst, werden nur Themen dieses oder eines höheren Typs angezeigt.',
	'RT_ANTI_TOPICS'                => 'Ausgeschlossene Themen',
	'RT_ANTI_TOPICS_EXP'            => 'Mit Komma trennen (Beispiel: 7,9)<br />Wenn kein Thema ausgeschlossen werden soll „1“ eingeben. Wenn du „0“ eingibst, werden so viele Seiten angezeigt, wie benötigt werden, um alle Themen auszugeben.',
	'RT_PARENTS'                    => 'Übergeordnete Foren anzeigen',
	'RT_PARENTS_EXP'                => 'Übergeordnete Foren in der Liste der aktuellen Themen anzeigen.',

	//Enable for extensions
	'RT_VIEW_ON'                    => 'Aktuelle Themen anzeigen auf:',

	)
);
