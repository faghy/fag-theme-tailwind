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
    <!-- Load custom stylesheet -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/style.css">
    <!-- Google Fonts code --
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Quicksand?subset=latin&noto.script=Latn" >-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'remark' ); ?></a>

    <div class="container-fluid bg-slate-100">

        <header id="master-head" class="site-header py-2 flex-row">
            <div class="container-fluid mx-auto">
                <div class="flex justify-between gap-12 py-4 md:py-0 lg:py-0 pr-4 items-center">
                    <?php
                    if (function_exists('the_custom_logo')) {
	                    the_custom_logo();
                    } else {
	                    bloginfo( 'name' );
                    }
                    ?>

                    <div class="menu-wrapper">
                        <nav class="desktop-menu">
			                <?php
			                // Include the existing main navigation menu for desktop
			                wp_nav_menu(array(
				                'theme_location' => 'main-menu', // Name of the menu
				                'container' => false, // No wrapper element
				                'menu_class' => 'menu-class', // CSS classes for the menu container
			                ));
			                ?>
                        </nav>

                        <input type="checkbox" id="mobile-menu-toggle" class="mobile-menu-toggle">
                        <label for="mobile-menu-toggle" class="burger-menu">
                            <div class="burger-icon">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div>
                        </label>

                        <div class="mobile-menu">
			                <?php
			                // Include the existing main navigation menu for mobile
			                wp_nav_menu(array(
				                'theme_location' => 'main-menu', // Name of the menu
				                'container' => false, // No wrapper element
				                'menu_class' => 'mobile-menu-list', // CSS classes for the menu container
			                ));
			                ?>
                        </div>
                    </div>



                </div>
            </div>
        </header><!-- #master-head -->







































