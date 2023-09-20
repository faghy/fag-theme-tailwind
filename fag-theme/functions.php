<?php

! defined( 'WPINC ' ) || die;
/**
 * Define Constants
 */
define( 'FAG_THEME_DIR', trailingslashit( get_template_directory() ) );

//require_once FAG_THEME_DIR . '/inc/class-remark-walker-menu.php';


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