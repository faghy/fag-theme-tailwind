<?php

! defined( 'WPINC ' ) || die;
/**
 * Define Constants
 */
define( 'FAG_THEME_DIR', trailingslashit( get_template_directory() ) );

//require_once FAG_THEME_DIR . '/inc/class-remark-walker-menu.php';


add_theme_support('custom-logo', array(
	'height' => 80, // Altezza massima del logo
	'width' => 350, // Larghezza massima del logo
	'flex-height' => true,
));