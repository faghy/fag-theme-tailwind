	<!-- #footer -->
	<footer class="relative border-t-2 border-gray-300">
		<div class="max-w-7xl mx-auto px-4 sm:px-6">
				<div class="flex justify-center items-center py-3 md:space-x-10">
						<?php
						if (has_nav_menu('footer')) {
							wp_nav_menu( array(
								'theme_location'    => 'footer',
								'depth'             => 1,
								'container'         => false,
								'menu_class'        => 'footer-menu',
							));
						}
						?>
				</div>
		</div>

		<div class="copyright flex flex-row justify-between">
		<p class="float-left p-2 text-gray-700 ]">
			<small>
			<?php
				printf(
					esc_html__( 'Copyright &copy; %s. Rights are free.', 'fagtheme' ),
					'<a href="' . esc_url( home_url( '/' ) ) . '"rel="home">'.get_bloginfo( 'name' ).'</a>'
				);
			?>
			</small>
		</p>
            <p class="text-center p-2 text-gray-500 text-sm ">
	            <?php
	            printf(
		            esc_html__( 'For help visit %s.', 'fagtheme' ),
		            '<a href="' . esc_url( __( 'https://dnsbazar.com', 'fagtheme' ) ) . '">dnsbazar</a>'
	            );
	            ?>
            </p>

		<p class="text-right p-2 text-gray-500 text-sm ">
				<?php
					printf(
                            esc_html__( 'Created with &#x2764; by %s.', 'fagtheme' ),
						'<a href="' . esc_url( __( 'https://dueclic.com', 'fagtheme' ) ) . '">dueclic</a>'
					);
				?>
		</p>
		</div>
	</footer>
	<!-- #footer -->
	<?php wp_footer(); ?>

</body>
</html>

