<?php
/**
*  phpBB Extension - marttiphpbb customcode
* @copyright (c) 2014 marttiphpbb <info@martti.be>
* @license http://opensource.org/licenses/MIT
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


$lang = array_merge($lang, array(
 
   'ACP_CUSTOMCODE'							=> 'Aangepaste Code',
	'ACP_CUSTOMCODE_EDIT'						=> 'Bewerk',
	'ACP_CUSTOMCODE_INCLUDE_EXAMPLE'			=> 'Om je zelf gemaakte bestand in te sluiten, gebruik <code>../../../../../../store/customcode/</code><p><code>&lt;!-- INCLUDE ../../../../../../store/customcode/my_file.html --></code></p>',
	'ACP_CUSTOMCODE_CREATE_FILE'				=> 'Maak bestand',
	'ACP_CUSTOMCODE_DELETE'						=> 'Verwijder',
	'ACP_CUSTOMCODE_DELETE_FILE_NAME'			=> 'Verwijder %s',
	'ACP_CUSTOMCODE_FILES_EXPLAIN'				=> 'Bestanden direct verbonden met template gebeurtenissen (E) kunnen niet worden verwijderd. Alle bestanden bevinden zich in directory store/customcode.',
	'ACP_CUSTOMCODE_FILE_SIZE'					=> 'Bestandsgrootte',
	'ACP_CUSTOMCODE_FILE_NAME'					=> 'Naam',
	'ACP_CUSTOMCODE_FILE_COMMENT'				=> 'Opmerking',
	'ACP_CUSTOMCODE_FILES'						=> 'Bestanden',
	'ACP_CUSTOMCODE_FILE'						=> 'Bestand',
	'ACP_CUSTOMCODE_EDITOR_ROWS'				=> 'Invoerveld rijen',
	'ACP_CUSTOMCODE_SAVE_CONFIRM'				=> 'Wilt u bestand %s opslaan?',
	'ACP_CUSTOMCODE_SAVE'						=> 'Opslaan',
	'ACP_CUSTOMCODE_SAVE_PURGE_CACHE'			=> 'Opslaan en cache leegmaken',
	'ACP_CUSTOMCODE_SAVE_PURGE_CACHE_CONFIRM'	=> 'Wilt u bestand %s opslaan en de cache leegmaken?',
	'ACP_CUSTOMCODE_FILE_SAVED'					=> 'Bestand %s is succesvol opgeslagen!',
	'ACP_CUSTOMCODE_FILE_SAVED_CACHE_PURGED'	=> 'Bestand %s is succesvol opgesalagen en de cache is geleegd!',
	'ACP_CUSTOMCODE_NOT_WRITABLE'				=> 'Bestand %s is niet schrijfbaar.',
	'ACP_CUSTOMCODE_FILE_CREATED'				=> 'Bestand %s is aangemaakt.',
	'ACP_CUSTOMCODE_FILENAME_EMPTY'				=> 'Bestandsnaam was niet ingevuld.',
	'ACP_CUSTOMCODE_FILE_NOT_CREATED'			=> 'Bestand %s kon niet aangemaakt worden.',
	'ACP_CUSTOMCODE_FILE_ALREADY_EXISTS'		=> 'Bestand %s bestaat al.',
	'ACP_CUSTOMCODE_DELETE_FILE_CONFIRM'		=> 'Verwijder bestand %s ?',
	'ACP_CUSTOMCODE_FILE_DELETED'				=> 'Bestand %s is verwijderd.',
	'ACP_CUSTOMCODE_FILE_DOES_NOT_EXIST'		=> 'Bestand %s bestaat niet.',
	'ACP_CUSTOMCODE_FILE_NOT_DELETED'			=> 'Verwijderen van bestand %s is mislukt.',
   
 
));
