<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://wpdevhq.com
 * @since             1.0.0
 * @package           Universal_Functions
 *
 * @wordpress-plugin
 * Plugin Name:       WP Universal Functions
 * Plugin URI:        http://wpdevhq.com
 * Description:       A universal functions plugin that is site specific and theme agnostic - data transportation made easy.
 * Version:           1.0.0
 * Author:            WPDevHQ
 * Author URI:        http://wpdevhq.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       universal-functions
 */

/* Do not access this file directly */
if ( ! defined( 'WPINC' ) ) { die; }

/* Constants
------------------------------------------ */

/* Set plugin version constant. */
define( 'WPUF_VERSION', '1.0.0' );

/* Set constant path to the plugin directory. */
define( 'WPUF_PATH', trailingslashit( plugin_dir_path(__FILE__) ) );

/* Set the constant path to the plugin directory URI. */
define( 'WPUF_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );

function wpuf_load_plugin_textdomain() {
	load_plugin_textdomain( 'wp-universal-functions' );
}
add_action( 'init', 'wpuf_load_plugin_textdomain' );

/* Elementor Functions */
require_once( WPUF_PATH . 'functions/elementor-functions.php' );

/* Media Library Functions */
require_once( WPUF_PATH . 'functions/media-functions.php' );

/* WPDevHQ Functions */
//require_once( WPUF_PATH . 'functions/wpdevhq-functions.php' );

function load_element_theme_options_panel(){
	if( !defined( 'FW' ) ){
		//require_once( WPUF_PATH . 'element-panel/options-panel.php' );
	}
}
add_action( 'init', 'load_element_theme_options_panel', 1000 );