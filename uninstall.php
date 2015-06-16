<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   Twitter_Card_Generator
 * @author    Riley MacDonald <riley_macdonald@hotmail.com>
 * @license   GPL-2.0+
 * @link      http://www.rileymacdonald.ca
 * @copyright 2013 theRedSpace
 */

// If uninstall, not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Define uninstall functionality here