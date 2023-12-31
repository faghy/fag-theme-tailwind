<?php

! defined( 'WPINC ' ) || die;
/**
 * Define Constants
 */
define( 'FAG_THEME_DIR', trailingslashit( get_template_directory() ) );

// Add support for the <title> tag
add_theme_support("title-tag");

// Add pagination support
add_theme_support('wp-pagenavi');

function my_theme_setup() {
	// Add additionals theme support
	add_theme_support('post-thumbnails');
	add_theme_support('align-wide');
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
	add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio'));
	add_theme_support('customize-selective-refresh-widgets');
	add_theme_support('starter-content');
	add_theme_support('automatic-feed-links');
	add_theme_support('comments');
}
add_action('after_setup_theme', 'my_theme_setup');


function my_theme_enqueue_scripts() {
	// Register custom script
	wp_register_script('custom-script', get_template_directory_uri() . '/dist/script.js', array(), '1.0', true);
	// Include custom script on all pages
	wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

// Add support for featured images
add_theme_support('post-thumbnails');

// Add  sidebar
function mytheme_widgets_init() {
	register_sidebar(array(
		'name' => 'Main Sidebar',
		'id' => 'primary-sidebar',
		'description' => 'This is the main sidebar of the theme.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init', 'mytheme_widgets_init');

// Custom logo
add_theme_support('custom-logo', array(
	'height' => 80, // Max Height
	'width' => 350, // Max Width
	'flex-height' => true,
));

function register_my_menus() {
	load_theme_textdomain( 'tailfagtheme', get_template_directory() . '/languages' );

	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu', 'tailfagtheme' ),
			'footer-menu' => __( 'Footer Menu', 'tailfagtheme' ),
			// if you want add other positions
		)
	);
}
add_action( 'init', 'register_my_menus' );

/* Load comment-reply.js wp file to activate comments reply */
function enqueue_comment_reply_script() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'enqueue_comment_reply_script' );


/* CSS for WP Editor */
function custom_editor_styles() {
	add_editor_style('assets/style.css'); // Your CSS file
}
add_action('admin_init', 'custom_editor_styles');
