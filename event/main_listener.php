<?php
/**
 *
 * Full Links extension for the phpBB Forum Software package
 *
 * @copyright (c) 2023, Kailey Snay, https://www.snayhomelab.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace kaileymsnay\fulllinks\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Full Links event listener
 */
class main_listener implements EventSubscriberInterface
{
	public static function getSubscribedEvents()
	{
		return [
			'core.text_formatter_s9e_configure_after'	=> 'onConfigure',
		];
	}

	/**
	 * Modifies links on display
	 */
	public function onConfigure($event)
	{
		unset($event['configurator']->tags['LINK_TEXT']->template);
	}
}
