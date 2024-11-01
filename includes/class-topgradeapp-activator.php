<?php

/**
 * Fired during plugin activation
 *
 * @link       https://topgradeapp.com
 * @since      1.0.0
 *
 * @package    Topgradeapp
 * @subpackage Topgradeapp/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Topgradeapp
 * @subpackage Topgradeapp/includes
 * @author     Your Name <support@topgradeapp.com>
 */
class Topgradeapp_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

            wp_oembed_add_provider( 'https://topgradeapp.com/*', 'https://topgradeapp.com/', false );

	}
}