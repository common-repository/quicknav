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

class Admin_Menu {

	function __construct() {
		add_action( 'admin_menu', [$this, 'add_menu_page'] );
		add_action( 'admin_init', [$this, 'register_setting'] );
	}


    public function add_menu_page() {

		add_menu_page(
            esc_html__( 'Quicknav', 'quicknav' ),
            esc_html__( 'Quicknav', 'quicknav' ),
            'manage_options',
            'quicknav_page',
            [$this, 'admin_quicknav_view_callback'],
            'dashicons-pressthis',
            6
        );
        add_submenu_page( 'quicknav_page', esc_html__( 'Settings', 'quicknav' ), esc_html__( 'Settings', 'quicknav' ),'manage_options', 'quicknav_page');
        add_submenu_page(
            'quicknav_page',
            esc_html__( 'Recommended Plugins', 'quicknav' ), //page title
            esc_html__( 'Recommended Plugins', 'quicknav' ), //menu title
            'manage_options', //capability,
            'quicknav-recommended-plugin', //menu slug
            [ $this, 'recommended_plugin_submenu_page' ] //callback function
            
        );

    }

    public function admin_quicknav_view_callback() {
    	?>
        <div class="tl_qv_settings_page">
        	<form method="post" action="options.php">
                <?php 
                settings_fields( 'quicknav-options-group' );
                do_settings_sections( 'quicknav-options-group' );

                echo '<div class="admin-promo-notice"><h3>Thank you to using Quicknav plugin. Would you like to visit our <a href="https://themeforest.net/user/themelooks/portfolio" target="_blank">Themeforest</a> items ?</h3></div>';

                require_once QUICKNAV_DIR_ADMIN . 'inc/template-settings.php';

                submit_button(); 

                ?>
        	</form>
        </div>
    	<?php
    }
    /**
     * [recommended_plugin_submenu_page description]
     * @return [type] [description]
     */
    public function recommended_plugin_submenu_page() {
        echo '<div class="dl-main-wrapper" style="margin-top: 50px;">';
            \Quicknav\Orgaddons\Org_Addons::getOrgItems();
        echo '</div>';
    }
 	public function register_setting() {
 		register_setting( 'quicknav-options-group', 'quicknav_options', 'quicknav_page' ); 
 	}

}

new Admin_Menu;