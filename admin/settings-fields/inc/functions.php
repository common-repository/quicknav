<?php
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


// Text Field
function quicknav_text_field( array $args ) {

	$obj = new Quicknav\Settings\Text( $args );
	$obj->get_field();

}
// Textarea Field
function quicknav_textarea_field( array $args ) {

	$obj = new Quicknav\Settings\Textarea( $args );
	$obj->get_field();

}
// Hidden Field
function quicknav_hidden_field( array $args ) {

	$obj = new Quicknav\Settings\Hidden( $args );
	$obj->get_field();

}
// Checkbox Field
function quicknav_checkbox_field( array $args ) {
	$obj = new Quicknav\Settings\Checkbox( $args );
	$obj->get_field();
}
// Radio Field
function quicknav_radio_field( array $args ) {
	$obj = new Quicknav\Settings\Radio( $args );
	$obj->get_field();
}
// Color Picker Field
function quicknav_colorpicker_field( array $args ) {
	$obj = new Quicknav\Settings\Color_Picker( $args );
	$obj->get_field();
}
// drug and drop Field
function quicknav_drugdrop_field( array $args ) {
	$obj = new Quicknav\Settings\Drug_Drop( $args );
	$obj->get_field();
}
// Group Field
function quicknav_group_field( array $args ) {
	$obj = new Quicknav\Settings\Group( $args );
	$obj->get_field();
}
// Text Repeter Field
function quicknav_textrepeter_field( array $args ) {
	$obj = new Quicknav\Settings\Text_Repeter( $args );
	$obj->get_field();
}
// Image Upload Field
function quicknav_imageupload_field( array $args ) {
	$obj = new Quicknav\Settings\Image_Upload( $args );
	$obj->get_field();

}
// Select Field
function quicknav_select_field( array $args ) {
	$obj = new Quicknav\Settings\Select( $args );
	$obj->get_field();

}
// Select range Field
function quicknav_range_field( array $args ) {
	$obj = new Quicknav\Settings\Range( $args );
	$obj->get_field();

}
// Select multitext repeter field
function quicknav_multitext_field( array $args ) {
	$obj = new Quicknav\Settings\Multitext_Repeter( $args );
	$obj->get_field();

}
// Switcher field
function quicknav_switcher_field( array $args ) {
	$obj = new Quicknav\Settings\Switcher( $args );
	$obj->get_field();

}