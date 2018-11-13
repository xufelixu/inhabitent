<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function inhabitent_poroduct_types() {

	$labels = array(
		'name'                       => 'Product type',
		'singular_name'              => 'Product type',
		'menu_name'                  => 'Product types',
		'all_items'                  => 'All Product types',
		'parent_item'                => 'Parent Product type',
		'parent_item_colon'          => 'Parent Product type:',
		'new_item_name'              => 'New Product type Name',
		'add_new_item'               => 'Add New Product type',
		'edit_item'                  => 'Edit Product type',
		'update_item'                => 'Update Product type',
		'view_item'                  => 'View Item',
		'separate_items_with_commas' => 'Separate Product types with commas',
		'add_or_remove_items'        => 'Add or remove Product types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Product types',
		'search_items'               => 'Search Product types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Product types',
		'items_list'                 => 'Items Product type',
		'items_list_navigation'      => 'Product types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'product' ), $args );

}
add_action( 'init', 'inhabitent_poroduct_types', 0 );