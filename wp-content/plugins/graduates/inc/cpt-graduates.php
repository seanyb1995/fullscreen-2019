<?php
// Register Custom Post Type
if(!function_exists('graduates_post_type')){
	function graduates_post_type() {
	$labels = array(
		'name'                  => _x( 'Graduates', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Graduate', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Graduates', 'text_domain' ),
		'name_admin_bar'        => __( 'Graduates', 'text_domain' ),
		'archives'              => __( 'Graduates Archives', 'text_domain' ),
		'attributes'            => __( 'Graduates Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Graduates:', 'text_domain' ),
		'all_items'             => __( 'All Graduates', 'text_domain' ),
		'add_new_item'          => __( 'Add New Graduate', 'text_domain' ),
		'add_new'               => __( 'Add New Graduate Item', 'text_domain' ),
		'new_item'              => __( 'New Graduate Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Graduate', 'text_domain' ),
		'update_item'           => __( 'Update Graduate', 'text_domain' ),
		'view_item'             => __( 'View Graduatey', 'text_domain' ),
		'view_items'            => __( 'View Graduates', 'text_domain' ),
		'search_items'          => __( 'Search Graduates', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Graduate', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Graduate', 'text_domain' ),
		'items_list'            => __( 'Graduates list', 'text_domain' ),
		'items_list_navigation' => __( 'Graduates list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Graduates list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Graduates', 'text_domain' ),
		'description'           => __( 'Content for each Graduate Item', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'major' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'graduates', $args );
	}
}
?>