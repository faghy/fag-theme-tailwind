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
<a class="skip-link screen-reader-text" href="#primary-content"><?php esc_html_e( 'Skip to content', 'bingopress' ); ?></a>

<header>
	<?php //get_template_part( 'template-parts/elements/site-nav' ); ?>
</header>








































