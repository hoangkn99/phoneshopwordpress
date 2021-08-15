<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Buzz_Store
 */

get_header(); ?>

<div class="buzz-container buzz-clearfix">
	<div class="buzz-row buzz-clearfix">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_pagination( 
		            		array(
							    'prev_text' => esc_html__( 'Prev', 'buzzstore' ),
							    'next_text' => esc_html__( 'Next', 'buzzstore' ),
							)
			            );

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; 
				?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar('right'); ?>

	</div>
</div>

<?php get_footer();