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

class Fields{

    private static $instance = null;

    private static $pluginUrl;

    private static $pluginPath;

    private static $optionName = 'quicknav_options';

    private static $optionData;

    function __construct() {
        $this->init();
    }

    public function getInstance() {

        if( self::$instance == null ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function init() {
        
        //
        self::pluginsUrl();
        //
        self::pluginPath();
        //
        self::getOptionData();
        //
        $this->include_fiels();
        //
        add_filter( 'quicknav_get_settings_opt', [$this, 'option_flug'] );

        add_action( 'admin_enqueue_scripts', [ $this, 'enqueueScripts' ] );
        
    }

    public function enqueueScripts() {

        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_media();
        wp_enqueue_style( 'font-awesome', self::$pluginUrl.'assets/css/font-awesome.min.css', array(), '4.7.0', false );
        wp_enqueue_style( 'quicknav-settings-field', self::$pluginUrl.'assets/css/fields.css', array(), '1.0', false );
        wp_enqueue_script( 'quicknav-settings-field', self::$pluginUrl.'assets/js/fields.js', array( 'jquery', 'wp-color-picker' ), '1.0', true );
    }

    public function option_flug() {

        return [
            'option_name' => self::setOptionName(),
            'option_data' => self::$optionData
        ];

    } 

    private function setOptionName() {
        return self::$optionName;
    }

    private function getOptionData() {
        self::$optionData = get_option( self::$optionName );
    }

    private static function pluginsUrl() {
        self::$pluginUrl = plugin_dir_url( __FILE__ );
    }

    private static function pluginPath() {
        self::$pluginPath = plugin_dir_path( __FILE__ );
    }

    private function include_fiels() {

        //
        require_once( self::$pluginPath.'fields/text.php' );
        require_once( self::$pluginPath.'fields/textarea.php' );
        require_once( self::$pluginPath.'fields/hidden.php' );
        require_once( self::$pluginPath.'fields/checkbox.php' );
        require_once( self::$pluginPath.'fields/radio.php' );
        require_once( self::$pluginPath.'fields/color-picker.php' );
        require_once( self::$pluginPath.'fields/image-upload.php' );
        require_once( self::$pluginPath.'fields/text-repeater.php' );
        require_once( self::$pluginPath.'fields/select.php' );
        require_once( self::$pluginPath.'fields/range.php' );
        require_once( self::$pluginPath.'fields/switcher.php' );
        require_once( self::$pluginPath.'fields/mulitext-repeater.php' );

        //
        require_once( self::$pluginPath.'inc/functions.php' );
    }

}

$obj = new Fields();
$obj->getInstance();