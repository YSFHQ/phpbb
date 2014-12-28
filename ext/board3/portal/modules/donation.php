<?php
/**
*
* @package Board3 Portal v2.1
* @copyright (c) 2013 Board3 Group ( www.board3.de )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace board3\portal\modules;

/**
* @package Donation
*/
class donation extends module_base
{
	/**
	* Allowed columns: Just sum up your options (Exp: left + right = 10)
	* top		1
	* left		2
	* center	4
	* right		8
	* bottom	16
	*/
	public $columns = 31;

	/**
	* Default modulename
	*/
	public $name = 'DONATION';

	/**
	* Default module-image:
	* file must be in "{T_THEME_PATH}/images/portal/"
	*/
	public $image_src = 'portal_donation.png';

	/**
	* module-language file
	* file must be in "language/{$user->lang}/mods/portal/"
	*/
	public $language = 'portal_donation_module';

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/**
	* Construct a stylechanger object
	*
	* @param \phpbb\config\config $config phpBB config
	* @param \phpbb\template $template phpBB template
	* @param \phpbb\user $user phpBB user object
	*/
	public function __construct($config, $template, $user)
	{
		$this->config = $config;
		$this->template = $template;
		$this->user = $user;
	}

	/**
	* {@inheritdoc}
	*/
	public function get_template_center($module_id)
	{
		$this->template->assign_vars(array(
			'PAY_ACC_CENTER'	=> $this->config['board3_pay_acc_' . $module_id],
			'PAY_CUSTOM_CENTER'	=> (!empty($this->config['board3_pay_custom_' . $module_id])) ? $this->user->data['username_clean'] : false,
		));

		return 'donation_center.html';
	}

	/**
	* {@inheritdoc}
	*/
	public function get_template_side($module_id)
	{
		$this->template->assign_vars(array(
			'PAY_ACC_SIDE'	=> $this->config['board3_pay_acc_' . $module_id],
			'PAY_CUSTOM_SIDE'	=> (!empty($this->config['board3_pay_custom_' . $module_id])) ? $this->user->data['username_clean'] : false,
		));

		return 'donation_side.html';
	}

	/**
	* {@inheritdoc}
	*/
	public function get_template_acp($module_id)
	{
		return array(
			'title'	=> 'ACP_PORTAL_PAYPAL_SETTINGS',
			'vars'	=> array(
				'legend1'							=> 'ACP_PORTAL_PAYPAL_SETTINGS',
				'board3_pay_acc_' . $module_id		=> array('lang' => 'PORTAL_PAY_ACC', 'validate' => 'string', 'type' => 'text:25:100', 'explain' => true),
				'board3_pay_custom_' . $module_id	=> array('lang' => 'PORTAL_PAY_CUSTOM', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => false),
			)
		);
	}

	/**
	* {@inheritdoc}
	*/
	public function install($module_id)
	{
		$this->config->set('board3_pay_acc_' . $module_id, 'your@paypal.com');
		$this->config->set('board3_pay_custom_' . $module_id, true);
		return true;
	}

	/**
	* {@inheritdoc}
	*/
	public function uninstall($module_id, $db)
	{
		$del_config = array(
			'board3_pay_acc_' . $module_id,
			'board3_pay_custom_' . $module_id,
		);
		$sql = 'DELETE FROM ' . CONFIG_TABLE . '
			WHERE ' . $db->sql_in_set('config_name', $del_config);
		return $db->sql_query($sql);
	}
}
