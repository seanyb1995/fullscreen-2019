<?php
// Register Custom Taxonomy
if(!function_exists('showreels_major_taxonomy')){
	function showreels_major_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Major', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Major', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Major', 'text_domain' ),
		'all_items'                  => __( 'All Major', 'text_domain' ),
		'parent_item'                => __( 'Parent Major', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Major:', 'text_domain' ),
		'new_item_name'              => __( 'New Major Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Major', 'text_domain' ),
		'edit_item'                  => __( 'Edit Major', 'text_domain' ),
		'update_item'                => __( 'Update Major', 'text_domain' ),
		'view_item'                  => __( 'View Major', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Major with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Major', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Major', 'text_domain' ),
		'search_items'               => __( 'Search Major', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Major', 'text_domain' ),
		'items_list'                 => __( 'Major list', 'text_domain' ),
		'items_list_navigation'      => __( 'Major list navigation', 'text_domain' ),
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
	register_taxonomy( 'major', array( 'showreels' ), $args );
}
}
?>