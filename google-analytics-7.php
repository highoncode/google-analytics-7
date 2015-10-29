<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.shakilahmed.net
 * @since             1.0.0
 * @package           Google_Analytics_7
 *
 * @wordpress-plugin
 * Plugin Name:       Google Analytics 7
 * Plugin URI:        http://www.devslate.com
 * Description:       A simple plugin to add Google Analytics code to your website.
 * Version:           1.0.0
 * Author:            Shakil Ahmed
 * Author URI:        http://www.shakilahmed.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       google-analytics-7
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-google-analytics-7-activator.php
 */
function activate_google_analytics_7() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-google-analytics-7-activator.php';
	Google_Analytics_7_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-google-analytics-7-deactivator.php
 */
function deactivate_google_analytics_7() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-google-analytics-7-deactivator.php';
	Google_Analytics_7_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_google_analytics_7' );
register_deactivation_hook( __FILE__, 'deactivate_google_analytics_7' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-google-analytics-7.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_google_analytics_7() {

	$plugin = new Google_Analytics_7();
	$plugin->run();

}
run_google_analytics_7();
