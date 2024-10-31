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

// Get all menus id
function quicknav_nav_menus_id() {

	$menus = wp_get_nav_menus();

	$menuId = [];

	foreach( $menus as $menu ) {

		$menuId[ $menu->term_id ] = $menu->name;

	}

	return $menuId;

}

// Get blog categories

function quicknav_blog_categories() {

	$cats = get_categories();

	$blogCat = ['recent' => 'Recent Post'];

	foreach( $cats as $cat ) {
		$blogCat[$cat->term_id] = $cat->name ;
	}

	return $blogCat;

}
