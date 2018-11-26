<?php

/**

 * The template for displaying all single posts.

 *

 * @package RED_Starter_Theme

 */



get_header(); ?>




	<div id="primary" class="adventure-single-content">

		<main id="main" class="site-main" role="main">




		<?php while ( have_posts() ) : the_post(); ?>




			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">

				<?php if ( has_post_thumbnail() ) : ?>

					<?php the_post_thumbnail( 'large' ); ?>

				<?php endif; ?>




				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<span class="author">

					<?php inhabitent_posted_by(); ?>

				</span>

				

			</header><!-- .entry-header -->




			<div class="entry-content">

				<?php the_content(); ?>

				<?php

					wp_link_pages( array(

						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),

						'after'  => '</div>',

					) );

				?>

			</div><!-- .entry-content -->




			<footer class="entry-footer">

				<?php inhabitent_entry_footer(); ?>

			</footer><!-- .entry-footer -->

		</article><!-- #post-## -->


		<section class="social-buttons">

			<a class="black-btn" href="<?php ''; ?>">

				<i class="fab fa-facebook-f">  </i> Like</a>

			<a class="black-btn" href="<?php echo get_the_permalink(); ?>">

				<i class="fab fa-twitter"> </i>  Tweet</a>

			<a class="black-btn" href="<?php echo get_the_permalink(); ?>">

				<i class="fab fa-pinterest">  </i>  Pin</a>

		</section>

		<?php endwhile; // loop ends. ?>

		</main><!-- #main -->

	</div><!-- #primary -->



<?php get_footer(); ?>
