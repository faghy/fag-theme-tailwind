<?php
/**
 * fag Theme
 * @link https://dueclic.com
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/style.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'remark' ); ?></a>

    <div class="container-fluid">

        <header id="master-head" class="site-header bg-white py-2">
            <div class="container-fluid mx-auto">
                <div class="menu-wrap flex-none md:flex lg:flex items-center gap-12 py-4 md:py-0 lg:py-0 items-center">
                    <?php

                    the_custom_logo();
                    bloginfo('name');

                // Menu
                wp_nav_menu(array(
                    'theme_location' => 'main-menu', // name of menu
                    'container' => 'nav', // wrapper element, example: 'div' o 'nav'
                    'container_class' => 'menu-class', // CSS classes for element wrapper
                    'menu_class' => 'menu-ul-class ', // CSS classes for menu list
                ));

                    ?>
                </div>
            </div>
        </header><!-- #master-head -->







































