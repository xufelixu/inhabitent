<?php
/**
 * The template for displaying about page on inhabitent.
 *
 * @package RED_Starter_Theme
 *  Template Name: about page 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		       <div class="site-branding">
	
				<!-- <section class="header-white-logo-tent">
	            <img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-tent-white.svg' ?>"
                class="logo-tent" alt="inhabitent logo tent"/>
                </section> -->
				
				</div>

			<?php while ( have_posts() ) : the_post(); ?>
            
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
