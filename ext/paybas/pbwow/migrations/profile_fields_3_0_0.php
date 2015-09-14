<?php
/**
 *
 * @package PBWoW Extension
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace paybas\pbwow\migrations;

class profile_fields_3_0_0 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\paybas\pbwow\migrations\release_3_0_0_data');
	}

	protected $profilefields = array(
		/* WoW */
		'pb_wow_race' => array(
			'profilefield_oldname'			=> 'pbrace',
			'profilefield_database_type'	=> array('UINT', null),
			'profilefield_lang_name'		=> 'WoW character race',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.dropdown',
				'field_length'			=> '0',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '14',
				'field_novalue'			=> '1',
				'field_default_value'	=> '1',
				'field_validation'		=> '',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 1,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
			'profilefield_entries'	=> array(
				0	=> 'None',
				1	=> 'Human',
				2	=> 'Orc',
				3	=> 'Dwarf',
				4	=> 'Night Elf',
				5	=> 'Undead',
				6	=> 'Tauren',
				7	=> 'Gnome',
				8	=> 'Troll',
				9	=> 'Goblin',
				10	=> 'Blood Elf',
				11	=> 'Draenei',
				12	=> 'Worgen',
				13	=> 'Pandaren',
			),
		),
		'pb_wow_class' => array(
			'profilefield_oldname'			=> 'pbclass',
			'profilefield_database_type'	=> array('UINT', null),
			'profilefield_lang_name'		=> 'WoW character class',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.dropdown',
				'field_length'			=> '0',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '12',
				'field_novalue'			=> '1',
				'field_default_value'	=> '1',
				'field_validation'		=> '',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 1,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
			'profilefield_entries'	=> array(
				0	=> 'None',
				1	=> 'Warrior',
				2	=> 'Paladin',
				3	=> 'Hunter',
				4	=> 'Rogue',
				5	=> 'Priest',
				6	=> 'Death Knight',
				7	=> 'Shaman',
				8	=> 'Mage',
				9	=> 'Warlock',
				10	=> 'Monk',
				11	=> 'Druid',
			),
		),
		'pb_wow_gender' => array(
			'profilefield_oldname'			=> 'pbgender',
			'profilefield_database_type'	=> array('UINT', null),
			'profilefield_lang_name'		=> 'WoW character gender',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.dropdown',
				'field_length'			=> '0',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '3',
				'field_novalue'			=> '1',
				'field_default_value'	=> '1',
				'field_validation'		=> '',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 1,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
			'profilefield_entries'	=> array(
				0	=> 'None',
				1	=> 'Male',
				2	=> 'Female',
			),
		),
		'pb_wow_level' => array(
			'profilefield_oldname'			=> 'pblevel',
			'profilefield_database_type'	=> array('UINT', null),
			'profilefield_lang_name'		=> 'WoW character level',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.int',
				'field_length'			=> '2',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '90',
				'field_novalue'			=> '0',
				'field_default_value'	=> '',
				'field_validation'		=> '',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 1,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
		),
		'pb_wow_guild' => array(
			'profilefield_oldname'			=> 'pbguild',
			'profilefield_database_type'	=> array('VCHAR', ''),
			'profilefield_lang_name'		=> 'WoW character guild',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.string',
				'field_length'			=> '32',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '32',
				'field_novalue'			=> '',
				'field_default_value'	=> '',
				'field_validation'		=> '[\w_\+\. \-\[\]]+',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 1,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
		),
		/* Diablo */
		'pb_diablo_class' => array(
			'profilefield_oldname'			=> 'pbdclass',
			'profilefield_database_type'	=> array('UINT', null),
			'profilefield_lang_name'		=> 'Diablo character class',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.dropdown',
				'field_length'			=> '0',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '7',
				'field_novalue'			=> '1',
				'field_default_value'	=> '1',
				'field_validation'		=> '',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 0,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
			'profilefield_entries'	=> array(
				0	=> 'None',
				1	=> 'Barbarian',
				2	=> 'Demon Hunter',
				3	=> 'Monk',
				4	=> 'Witch Doctor',
				5	=> 'Wizard',
				6	=> 'Crusader',
			),
		),
		'pb_diablo_follower' => array(
			'profilefield_oldname'			=> 'pbdfollower',
			'profilefield_database_type'	=> array('UINT', null),
			'profilefield_lang_name'		=> 'Diablo character follower',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.dropdown',
				'field_length'			=> '0',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '4',
				'field_novalue'			=> '1',
				'field_default_value'	=> '1',
				'field_validation'		=> '',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 0,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
			'profilefield_entries'	=> array(
				0	=> 'None',
				1	=> 'Templar',
				2	=> 'Scoundrel',
				3	=> 'Enchantress',
			),
		),
		'pb_diablo_gender' => array(
			'profilefield_oldname'			=> 'pbdgender',
			'profilefield_database_type'	=> array('UINT', null),
			'profilefield_lang_name'		=> 'Diablo character gender',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.dropdown',
				'field_length'			=> '0',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '3',
				'field_novalue'			=> '1',
				'field_default_value'	=> '1',
				'field_validation'		=> '',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 0,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
			'profilefield_entries'	=> array(
				0	=> 'None',
				1	=> 'Male',
				2	=> 'Female',
			),
		),
		/* WildStar */
		'pb_wildstar_race' => array(
			'profilefield_oldname'			=> 'pbwsrace',
			'profilefield_database_type'	=> array('UINT', null),
			'profilefield_lang_name'		=> 'WildStar character race',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.dropdown',
				'field_length'			=> '0',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '9',
				'field_novalue'			=> '1',
				'field_default_value'	=> '1',
				'field_validation'		=> '',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 0,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
			'profilefield_entries'	=> array(
				0	=> 'None',
				1	=> 'Human',
				2	=> 'Cassian',
				3	=> 'Granok',
				4	=> 'Draken',
				5	=> 'Aurin',
				6	=> 'Chua',
				7	=> 'Mordesh',
				8	=> 'Mechari',
			),
		),
		'pb_wildstar_class' => array(
			'profilefield_oldname'			=> 'pbwsclass',
			'profilefield_database_type'	=> array('UINT', null),
			'profilefield_lang_name'		=> 'WildStar character class',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.dropdown',
				'field_length'			=> '0',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '7',
				'field_novalue'			=> '1',
				'field_default_value'	=> '1',
				'field_validation'		=> '',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 0,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
			'profilefield_entries'	=> array(
				0	=> 'None',
				1	=> 'Warrior',
				2	=> 'Esper',
				3	=> 'Spellslinger',
				4	=> 'Stalker',
				5	=> 'Medic',
				6	=> 'Engineer',
			),
		),
		'pb_wildstar_gender' => array(
			'profilefield_oldname'			=> 'pbwsgender',
			'profilefield_database_type'	=> array('UINT', null),
			'profilefield_lang_name'		=> 'WildStar character gender',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.dropdown',
				'field_length'			=> '0',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '3',
				'field_novalue'			=> '1',
				'field_default_value'	=> '1',
				'field_validation'		=> '',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 0,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
			'profilefield_entries'	=> array(
				0	=> 'None',
				1	=> 'Male',
				2	=> 'Female',
			),
		),
		'pb_wildstar_path' => array(
			'profilefield_oldname'			=> '',
			'profilefield_database_type'	=> array('UINT', null),
			'profilefield_lang_name'		=> 'WildStar character path',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.dropdown',
				'field_length'			=> '0',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '5',
				'field_novalue'			=> '1',
				'field_default_value'	=> '1',
				'field_validation'		=> '',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 0,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
			'profilefield_entries'	=> array(
				0	=> 'None',
				1	=> 'Explorer',
				2	=> 'Soldier',
				3	=> 'Settler',
				4	=> 'Scientist',
			),
		),
		/* Battle.net */
		'pb_bnet_host' => array(
			'profilefield_oldname'			=> 'pbbnethost',
			'profilefield_database_type'	=> array('UINT', null),
			'profilefield_lang_name'		=> 'Battle.net region',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.dropdown',
				'field_length'			=> '0',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '6',
				'field_novalue'			=> '1',
				'field_default_value'	=> '1',
				'field_validation'		=> '',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 0,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
			'profilefield_entries'	=> array(
				0	=> 'None',
				1	=> 'us.battle.net',
				2	=> 'eu.battle.net',
				3	=> 'kr.battle.net',
				4	=> 'tw.battle.net',
				5	=> 'www.battlenet.com.cn',
			),
		),
		'pb_bnet_realm' => array(
			'profilefield_oldname'			=> 'pbbnetrealm',
			'profilefield_database_type'	=> array('VCHAR', ''),
			'profilefield_lang_name'		=> 'Battle.net character realm',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.string',
				'field_length'			=> '30',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '30',
				'field_novalue'			=> '',
				'field_default_value'	=> '',
				'field_validation'		=> '.*',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 0,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
		),
		'pb_bnet_name' => array(
			'profilefield_oldname'			=> 'pbbnetname',
			'profilefield_database_type'	=> array('VCHAR', ''),
			'profilefield_lang_name'		=> 'Battle.net character name',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.string',
				'field_length'			=> '30',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '30',
				'field_novalue'			=> '',
				'field_default_value'	=> '',
				'field_validation'		=> '.*',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 1,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 1,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 0,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
		),
		'pb_bnet_url' => array(
			'profilefield_oldname'			=> '',
			'profilefield_database_type'	=> array('VCHAR', ''),
			'profilefield_lang_name'		=> 'Battle.net character URL',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.string',
				'field_length'			=> '30',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '30',
				'field_novalue'			=> '',
				'field_default_value'	=> '',
				'field_validation'		=> '.*',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 0,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 0,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 0,
				'field_is_contact'		=> 0, // Possible?
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
		),
		'pb_bnet_avatar' => array(
			'profilefield_oldname'			=> 'pbbnetavatar',
			'profilefield_database_type'	=> array('VCHAR', ''),
			'profilefield_lang_name'		=> 'Battle.net character avatar',
			'profilefield_lang_explain'		=> '',
			'profilefield_data' 			=> array(
				'field_type'			=> 'profilefields.type.string',
				'field_length'			=> '30',
				'field_minlen'			=> '0',
				'field_maxlen'			=> '30',
				'field_novalue'			=> '',
				'field_default_value'	=> '',
				'field_validation'		=> '.*',
				'field_required'		=> 0,
				'field_show_novalue'	=> 0,
				'field_show_on_reg'		=> 0,
				'field_show_on_pm'		=> 1,
				'field_show_on_vt'		=> 1,
				'field_show_on_ml'		=> 0,
				'field_show_profile'	=> 0,
				'field_hide'			=> 0,
				'field_no_view'			=> 0,
				'field_active'			=> 0,
				'field_is_contact'		=> 0,
				'field_contact_desc'	=> '',
				'field_contact_url'		=> '',
			),
		),
	);

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'create_pbwow_fields'))),

			array('config.update', array('load_cpf_memberlist', '1')),
			array('config.update', array('load_cpf_pm', '1')),
			array('config.update', array('load_cpf_viewprofile', '1')),
			array('config.update', array('load_cpf_viewtopic', '1')),
		);
	}

	public function create_pbwow_fields()
	{
		$sql = 'SELECT MAX(field_order) as max_field_order
			FROM ' . PROFILE_FIELDS_TABLE;
		$result = $this->db->sql_query($sql);
		$max_field_order = (int) $this->db->sql_fetchfield('max_field_order');
		$this->db->sql_freeresult($result);

		foreach($this->profilefields as $profilefield_name => $meta)
		{
			if ($this->db_tools->sql_column_exists($this->table_prefix . 'profile_fields_data', 'pf_' . $profilefield_name))
			{
				// Already exists (and seems to be up to date)
				continue;
			}
			else if (isset($meta['profilefield_oldname']) && $this->db_tools->sql_column_exists($this->table_prefix . 'profile_fields_data', 'pf_' . $meta['profilefield_oldname']))
			{
				// Update existing old version. We can safely assume that the phpBB 3.1 migration has already converted them to the new format succesfully

				$sql = "UPDATE " . $this->table_prefix . "profile_fields
					SET field_name = '" . $profilefield_name . "', field_ident = '" . $profilefield_name . "'
					WHERE field_ident = '" . $meta['profilefield_oldname'] . "'";
				$this->db->sql_query($sql);

				// Add the new version column to the profile fields data table
				$schema_change = array('add_columns' => array(
					$this->table_prefix . 'profile_fields_data'	=> array(
						'pf_' . $profilefield_name => $meta['profilefield_database_type'],
					),
				));
				$this->db_tools->perform_schema_changes($schema_change);

				// Copy the user data to the new column
// TODO use buffer
				$sql = 'UPDATE ' . $this->table_prefix . 'profile_fields_data
					SET pf_' . $profilefield_name . ' = pf_' . $meta['profilefield_oldname'];
				$this->db->sql_query($sql);

				// Drop the old column
				$schema_change2 = array('drop_columns' => array(
					$this->table_prefix . 'profile_fields_data' => array(
						'pf_' . $meta['profilefield_oldname'],
					),
				));
				$this->db_tools->perform_schema_changes($schema_change2);
			}
			else
			{
				// Create a new one
				$data = $meta['profilefield_data'];
				$type = $data['field_type'];
				$entries = isset($meta['profilefield_entries']) ? $meta['profilefield_entries'] : false;

				$sql_ary = array_merge($data, array(
					'field_name'	=> $profilefield_name,
					'field_ident'	=> $profilefield_name,
					'field_order'	=> $max_field_order + 1,
				));
				$max_field_order++;

				$sql = 'INSERT INTO ' . PROFILE_FIELDS_TABLE . ' ' . $this->db->sql_build_array('INSERT', $sql_ary);
				$this->db->sql_query($sql);
				$field_id = (int) $this->db->sql_nextid();

				// Probably not the most efficient, but it gets the job done
				$insert_buffer = new \phpbb\db\sql_insert_buffer($this->db, PROFILE_LANG_TABLE);
				$insert_buffer2 = new \phpbb\db\sql_insert_buffer($this->db, PROFILE_FIELDS_LANG_TABLE);

				$sql = 'SELECT lang_id
					FROM ' . LANG_TABLE;
				$result = $this->db->sql_query($sql);
				while ($lang_id = (int) $this->db->sql_fetchfield('lang_id'))
				{
					// Set the profile field language options
					$insert_buffer->insert(array(
						'field_id'				=> $field_id,
						'lang_id'				=> $lang_id,
						'lang_name'				=> $meta['profilefield_lang_name'],
						'lang_explain'			=> $meta['profilefield_lang_explain'],
						'lang_default_value'	=> '',
					));

					if ($entries)
					{
						// This profile field has predefined entry values, so they must be set for each lang
						foreach($entries as $entry => $value)
						{
							$insert_buffer2->insert(array(
								'field_id'		=> $field_id,
								'lang_id'		=> $lang_id,
								'option_id'		=> $entry,
								'field_type'	=> $type,
								'lang_value'	=> $value,
							));
						}
					}
				}
				$this->db->sql_freeresult($result);

				$insert_buffer->flush();
				$insert_buffer2->flush();

				// Add a column to the profile fields data table
				$schema_change = array('add_columns' => array(
					$this->table_prefix . 'profile_fields_data'	=> array(
						'pf_' . $profilefield_name => $meta['profilefield_database_type'],
					),
				));
				$this->db_tools->perform_schema_changes($schema_change);
			}
		}
	}
}
