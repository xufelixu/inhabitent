<?php
/**
 * The template for displaying archive produdct pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );	
				?>
			</header><!-- .page-header -->

<!-- loop the list  -->
<section class="archive-frontpage-shop">
      <?php
    get_terms();
     $terms = get_terms(array(
      'taxonomy'=> 'product_type',
     'hide_empty'=> 0,
    ));

     foreach($terms as $term): ?>
     <div class="-archive-frontpage-term">
     <p ><a href="<?php echo get_term_link ($term);?>">
     <?php echo $term->name;?></a></p>
     </div>
     <?php endforeach;?>

     </section>





<div class="archive-php-page">

    <?php /* Start the Loop  acrhive pic */ ?>
	     <?php while ( have_posts() ) : the_post(); ?>

	<div class="product-link"> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		<?php the_post_thumbnail( 'large' ); ?></a>
	
		

     
		 <h3 class="product-link-title"><?php the_title(); ?></h3>
		 <div class="dots"></div>
	     <span class="price"><?php 
	     setlocale(LC_MONETARY, 'en_US');
	     echo money_format('%.2n',CFS()->get('price' )); ?><!-- product_price-->
		</span>
	</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		    <?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		    <?php endif; ?>

       
     
          

</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


