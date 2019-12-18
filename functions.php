<?php

function P3_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'P3_resources' );
//Nav menu
register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
    'footer' => __( 'Footer Menu'),


));
//logo support added 
add_theme_support( 'custom-logo', array(
	'height'      => 50,
	'width'       => 200,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
// register a mobile menu
function wdm_register_mobile_menu() {
    add_theme_support( 'nav-menus' );
    register_nav_menus( array('mobile-menu' => __( 'Mobile Menu', 'wdm' )) );
}
add_action( 'init', 'wdm_register_mobile_menu' );
// load the JS file
function wdm_mm_toggle_scripts() {
    wp_enqueue_script( 'wdm-mm-toggle', get_stylesheet_directory_uri() . '/js/mobile-menu-toggle.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'wdm_mm_toggle_scripts' );




/**
 * Custom Sidebar Function created to allow for sidebar usage in Wordpress
 * 
 * Derived by https://codex.wordpress.org/Function_Reference/register_sidebars
 * 
 * Created by William Walter 12/17/2019
 */
function ecc_web_dev_custom_sidebars() {
    register_sidebar( array(
        'name' => __( 'Green Bkgd Goal Area' ),
        'id' => 'goal_area_sidebar',
        'description' => 'Widgets in this area will be shown on the Goals Area Green Section',
        'before_widget' => '<li>',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Logo area for school logos' ),
        'id' => 'logo_area_sidebar',
        'description' => 'Widgets in this area will be shown school logos area',
        'before_widget' => '<li>',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets-init', 'ecc_web_dev_custom_sidebars' );

