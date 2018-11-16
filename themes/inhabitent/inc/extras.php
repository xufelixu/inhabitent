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
	
	function cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	  }
	  add_filter('upload_mimes', 'cc_mime_types');	

	  
/*custom hero image of the about page*/

	  function inhabitent_dynamic_css() {
		if( !is_page_template('about.php')) {
			return;
		}
	
		$image=CFS()->get('about_header_image');
		//var_dump($image);
	
		if(!$image){
			$hero_css = ".page-template-about .entry-header {
			  background: grey;
			  color: white;
			  width: 100%;
			  height: 100vh;
			  display: flex;
			  justify-content: center;
			  align-items: center; 
			  background-position: bottom;
			}";
		  } else {
			$hero_css = ".page-template-about .entry-header {
			  background: grey;
			  background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
			  url({$image});
			  color: white;
			  width: 100%;
			  height: 100vh;
			  display: flex;
			  justify-content: center;
			  align-items: center; 
			  background-size: cover;
			  background-position: bottom;
			}";	  
	}
	
		wp_add_inline_style('tent-style', $hero_css);
	}
	
	add_action('wp_enqueue_scripts', 'inhabitent_dynamic_css');

	

/* modify the product post type archive loop
*/

function inhabitent_mod_post_type_archive($query){

if(
(is_post_type_archive( array('product'))|| $query->is_tax('product_type'))
&& ! is_admin()
&& $query->is_main_query()

){
$query->set('orderby','title');
$query->set('order','ASC');
$query->set('posts_per_page','16');
}

}

add_action('pre_get_posts', 'inhabitent_mod_post_type_archive');


/*

filiter the product archive tiltle
*/

function inhabitent_archive_title($title){
if(is_post_type_archive('product')){
	$title= 'Shop Stuff';
	
}
elseif( is_tax('product_type')){
$title = sprintf('%1$s', single_term_title('',false));

}
return $title;
}


add_filter('get_the_archive_title','inhabitent_archive_title');



/*
replace the excerpt read more

*/
function inhabitent_excerpt_more($more){

global $post;
return '<a class="read-more href="'. get_permalink($post->ID). 
'">Read More</a>';
}

add_filter('except_more','inhabitent_excerpt_more');







