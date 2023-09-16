<?php

/**
 * Fag Theme
 */
get_header();
?>
    <main id="primary" class="site-main pb-10">
        <div class="flex-none md:flex lg:flex gap-9 pt-8 md:pt-12 lg:pt-16">
            <div class="w-full "> <!-- aggiungere qui le classi per modificare la larghezza pagina, es: md:w-1/2 lg:w-3/4 -->
                <div class="flex-none md:flex lg:flex flex-wrap -ml-3.5 -mr-3.5">
					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) :
							?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
						<?php
						endif;

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
                            echo '<div class="empty-post-layout pl-3.5 pr-3.5">';
                            }
                        ?>

                        <?php get_template_part( 'template-parts/content', get_post_type() ); ?>

                            </div>
						<?php

						endwhile;
					else :

						get_template_part( 'template-parts/content', get_post_format() );

					endif;
					?>
                </div>
            </div>
        </div>
    </main><!-- #main -->

<?php
get_footer();