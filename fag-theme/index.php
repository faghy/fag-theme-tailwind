<?php
/**
 * Tailwind-Fag-Theme
 * @link https://github.com/faghy/fag-theme-tailwind/settings
 */

get_header();
?>
    <main id="primary" class="site-main">
        <div class="flex">
            <div class="grow w-full"> <!-- add class for change page width, es: md:w-1/2 lg:w-3/4 -->
                <?php
                if ( have_posts() ) :
                    if ( is_home() && ! is_front_page() ) : // if is archive page and not home
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/archive');
                        endwhile;
                    ?>
            <!-- Pagination -->
                <div class="pagination mt-6 mb-1">
                    <?php
                    global $wp_query;

                    $big = 999999999; // Very large number to ensure the numbering works correctly

                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $wp_query->max_num_pages,
                        'prev_text' => __('&laquo; Previous','tailfagtheme'),
                        'next_text' => __('Next &raquo;','tailfagtheme'),
                    ));
                    ?>
                </div>
            </div>
                <!-- Sidebar -->
            <div class="archive-sidebar">
							<?php
							if (is_active_sidebar('primary-sidebar')) {
								dynamic_sidebar('primary-sidebar');
							}
							?>
                        </div>
					<?php
						else :
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();
                                ?>
                            <?php
                            $post_id = get_the_ID();
                            $post_layout = get_post_meta($post_id, 'post_layout', true);
                            if (!empty($post_layout)) {
                                echo '<div class="' . esc_attr($post_layout) . '"> pl-3.5 pr-3.5';
                            } else {
                                echo '<div class="empty-post-layout">';
                                }
                            ?>

                            <?php get_template_part( 'template-parts/content', get_post_type() ); ?>

                                </div>
                            <?php
                            endwhile;
						endif;

					else :
						get_template_part( 'template-parts/content', get_post_format() );


                        endif;
					?>
            </div>
        </div>
    </main><!-- #main -->


</div><!-- fag .container-fluid -->
</div>
<?php
get_footer();