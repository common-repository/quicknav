<?php
/**
 * Plugin Name:       Quicknav
 * Plugin URI:        https://themelooks.org/demo/quicknav/
 * Description:       Quicknav a plugin for off-canvas features of WordPress. This plugin allows you to show a menu, WooCommerce product, blog, custom link and much more in your website off-canvas those can quickly and easily navigate by a user.
 * Version:           1.3.1
 * Author:            ThemeLooks
 * Author URI:        https://themelooks.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       quicknav
 * Domain Path:       /languages
 */

/**
 * Define all constant
 *
 */


// Version constant
if( !defined( 'QUICKNAV_VERSION' ) ) {
	define( 'QUICKNAV_VERSION', '1.3.1' );
}

// Plugin dir path constant
if( !defined( 'QUICKNAV_DIR_PATH' ) ) {
	define( 'QUICKNAV_DIR_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
}
// Plugin dir url constant
if( !defined( 'QUICKNAV_DIR_URL' ) ) {
	define( 'QUICKNAV_DIR_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );
}
// Plugin dir admin assets url constant
if( !defined( 'QUICKNAV_DIR_ADMIN_ASSETS_URL' ) ) {
	define( 'QUICKNAV_DIR_ADMIN_ASSETS_URL', trailingslashit( QUICKNAV_DIR_URL . 'admin/assets' ) );
}
// Admin dir path
if( !defined( 'QUICKNAV_DIR_ADMIN' ) ) {
	define( 'QUICKNAV_DIR_ADMIN', trailingslashit( QUICKNAV_DIR_PATH.'admin' ) );
}
// Inc dir path
if( !defined( 'QUICKNAV_DIR_INC' ) ) {
	define( 'QUICKNAV_DIR_INC', trailingslashit( QUICKNAV_DIR_PATH.'inc' ) );
}


// Include

// Admin file include
require_once( QUICKNAV_DIR_PATH.'org-addons/Org_Addons.php' );
require_once( QUICKNAV_DIR_ADMIN.'admin.php' );
// Helper Class
require_once( QUICKNAV_DIR_INC.'class-helper.php' );