<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				
			    <div class="site-branding">
					
					
			
				
				<?php if (is_front_page() || is_page_template('about.php')): ?>
				<section class="header-white-logo-tent">
				<a href = "<?php echo esc_url( home_url( '/' ) ); ?>
" ><img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-tent-white.svg' ?>"
                class="logo-tent" alt="inhabitent logo tent"/></a>
				</section>
				
				<?php else: ?>
				<section class="header-green-logo-tent">
				 <a href = "<?php echo esc_url( home_url( '/' ) ); ?>
" ><img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-tent.svg' ?>"
                class="logo-tent" alt="inhabitent logo tent"/></a>
				 </section>

			    <?php endif; ?>

				</div><!-- .site-branding with green logo tent -->

			  
			   
              <div class="search-form-site-navigation">	
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
					<div class = "search-form"> <?php get_search_form(); ?></div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
