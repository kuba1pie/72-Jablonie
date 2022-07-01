<?php
 
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function register_my_menus() {
  register_nav_menus(
    array(
      'menu_main' => __( 'Menu główne' ),
      'menu_left' => __( 'Menu lewe' ),
      'menu_right' => __( 'Menu prawe' ),
      'menu_mobile' => __( 'Menu mobile' ),
      'menu_cat' => __( 'Menu kategorie' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
}
 
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );

// Add Footer callout section to admin appearance customize screen
function lwp_footer_callout($wp_customize) {
	$wp_customize->add_section('lwp-footer-callout-section', array(
		'title' => 'Footer Callout'
	));

	$wp_customize->add_setting('lwp-footer-callout-headline', array(
		'default' => 'Example Headline Text!'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-headline-control', array(
			'label' => 'Headline',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-headline'
  )));

  $wp_customize->add_setting('lwp-footer-callout-description', array(
  'default' => 'Example Description Text!'
	));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-description-control', array(
			'label' => 'Description',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-description'
  )));

	$wp_customize->add_setting('lwp-footer-callout-text', array(
		'default' => 'Example paragraph text.'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-text-control', array(
			'label' => 'Text',
			'section' => 'lwp-footer-callout-section',
			'settings' => 'lwp-footer-callout-text',
			'type' => 'textarea'
		)));
}

add_action('customize_register', 'lwp_footer_callout');

// Add Lunch callout section to admin appearance customize screen
function lwp_lunch_callout($wp_customize) {
	$wp_customize->add_section('lwp-lunch-callout-section', array(
		'title' => 'Lunch Callout'
	));

	$wp_customize->add_setting('lwp-lunch-callout-headline', array(
		'default' => 'Example Headline Text!'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-lunch-callout-headline-control', array(
			'label' => 'Headline',
			'section' => 'lwp-lunch-callout-section',
			'settings' => 'lwp-lunch-callout-headline'
  )));

	$wp_customize->add_setting('lwp-lunch-callout-text', array(
		'default' => 'Example paragraph text.'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-lunch-callout-text-control', array(
			'label' => 'Text',
			'section' => 'lwp-lunch-callout-section',
			'settings' => 'lwp-lunch-callout-text',
			'type' => 'textarea'
		)));
}

add_action('customize_register', 'lwp_lunch_callout');

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );