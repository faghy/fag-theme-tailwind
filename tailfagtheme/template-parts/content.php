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
		<?php comments_template() . comment_form(); ?>
    </div>

<?php
endif;
$archive_link = get_permalink(get_option('page_for_posts')); // Link to the general post archive page
?>
<hr class="mt-2" />

<?php
// Paginazione dei post singoli
wp_link_pages(array(
	'before' => '<div class="page-links">' . __('Pages:', 'tailfagtheme'),
	'after'  => '</div>',
));
?>


<div class="return-to-archive mt-4 mb-2 text-right">
    <a href="<?php echo esc_url($archive_link); ?>" >Return Archive</a>
</div>
