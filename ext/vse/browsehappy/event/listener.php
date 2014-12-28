<?php
/**
*
* Browse Happy
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace vse\browsehappy\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\template\template $template
	* @param \phpbb\user $user
	* @return \vse\browsehappy\event\listener
	* @access public
	*/
	public function __construct(\phpbb\template\template $template, \phpbb\user $user)
	{
		$this->template = $template;
		$this->user = $user;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.index_modify_page_title'		=> 'show_browsehappy',
		);
	}

	/**
	* Show browsehappy on the index page
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function show_browsehappy($event)
	{
		$this->user->add_lang_ext('vse/browsehappy', 'browsehappy');

		$this->template->assign_var('S_BROWSEHAPPY', true);
	}
}
