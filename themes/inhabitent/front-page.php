<?php
/**
 * The main template file.
 *Template Name: home page 
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			      <?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif;

		?>
            <?php
   $args = array( 'post_type' => 'post','order','posts_per_page'=> 3 );
   $joural_posts = get_posts( $args ); // returns an array of posts
			?> 
		<section class="front-page_journal">	
<?php foreach ( $joural_posts as $post ) : setup_postdata( $post ); ?>
   <article class="journal-entry">
   
   <?php 
   if (has_post_thumbnail()){
		 the_post_thumbnail('medium');}?>


<span class="entry-meta">
<?php
		 inhabitent_posted_on();
		 echo ' / ';
		 comments_number('0 Comments', '1 Comments', '% Comments');?>
		 </span>

		 <a href="<?php echo get_the_permalink(); ?>">
		 <?php the_title();?></a>
		 <a class="read-more",href="<?php echo get_the_permalink(); ?>">
Read More 

</a>			 </article> 
<?php endforeach; wp_reset_postdata(); ?>

</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
