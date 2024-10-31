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

// Enable
quicknav_switcher_field(
    array(
        'label' => esc_html__( 'Enable Quicknav', 'quicknav' ),
        'inline' => true,
        'name'  => 'enable_nav'
    )
);

// Select Content Type
quicknav_select_field(
    array(
        'label'  => esc_html__( 'Select Content Type', 'quicknav' ),
        'inline' => true,
        'name'   => 'content_type',
        'options' => [
            'menu'          => esc_html__( 'Nav Menu', 'quicknav' ),
            'blog'          => esc_html__( 'Blog', 'quicknav' ),
            'product'       => esc_html__( 'WooCommerce Product', 'quicknav' )
        ]
    )
);
// Select nav Menu
quicknav_select_field(
    array(
        'label'  => esc_html__( 'Select Menu', 'quicknav' ),
        'inline' => false,
        'wrap_class' => 'select-menu',
        'name'   => 'nav_menu',
        'options' => quicknav_nav_menus_id()
    )
);

// Select Product Type
quicknav_select_field(
    array(
        'label'  => esc_html__( 'Select Product Type', 'quicknav' ),
        'inline' => true,
        'name'   => 'product_type',
        'wrap_class' => 'select-product',
        'options' => [
            'recent'     => esc_html__( 'Rectnt Products', 'quicknav' ),
            'featured'   => esc_html__( 'Featured Products', 'quicknav' ),
            'star'       => esc_html__( '5 Satr Rating Products', 'quicknav' )
        ]
    )
);

// Select blog Type
quicknav_select_field(
    array(
        'label'  => esc_html__( 'Select Blog Category', 'quicknav' ),
        'inline' => true,
        'name'   => 'blog_type',
        'wrap_class' => 'select-blog',
        'options' => quicknav_blog_categories()
    )
);

// Select Product number
quicknav_range_field(
    array(
        'label' => esc_html__( 'Product/Blog Per Page', 'quicknav' ),
        'inline' => true,
        'name'  => 'productperpage',
        'max' => 4,
        'min' => 1
    )
);

// Image upload
quicknav_imageupload_field(
    array(
        'label' => esc_html__( 'Upload Logo', 'quicknav' ),
        'inline' => false,
        'name'  => 'quick_logo'
    )
);

// Default quick nav icon
quicknav_select_field(
    array(
        'label'  => esc_html__( 'Default Quick Nav Icon', 'quicknav' ),
        'inline' => true,
        'class'  => 'fontawesome',
        'name'   => 'default_nav_icon',
        'options' => quicknav_fa_icons()
    )
);

// Default quick nav title
quicknav_text_field(
    array(
        'label' => esc_html__( 'Default Quick Nav Title', 'quicknav' ),
        'inline' => false,
        'name'  => 'default_nav_title'
    )
);

quicknav_multitext_field(
    array(
        'label' => esc_html__( 'Quick Button', 'quicknav' ),
        'inline' => true,
        'name'  => 'quickbtn',
        'placeholder_1' => esc_html__( 'Title', 'quicknav' ),
        'placeholder_2' => esc_html__( 'Url', 'quicknav' ),
        'placeholder_3' => esc_html__( 'Icon', 'quicknav' )
    )
);

quicknav_radio_field(
    array(
        'label' => esc_html__( 'Quick Nav Position', 'quicknav' ),
        'inline' => true,
        'name'  => 'quicknavposition',
        'options' => [
            'left'   => esc_html__( 'Left', 'quicknav' ),
            'right'  => esc_html__( 'Right', 'quicknav' )
        ]
    )
);
