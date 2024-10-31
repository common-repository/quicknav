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


?>
<div class="tl_qv_item">
	<div class="nav-menu-items">
		<?php
		$option = get_option('quicknav_options');

		$menu = !empty( $option['nav_menu'] ) ? $option['nav_menu'] : '';

		$args = array(
			'menu' => esc_html( $menu )
		);

		wp_nav_menu( $args );

		?>
	</div>
</div>