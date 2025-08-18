<?php
/*
 * Plugin Name:       MSR Plugin
 * Plugin URI:        https://wpacademy.pk
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Mian Shahzad Raza
 * Author URI:        https://wpacademy.pk
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       msr-plugin
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
if ( ! defined( 'MSR_PLUGIN_VERSION' ) ) {
    define( 'MSR_PLUGIN_VERSION', '1.0.0' );
}
if ( ! defined( 'MSR_PLUGIN_DIR_PATH' ) ) {
    define( 'MSR_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'MSR_PLUGIN_DIR_URL' ) ) {
    define( 'MSR_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'MSR_PLUGIN_DB_VERSION' ) ) {
    define( 'MSR_PLUGIN_DB_VERSION', '1.0.3');
}

// Main Plugin Class
require_once MSR_PLUGIN_DIR_PATH . 'inc/plugin.php';

// Database
register_activation_hook( __FILE__, 'msr_database_table' );
