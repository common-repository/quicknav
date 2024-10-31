<?php
namespace Quicknav\Admin;
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

class Admin {

    function __construct() {
        $this->include_fiels();
    }

    public function include_fiels() {

    	require_once( plugin_dir_path( __FILE__ ).'inc/fa-icons.php' );
    	require_once( plugin_dir_path( __FILE__ ).'inc/function.php' );
    	require_once( plugin_dir_path( __FILE__ ).'inc/admin-menu.php' );
        require_once( plugin_dir_path( __FILE__ ).'settings-fields/fields.php' );

    }

}

new Admin();