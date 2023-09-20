<?php

! defined( 'WPINC ' ) || die;
/**
 * Define Constants
 */
define( 'FAG_THEME_DIR', trailingslashit( get_template_directory() ) );

function my_theme_enqueue_scripts() {
	// Register custom script
	wp_register_script('custom-script', get_template_directory_uri() . '/dist/script.js', array(), '1.0', true);

	// Include custom script on all pages
	wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');




add_theme_support('custom-logo', array(
	'height' => 80, // Max Height
	'width' => 350, // Max Width
	'flex-height' => true,
));

function register_my_menus() {
	load_theme_textdomain( 'fagtheme', get_template_directory() . '/languages' );

	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu', 'fagtheme' ),
			'footer-menu' => __( 'Footer Menu', 'fagtheme' ),
			// if you want add other positions
		)
	);
}
add_action( 'init', 'register_my_menus' );