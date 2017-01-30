<?php
/**
 *
 * @package Recent Topics Extension
 * French translation by ForumsFaciles (http://www.forumsfaciles.fr) &  Galixte (http://www.galixte.com) & Sajaki (http://www.avathar.be)
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
	'RECENT_TOPICS_LIST'            => 'Afficher les « sujets récents »',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Affiche les sujets de ce forum au moyen de l’extension « Sujets récents ».',

	//acp title
	'RECENT_TOPICS'                 => 'Sujets récents',
	'RT_CONFIG'                     => 'Configuration',
	'RECENT_TOPICS_EXPLAIN'         => 'Sur cette page vous pouvez modifier les paramètres de l’extension «Sujets récents».<br /><br />Des forums spécifiques peuvent être inclus ou exclus en modifiant les paramètres des forums respectifs depuis le PCA.<br />Il est recommandé de vérifier les autorisations des utilisateurs, leur permettant de modifier par eux-mêmes certains paramètres présents ci-dessous.',

	//Overridable settings
	'RT_OVERRIDABLE'                => 'Paramètres individualisables',
	'RT_DISPLAY_INDEX'              => 'Afficher sur page index',
	'RT_LOCATION'                   => 'Emplacement',
	'RT_LOCATION_EXP'               => 'Choisir le lieu pour afficher les sujets récents (d’application sur les styles dérivés de prosilver)',
	'RT_TOP'                        => 'Afficher en tête',
	'RT_BOTTOM'                     => 'Afficher en bas',
	'RT_SIDE'                       => 'Afficher sur le coté',
	'RT_SORT_START_TIME'            => 'Trier selon la date de création du sujet',
	'RT_SORT_START_TIME_EXP'        => 'Trie selon la date de création du sujet, en lieu et place de la date du dernier message.',
	'RT_UNREAD_ONLY'                => 'Afficher uniquement les sujets non lus',
	'RT_UNREAD_ONLY_EXP'            => 'Affiche uniquement les sujets non lus (qu’ils soient « récents » ou non). Cette fonctionnalité utilise les mêmes paramètres que le mode normal (en excluant les forums / sujets, etc…). Note : Cela fonctionne uniquement pour les utilisateurs connectés; les invités verront la liste normale.',

	//global settings
	'RT_GLOBAL_SETTINGS'            => 'Paramètres globaux',
	'RT_NUMBER'                     => 'Sujets récents',
	'RT_NUMBER_EXP'                 => 'Nombre de sujets à afficher sur l’index.',
	'RT_PAGE_NUMBER'                => 'Nombre de pages pour les « sujets récents »',
	'RT_PAGE_NUMBER_EXP'            => 'Affiche davantage de « sujets récents » en utilisant la pagination. Saisir la valeur 1 pour désactiver cette option. Si la valeur 0 est saisie, il y aura autant de pages que nécessaire pour afficher tous les sujets de votre forum (non recommandé).',
	'RT_MIN_TOPIC_LEVEL'            => 'Niveau minimum du type de sujet',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Détermine le niveau minimum du type de sujet à afficher. Cela affichera les sujets correspondants au niveau paramétré et aux niveaux supérieurs.',
	'RT_ANTI_TOPICS'                => 'Sujets exclus',
	'RT_ANTI_TOPICS_EXP'            => 'Saisir les ID des sujets séparés par virgule (exemple : 7,9).<br />Pour ne pas exclure de sujet saisir simplement 0.',
	'RT_PARENTS'                    => 'Afficher les forums parents',
	'RT_PARENTS_EXP'                => 'Affiche les forums parents dans la liste des « sujets récents ».',

	//Enable for extensions
	'RT_VIEW_ON'                    => 'Afficher les « sujets récents » sur :',

	)
);
