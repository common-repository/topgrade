<?php

/**
 * Plugin Name:       Topgrade
 *
 * @link              https://topgradeapp.com
 * @since             1.0.0
 * @package           Topgradeapp
 *
 * @wordpress-plugin
 * Plugin Name:       Topgrade
 * Plugin URI:        https://topgradeapp.com/wp-plugin/
 * Description:       The Topgrade Wordpress plugin allows you to create fun quizzes on Topgrade and use them directly on your Wordpress website.
 * Version:           1.0.0
 * Author:            Sureware Ltd.
 * Author URI:        https://sureware.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       topgradeapp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.1' );
add_action( 'admin_menu', 'topgrade_admin_page_register' );

function topgrade_admin_page_register()
{
    add_menu_page(
        'Topgrade Admin',     // page title
        'Topgrade Admin',     // menu title
        'manage_options',   // capability
        'topgrade-admin',     // menu slug
        'topgrade_admin_page_render' // callback function
    );
}
function topgrade_admin_page_render()
{
    global $title;

    print '<div class="wrap">';
    print "<h1>$title</h1>";

    $file = plugin_dir_path( __FILE__ ) . "included.html";

    if ( file_exists( $file ) )
        require $file;
    
    $image1 = plugins_url( "public/topgrade1.png", __FILE__ );
    $image2 = plugins_url( "public/topgrade2.png", __FILE__ );
    $image3 = plugins_url( "public/topgrade3.png", __FILE__ );

    $imagePackage1 = "<img style='border:1px solid black' width='50%' src=" . $image1 . ">";
    $imagePackage2 = "<img style='border:1px solid black' width='50%' src=" . $image2 . ">";
    $imagePackage3 = "<img style='border:1px solid black' width='50%' src=" . $image3 . ">";
    
    print "<p>Topgrade allows you to quickly and easily add fun and engaging quizzes to your Wordpress website for free. <br>"
    . "Quizzes are a great way to increase user engagment on your site. <br>"
    . "To see the types of quiz questions you can add, click the example quiz link: <a target='_blank' href='https://topgradeapp.com/playQuiz/world-geography'>Example Quiz</a></p>";
    
    print "<h1>Adding A Quiz</h1>";
    print "<p>We've made adding a quiz to your website as quick and easy as possible - just 3 steps and 1 line of code!</p>";

    print "<h3>Step 1 - Make Your Quiz</h3>";
    print "<p>Visit our content creation hub <a target='_blank' href='https://topgradeapp.com'>TopgradeApp.com</a> (opens in new tab) and click 'Get Started' to create your quiz. <br>You can add multiple choice, true/false, ordering, matching and fill-in-the-blank questions. You can also add images, time limits and explanations.</p>";
        
    print $imagePackage1;
    
    print "<br><h3>Step 2 - Getting Your Unique Line Of Code</h3>";
    print "<p>To embed the quiz you've created in your website you'll need it's unique html code.<br>"
    . "On TopgradeApp.com click 'Edit' next to your quiz to open your quizzes' dashboard and click 'Share Quiz' then 'See code' to get your one line of code.</p>";

    print $imagePackage2;
    
    print "<br><h3>Step 3 - Add The Code To Your Site</h3>";
    print "<p>To embed the quiz you've created in your website edit a page and click 'Text'. Paste your quizzes' unique html code.</p>";

    print $imagePackage3;
    
    print "<br><h2>Support</h2>";
    print "<p>After completing these steps visitors to your website will now be able to play your quizzes directly from your Wordpress website, increasing engagment and enjoyment of your site.<br> If you have any feedback please email us at support@topgradeapp.com.</p>";
    print "<p>Thank you,<br> The Topgrade Team.</p>";
    print '</div>';
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-topgradeapp-activator.php
 */
function activate_topgradeapp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-topgradeapp-activator.php';
	Topgradeapp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-topgradeapp-deactivator.php
 */
function deactivate_topgradeapp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-topgradeapp-deactivator.php';
	Topgradeapp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_topgradeapp' );
register_deactivation_hook( __FILE__, 'deactivate_topgradeapp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-topgradeapp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_topgradeapp() {

	$plugin = new Topgradeapp();
	$plugin->run();

}
run_topgradeapp();
