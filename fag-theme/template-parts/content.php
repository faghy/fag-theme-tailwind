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

<?php
// Check if comments are enabled for this page
if (comments_open() || get_comments_number()) :
	?>
    <hr />
    <div id="comments" class="comments-area mt-10">
		<?php comments_template(); ?>
    </div>

<?php
endif;
?>