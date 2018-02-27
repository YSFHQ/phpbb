<?php
/**
 *
 * Delete My Account. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 BrokenCrust
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace brokencrust\deletemyaccount\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

// Create an event listener for the module
class listener implements EventSubscriberInterface
{

	// Assign functions defined in this class to event listeners in the core
	static public function getSubscribedEvents()
	{
		return array(
			'core.permissions' => 'add_permission'
		);
	}

	// Add administrative permissions to allow post deletion
	public function add_permission($event)
	{
		$permissions = $event['permissions'];
		$permissions['u_delete_my_account_posts'] = array('lang' => 'ACL_U_DELETE_MY_ACCOUNT_POSTS', 'cat' => 'profile');
		$event['permissions'] = $permissions;
	}
}
