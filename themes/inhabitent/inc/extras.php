<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );


//todo modify headlog 
function my_custom_login_logo() {
	echo '<style type="text/css">                                                                   
		h1 a { background-image:url('.get_stylesheet_directory_uri().'/login-logo.svg) !important; 
		height: 120px !important; width: 300px !important;background-size:100% !important;}                            
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

function inhabitent_login_logo_url() {
	return get_bloginfo( 'url' );
	}
	add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );
	
	
