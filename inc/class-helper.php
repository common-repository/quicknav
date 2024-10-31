<?php
namespace Quicknav;
/**
 *
 * @package     Quicknav
 * @author      ThemeLooks
 * @copyright   2020 ThemeLooks
 * @license     GPL-2.0-or-later
 *
 *
 */

if( !defined( 'WPINC' ) ) {
    die;
}

class Helper{


	function __construct() {

		add_action( 'wp_footer', [ $this, 'quicknav_add_template' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'admin_enqueue_scripts' ] );

	}

	function quicknav_add_template() {

	    $opt = get_option( 'quicknav_options' );

	    if( !empty( $opt['enable_nav'] ) && $opt['enable_nav'] == 'on'  ) {
	        require_once QUICKNAV_DIR_PATH . 'views/template-wrapper.php';
	    }

	}

	function enqueue_scripts() {

        wp_enqueue_style( 'fontawesome-4.0.7', QUICKNAV_DIR_URL .'assets/css/font-awesome.min.css' , array() , '4.0.7', 'all' );
        wp_enqueue_style( 'fontawesome', QUICKNAV_DIR_URL .'assets/css/all.min.css' , array() , '2.3.4', 'all' );
        wp_enqueue_style( 'quicknav-style', QUICKNAV_DIR_URL .'assets/css/style.css' , array() , '2.3.4', 'all' );

		wp_enqueue_script( 'quick-nav', QUICKNAV_DIR_URL .'assets/js/quick-nav.js', array( 'jquery' ), QUICKNAV_VERSION, true );

	}
	function admin_enqueue_scripts( $hook ) {

		if( 'toplevel_page_quicknav_page' != $hook ) {
			return;
		}
		
		wp_enqueue_style( 'fontawesome-4.0.7', QUICKNAV_DIR_URL .'assets/css/font-awesome.min.css' , array() , '4.0.7', 'all' );
        wp_enqueue_style( 'fontawesome', QUICKNAV_DIR_URL .'assets/css/all.min.css' , array() , '2.3.4', 'all' );
        

	}


}

new Helper();