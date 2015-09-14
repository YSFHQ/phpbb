<?php
/**
*
* Pages extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace phpbb\pages\acp;

class pages_module
{
	public $u_action;

	public function main($id, $mode)
	{
		global $cache, $phpbb_container, $request, $user;

		// Add the pages ACP lang file
		$user->add_lang_ext('phpbb/pages', 'pages_acp');

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('phpbb.pages.admin.controller');

		// Requests
		$action = $request->variable('action', '');
		$page_id = $request->variable('page_id', 0);

		// Make the $u_action url available in the admin controller
		$admin_controller->set_page_url($this->u_action);

		// Load a template from adm/style for our ACP page
		$this->tpl_name = 'manage_pages';

		// Set the page title for our ACP page
		$this->page_title = $user->lang('ACP_PAGES_MANAGE');

		// Perform any actions submitted by the user
		switch ($action)
		{
			case 'add':
				// Set the page title for our ACP page
				$this->page_title = $user->lang('ACP_PAGES_CREATE_PAGE');

				// Load the add page handle in the admin controller
				$admin_controller->add_page();

				// Return to stop execution of this script
				return;
			break;

			case 'edit':
				// Set the page title for our ACP page
				$this->page_title = $user->lang('ACP_PAGES_EDIT_PAGE');

				// Load the edit page handle in the admin controller
				$admin_controller->edit_page($page_id);

				// Return to stop execution of this script
				return;
			break;

			case 'delete':
				// Use a confirm box routine when deleting a page
				if (confirm_box(true))
				{
					// Delete page on confirmation from the user
					$admin_controller->delete_page($page_id);
				}
				else
				{
					// Request confirmation from the user to delete the page
					confirm_box(false, $user->lang('ACP_PAGES_DELETE_CONFIRM'), build_hidden_fields(array(
						'page_id'	=> $page_id,
						'mode'		=> $mode,
						'action'	=> $action,
					)));
				}
			break;

			case 'purge_icons':
				// Purge icon cache
				$cache->destroy('_pages_icons');
			break;
		}

		// Display pages
		$admin_controller->display_pages();
	}
}
