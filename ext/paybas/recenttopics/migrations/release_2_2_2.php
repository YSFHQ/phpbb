<?php
/**
 *
 * @package Recent Topics Extension
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 */

namespace paybas\recenttopics\migrations;

class release_2_2_2 extends \phpbb\db\migration\migration
{

	public function effectively_installed()
	{
		return isset($this->config['rt_version']) && version_compare($this->config['rt_version'], '2.2.2', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\paybas\recenttopics\migrations\release_2_2_1',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('rt_version', '2.2.2')),
			array('config.add', array('rt_page_numbermax', 0)),
			array('config.update', array('rt_number', '5')),
			array('config.update', array('rt_page_numbermax', '10')),
		);
	}

	public function revert_data()
	{
		return array(
			// fixes bug in 2.0.6 migration
			array('config.remove', array('rt_unreadonly')),
			// fixes bug in 2.1.2 migration
			array('permission.remove', array('u_rt_view')),
		);
	}
}
