<?php

/**

 * The template for displaying adventures pages.

 *

 * @package RED_Starter_Theme

 */




get_header(); ?>




	<div id="primary" class="archive-area">

		<main id="main" class="site-main" role="main">




		<?php if ( have_posts() ) : ?>




			<header class="page-header">

			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

				<?php

					the_archive_title( '<h1 class="page-title">', '</h1>' );

				?>

			</header><!-- .page-header -->




			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

				<?php the_posts_navigation(); ?>




			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			

		<?php endif; ?>

	

	</main><!-- #main -->

</div><!-- #primary -->




<?php get_sidebar(); ?>

<?php get_footer(); ?>

