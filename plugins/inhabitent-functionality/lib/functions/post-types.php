<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type:Shop
function inhabitent_product() {

	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'menu_name'             => 'Products',
		'name_admin_bar'        => 'Product',
		'archives'              => 'Product Archives',
		'attributes'            => 'Product Attributes',
		'parent_item_colon'     => 'Parent Product:',
		'all_items'             => 'All Products',
		'add_new_item'          => 'Add New Product',
		'add_new'               => 'Add Product',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Product',
		'update_item'           => 'Update Product',
		'view_item'             => 'View Product',
		'view_items'            => 'View Products',
		'search_items'          => 'Search Product',
		'not_found'             => 'Product Not found',
		'not_found_in_trash'    => 'Product Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Product',
		'uploaded_to_this_item' => 'Uploaded to this Product',
		'items_list'            => 'Products list',
		'items_list_navigation' => 'Products list navigation',
		'filter_items_list'     => 'Filter Products list',
	);
	$args = array(
		'label'                 => 'Product',
		'description'           => 'Inhabitent Product',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'product', $args );
	
}
add_action( 'init', 'inhabitent_product', 0 );





// Register Custom Post Type: Adventures

function inhabitent_adventure() {



	$labels = array(

		'name'                  => 'Adventures',

		'singular_name'         => 'Adventure',

		'menu_name'             => 'Adventures',

		'name_admin_bar'        => 'Adventure',

		'archives'              => 'Adventure Archives',

		'attributes'            => 'Adventure Attributes',

		'parent_item_colon'     => 'Parent Adventure:',

		'all_items'             => 'All Adventures',

		'add_new_item'          => 'Add New Adventure',

		'add_new'               => 'Add Adventure',

		'new_item'              => 'New Adventure',

		'edit_item'             => 'Edit Adventure',

		'update_item'           => 'Update Adventure',

		'view_item'             => 'View Adventure',

		'view_items'            => 'View Adventures',

		'search_items'          => 'Search Adventure',

		'not_found'             => 'Adventure Not found',

		'not_found_in_trash'    => 'Not found in Trash',

		'featured_image'        => 'Featured Image',

		'set_featured_image'    => 'Set featured image',

		'remove_featured_image' => 'Remove featured image',

		'use_featured_image'    => 'Use as featured image',

		'insert_into_item'      => 'Insert into adventure',

		'uploaded_to_this_item' => 'Uploaded to this adventure',

		'items_list'            => 'Adventures list',

		'items_list_navigation' => 'Adventures list navigation',

		'filter_items_list'     => 'Filter adventures list',

	);

	$args = array(

		'label'                 => 'Adventure',

		'description'           => 'Inhabitent Adventure',

		'labels'                => $labels,

		'supports'              => array( 'title', 'editor', 'thumbnail' , 'revisions'  ),

		'hierarchical'          => true,

		'public'                => true,

		'show_ui'               => true,

		'show_in_menu'          => true,

		'menu_position'         => 5,

		'menu_icon'             => 'dashicons-palmtree',

		'show_in_admin_bar'     => true,

		'show_in_nav_menus'     => true,

		'can_export'            => true,

		'has_archive'           => true,

		'exclude_from_search'   => false,

		'publicly_queryable'    => true,

		'capability_type'       => 'page',

	);

	register_post_type( 'adventure', $args );
}

add_action('init', 'inhabitent_adventure', 0);