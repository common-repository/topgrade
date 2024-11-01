<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://topgradeapp.com
 * @since      1.0.0
 *
 * @package    Topgradeapp
 * @subpackage Topgradeapp/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Topgradeapp
 * @subpackage Topgradeapp/includes
 * @author     Your Name <support@topgradeapp.com>
 */
class Topgradeapp_Deactivator {

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function deactivate() {

        wp_oembed_remove_provider('https://topgradeapp.com/*');

    }
}
