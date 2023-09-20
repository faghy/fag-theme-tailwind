<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content overflow-hidden">
		<?php
        the_title('<h1 class="entry-title">','</h1>');
		the_content();

		?>
    </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
