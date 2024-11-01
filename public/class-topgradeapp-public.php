<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://topgradeapp.com
 * @since      1.0.0
 *
 * @package    Topgradeapp
 * @subpackage Topgradeapp/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Topgradeapp
 * @subpackage Topgradeapp/public
 * @author     Your Name <support@topgradeapp.com>
 */
class Topgradeapp_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $topgradeapp    The ID of this plugin.
	 */
	private $topgradeapp;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $topgradeapp       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $topgradeapp, $version ) {

		$this->topgradeapp = $topgradeapp;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Topgradeapp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Topgradeapp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->topgradeapp, plugin_dir_url( __FILE__ ) . 'css/plugin-name-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Topgradeapp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Topgradeapp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->topgradeapp, plugin_dir_url( __FILE__ ) . 'js/plugin-name-public.js', array( 'jquery' ), $this->version, false );

	}

}
