<?php
/**
 * The main template file.
 *Template Name: home page 
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!-- frontpage hero banner, add the background image with css e.g. background:url(../../images/home-hero.jpg)-->
<section class="home-hero">
	<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg'?>"
class="logo" alt="inhabitent full logo"/>
   </section>


<!-- shop logo -->
<h2>Shop Stuff</h2>
<section class="frontpage-shop">
	
<?php
get_terms();
$terms = get_terms(array(
	'taxonomy'=> 'product_type',
	'hide_empty'=> 0,
));

foreach($terms as $term): ?>


<div class="frontpage-term">
<img src="<?php echo get_template_directory_uri() . '/images/'. $term->slug . '.svg' ?>" alt="<?php echo $term->name;?>"  />
<p><?php echo $term->description;?></P>
 <p class="front-page-link"><a href="<?php echo get_term_link ($term);?>">
 <?php echo $term->name;?> Stuff</a></p>
</div>
<?php endforeach;?>
</section>



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
   $args = array( 'post_type' => 'post','order'=>'ASC','posts_per_page'=> 3 );//limit to 3
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

		<p class="entry-meta-title" ><a href="<?php echo get_the_permalink(); ?>">
		 <?php the_title();?></a></p>
		 <a class="read-more",href="<?php echo get_the_permalink(); ?>">
Read More 

</a>			 </article> 
<?php endforeach; wp_reset_postdata(); ?>

</section><!-- #front journal entries info-->




<!--Adventures Section -->

	<?php

$args = array(

'order' => 'ASC',

'post_type' => 'adventure',

);

$adventure_posts = get_posts( $args ); 

?>

<h2 class="front-title">Latest Adventures</h2>

<section class="adventures-section">

<div class="stories-section">

	<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>

		<article class="adventure">

	

			<?php 

				if ( has_post_thumbnail() ) {

					the_post_thumbnail('large'); 

				} 

			?>

			<div class="story-info">

				<div class="adv-title">

					<a href="<?php get_the_permalink(); ?>">
						<?php the_title(); ?>
					</a>

				</div>

				<a class="white-btn" href="<?php echo get_the_permalink(); ?>">

					read more

				</a>

			</div>	

		</article>

	<?php endforeach; wp_reset_postdata(); ?>

</div><!-- stories-container  -->



<a class="brand-btn" href="<?php echo get_the_permalink(); ?>">

	more adventures

</a>

</section>



</main><!-- #main -->

</div><!-- #primary -->

<?php get_footer(); ?>


