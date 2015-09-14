<?php
/**
*
* @package QuickReply Reloaded
* @copyright (c) 2014 - 2015 Tatiana5 and LavIgor
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace tatiana5\quickreply\migrations\v1xx;

class v_1_0_0_beta3 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['qr_version']) && version_compare($this->config['qr_version'], '1.0.0-beta3', '>=');
	}

	public static function depends_on()
	{
		return array('\tatiana5\quickreply\migrations\v1xx\v_1_0_0_beta2');
	}

	public function update_schema()
	{
		return array(
			'add_columns' => array(
				$this->table_prefix . 'users' => array(
					'qr_enable_scroll'    => array('BOOL', 1),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns'    => array(
				$this->table_prefix . 'users' => array('qr_enable_scroll'),
			),
		);
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('qr_scroll_time', 500)),

			// Update exisiting configs
			array('config.update', array('qr_version', '1.0.0-beta3')),
		);
	}
}
