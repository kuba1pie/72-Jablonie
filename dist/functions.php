<?php
 
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function register_my_menus() {
  register_nav_menus(
    array(
      'menu_main' => __( 'Menu główne' ),
      'menu_cat' => __( 'Menu kategorie' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
}
 
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );