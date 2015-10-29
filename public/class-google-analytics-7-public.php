<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.shakilahmed.net
 * @since      1.0.0
 *
 * @package    Google_Analytics_7
 * @subpackage Google_Analytics_7/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Google_Analytics_7
 * @subpackage Google_Analytics_7/public
 * @author     Shakil Ahmed <mail2jeesan@gmail.com>
 */
class Google_Analytics_7_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->ga7option = get_option($this->plugin_name);

	}

	public function ga7_code_adder(){
		if(!$this->ga7option===false and !is_admin()){
				print($this->ga7option['gacode']);}
			}

}