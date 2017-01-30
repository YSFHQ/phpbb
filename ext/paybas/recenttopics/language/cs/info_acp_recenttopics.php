<?php
/**
 *
 * @package Recent Topics Extension
 * Czech translation by R3gi
 *
 * @copyright (c) 2016 PayBas
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
	'RECENT_TOPICS_LIST'            => 'Zahrnout obsah do nedávných témat',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Je-li povoleno, témata z tohoto fóra mohou být zobrazena v bloku nedávných témat (rozšíření).',
	//acp title
	'RECENT_TOPICS'                 => 'Nedávná témata',
	'RT_CONFIG'                     => 'Nastavení',
	'RECENT_TOPICS_EXPLAIN'         => 'Na této stránce můžete měnit nastavení rozšíření „Recent Topics“.<br /><br />Konkrétní fóra lze zahrnout či vyloučit změnou nastavení jednotlivých fór.<br />Ujistěte se také, že mají uživatelé správně nastavena uživatelská oprávnění dle vašich potřeb. Na základě oprávnění si mohou uživatelé některá níže uvedená nastavení měnit dle svých potřeb ve svém uživatelském panelu.',
	//User Overridable settings. these apply for anon users and can be overridden by UCP
	'RT_OVERRIDABLE'                => 'Výchozí nastavení (lze přepsat v uživatelském panelu)',
	'RT_DISPLAY_INDEX'              => 'Zobrazovat na úvodní stránce',
	'RT_LOCATION'                   => 'Místo zobrazení',
	'RT_LOCATION_EXP'               => 'Nastavení umístění bloku nedávných témat. (prosilver)',
	'RT_TOP'                        => 'Zobrazit nahoře',
	'RT_BOTTOM'                     => 'Zobrazit dole',
	'RT_SIDE'                       => 'Zobrazit na straně',
	'RT_SORT_START_TIME'            => 'Řadit témata dle času založení',
	'RT_SORT_START_TIME_EXP'        => 'Je-li povoleno, nedávná témata budou řazena podle času založení namísto času odeslání posledního příspěvku.',
	'RT_UNREAD_ONLY'                => 'Zobrazovat pouze nepřečtená témata',
	'RT_UNREAD_ONLY_EXP'            => 'Je-li povoleno, budou zobrazena pouze nepřečtená témata (nehledě na to, zda jsou „nedávná“ či ne). Tato funkce používá stejné nastavení (vyjma fór/témat apod.) jako běžný režim. Poznámka: Nastavení funguje jen pro přihlášené uživatele, návštěvníci uvidí stále jen běžný seznam.',
	//global settings
	'RT_GLOBAL_SETTINGS'            => 'Globální nastavení',
	'RT_NUMBER'                     => 'Nedávná témata',
	'RT_NUMBER_EXP'                 => 'Počet nedávných témat k zobrazení.',
	'RT_PAGE_NUMBER'                => 'Počet stránek nedávných témat',
	'RT_PAGE_NUMBER_EXP'            => 'Nastavením této volby na „1“ vypnete stránkování pro blok nedávných témat.',
	'RT_MIN_TOPIC_LEVEL'            => 'Minimální úroveň tématu',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Určuje minimální úrověň typu tématu pro zobrazení. Zobrazena budou pouze témata zvolené úrovně a vyšší.',
	'RT_ANTI_TOPICS'                => 'Vyloučená témata',
	'RT_ANTI_TOPICS_EXP'            => 'Identifikátory témat k vyloučení, oddělené čárkou „,“ (příklad: 7,9)<br />',
	'RT_PARENTS'                    => 'Zobrazit nadřazená fóra',
	'RT_PARENTS_EXP'                => 'Zobrazit nadřazená fóra v řádku podrobností pod názvem nedávného tématu.',
	//Enable for extensions
	'RT_VIEW_ON'                     => 'Zobrazit nedávná témata na:',
	)
);
