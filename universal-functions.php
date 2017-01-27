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
 * Plugin Name:       Universal Functions
 * Plugin URI:        http://wpdevhq.com
 * Description:       A universal functions plugin that is site specific and theme agnostic - data transportation made easy.
 * Version:           1.0.0
 * Author:            WPDevHQ
 * Author URI:        http://wpdevhq.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpdevhq-enhancements
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Our first function is to make the Elementor Accordion closed on page load :)
function elementor_accordion_title() { ?>
	<script>
		jQuery(document).ready(function() {
			jQuery('.elementor-accordion-title').removeClass('active');
			jQuery('.elementor-accordion-content').css('display', 'none');
		});
	</script>
<?php }
add_action( 'wp_footer', 'elementor_accordion_title' );