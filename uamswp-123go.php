<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.uams.edu
 * @since             1.0.0
 * @package           Uamswp_123go
 *
 * @wordpress-plugin
 * Plugin Name:       UAMSWP 123Go
 * Plugin URI:        https://gihub.com/UAMS-Web/UAMSWP-123go
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Todd McKee
 * Author URI:        http://www.uams.edu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       uamswp-123go
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// This plugin uses namespaces and requires PHP 5.3 or greater.
if ( version_compare( PHP_VERSION, '5.3', '<' ) ) {
	add_action( 'admin_notices', create_function( '', // phpcs:ignore WordPress.PHP.RestrictedPHPFunctions.create_function_create_function
	"echo '<div class=\"error\"><p>" . __( 'WSUWP Plugin Skeleton requires PHP 5.3 to function properly. Please upgrade PHP or deactivate the plugin.', 'wsuwp-plugin-skeleton' ) . "</p></div>';" ) );
	return;
} else {
	define('UAMS_123GO_ROOT_URL', plugin_dir_url(__FILE__));
	define('UAMS_123GO_PATH', plugin_dir_path(__FILE__));

	include_once __DIR__ . '/includes/class-uamswp-123go.php';
}
