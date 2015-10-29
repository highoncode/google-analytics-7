<?php

/**
* The admin-specific functionality of the plugin.
*
* @link       http://www.shakilahmed.net
* @since      1.0.0
*
* @package    Google_Analytics_7
* @subpackage Google_Analytics_7/admin
*/

/**
* The admin-specific functionality of the plugin.
*
* Defines the plugin name, version, and two examples hooks for how to
* enqueue the admin-specific stylesheet and JavaScript.
*
* @package    Google_Analytics_7
* @subpackage Google_Analytics_7/admin
* @author     Shakil Ahmed <mail2jeesan@gmail.com>
*/
class Google_Analytics_7_Admin {

/**
 * The ID of this plugin.
 *
 * @since    1.0.0
 * @access   private
 * @var      string    $plugin_name    The ID of this plugin.
 */
private $plugin_name;

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
 * @param      string    $plugin_name       The name of this plugin.
 * @param      string    $version    The version of this plugin.
 */
public function __construct( $plugin_name, $version ) {

	$this->plugin_name = $plugin_name;
	$this->version = $version;

}

// registering the options page
public function add_plugin_admin_menu(){
	add_options_page( 'Google Analytics 7 Settings page', 'Google Analytics 7', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page') );

}
// adding settings links on plugins page
public function add_action_links( $links ) {
    $settings_link = array(
    '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __('Settings', $this->plugin_name) . '</a>',
);
    return array_merge(  $settings_link, $links );
}
// displaying the plugin settings page
public function display_plugin_setup_page(){
	    include_once('partials/google-analytics-7-admin-display.php');
}
// saving options
public function options_update() {
    register_setting($this->plugin_name, $this->plugin_name);
}


}
