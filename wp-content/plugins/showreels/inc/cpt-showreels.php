<?php
// Register Custom Post Type
if(!function_exists('showreels_post_type')){
	function showreels_post_type() {
	$labels = array(
		'name'                  => _x( 'Showreels', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Showreel', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Showreels', 'text_domain' ),
		'name_admin_bar'        => __( 'Showreels', 'text_domain' ),
		'archives'              => __( 'Showreels Archives', 'text_domain' ),
		'attributes'            => __( 'Showreels Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Showreels:', 'text_domain' ),
		'all_items'             => __( 'All Showreels', 'text_domain' ),
		'add_new_item'          => __( 'Add New Showreel', 'text_domain' ),
		'add_new'               => __( 'Add New Showreel Item', 'text_domain' ),
		'new_item'              => __( 'New Showreel Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Showreel', 'text_domain' ),
		'update_item'           => __( 'Update Showreel', 'text_domain' ),
		'view_item'             => __( 'View Showreel', 'text_domain' ),
		'view_items'            => __( 'View Graduate', 'text_domain' ),
		'search_items'          => __( 'Search Showreels', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Showreel', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Showreel', 'text_domain' ),
		'items_list'            => __( 'Showreels list', 'text_domain' ),
		'items_list_navigation' => __( 'Showreels list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Showreels list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Showreels', 'text_domain' ),
		'description'           => __( 'Content for each Showreel Item', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'major' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'showreels', $args );
	}
}
?>