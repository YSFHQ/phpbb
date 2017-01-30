<?php
/**
 *
 * @package Recent Topics Extension
 * Danish translation by EverPvP
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
	'RECENT_TOPICS_LIST'            => 'Vis på "Seneste emner"',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Slå til, for at vise emner fra dette forum, i seneste emner.',

	//acp title
	'RECENT_TOPICS'                    => 'Seneste emner',
	'RT_CONFIG'                        => 'Opsætning',
	'RECENT_TOPICS_EXPLAIN'            => 'Her kan du justere indstillingerne for Seneste Emner Extension. <br/>Aktivering af Individuelle fora kan sættes op i Forum administrator panelet. <br/>
Gå også dit bruger-panel har indstillinger administrator panel efter denne prioritering',

	//Bruger Overridable indstillinger
	'RT_OVERRIDABLE'                => 'Institutioner, som panelet brugere har prioritet',
	'RT_DISPLAY_INDEX'              => 'Mød op på index side',
	'RT_LOCATION'                   => 'Display placering',
	'RT_LOCATION_EXP'               => 'Angiv placering af de seneste spørgsmål.',
	'RT_TOP'                        => 'Vis på toppen',
	'RT_BOTTOM'                     => 'Vis på bunden',
	'RT_SIDE'                       => 'Vis på højre side',
	'RT_SORT_START_TIME'            => 'Sorter efter emnets starttidspunkt',
	'RT_SORT_START_TIME_EXP'        => 'Gøre det muligt at sortere de seneste emner ved starttidspunktet af emner, i stedet for efter nyeste emner.',
	'RT_UNREAD_ONLY'                => 'Vis kun ulæste emner',
	'RT_UNREAD_ONLY_EXP'            => 'Aktive "vis kun ulæste emner" (uanset om det er de seneste eller ej). Denne funktion bruger de samme indstillinger (ekskl. fora / emner osv) som normal tilstand. Bemærk: Dette virker kun for registrerede brugere; gæster vil få den normale liste.',

	//global settings	//global settings
	'RT_GLOBAL_SETTINGS'            => 'globale indstillinger',
	'RT_NUMBER'                     => 'Seneste emner',
	'RT_NUMBER_EXP'                 => 'Antallet af emner der skal vises.',
	'RT_PAGE_NUMBER'                => 'Seneste emner sider',
	'RT_PAGE_NUMBER_EXP'            => 'Set pagineringsniveau i de seneste spørgsmål. Indtast en at deaktivere denne funktion. Hvis du indtaster 0, er der så mange sider, der anvendes efter behov for at vise alle emner.',
	'RT_MIN_TOPIC_LEVEL'            => 'Minimum emne type',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Bestemmer minimumsniveauet for emne type til at vise. Det vil kun vise emner af det indstillede niveau, og højere.',
	'RT_ANTI_TOPICS'                => 'Eksluder indlæg',
	'RT_ANTI_TOPICS_EXP'            => 'Adskilt af et komma (eksempel: 7,9). Hvis du ønsker at ekskludere nogen emner, kan du bruge en 0.',
	'RT_PARENTS'                    => 'Vis over fora',
	'RT_PARENTS_EXP'                => 'Vis over fora',

	//udvidelser
	'RT_VIEW_ON'                    => 'Vis seneste emner på:',

	)
);
