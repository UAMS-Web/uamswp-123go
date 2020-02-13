<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://www.uams.edu
 * @since      1.0.0
 *
 * @package    Uamswp_123go
 * @subpackage Uamswp_123go/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Uamswp_123go
 * @subpackage Uamswp_123go/includes
 * @author     Todd McKee <todd@uams.edu>
 */
namespace UAMSWP\OneTwoThreego;

add_action( 'after_setup_theme', 'UAMSWP\OneTwoThreego\bootstrap' );
/**
 * Starts things up.
 *
 * @since 0.0.1
 */
function bootstrap() {
    include_once (__DIR__ . '/class.123go-custom-post.php' );
    include_once (__DIR__ . '/class.123go-custom-tax.php' );
    include_once (__DIR__ . '/class.123go-metabox.php' );
    include_once (__DIR__ . '/class.123go-templates.php' );
    include_once (__DIR__ . '/class.123go-functions.php' );
}
