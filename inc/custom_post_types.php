<?php

function stone_cpt() {

	$labels = array(
		'name'                  => 'Stones',
		'singular_name'         => 'Stone',
		'menu_name'             => 'Stones',
		'name_admin_bar'        => 'Stone',
		'archives'              => 'Stone Archives',
		'attributes'            => 'Stone Attributes',
		'parent_item_colon'     => 'Parent Stone:',
		'all_items'             => 'All Stones',
		'add_new_item'          => 'Add New Stone',
		'add_new'               => 'Add New',
		'new_item'              => 'New Stone',
		'edit_item'             => 'Edit Stone',
		'update_item'           => 'Update Stone',
		'view_item'             => 'View Stone',
		'view_items'            => 'View Stone',
		'search_items'          => 'Search Stone',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Stone',
		'uploaded_to_this_item' => 'Uploaded to this Stone',
		'items_list'            => 'Stones list',
		'items_list_navigation' => 'Stones list navigation',
		'filter_items_list'     => 'Filter Stones list',
	);
	$rewrite = array(
		'slug'                  => 'stones',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Stone',
		'description'           => 'Stones',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-products',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'stones', $args );

}
add_action( 'init', 'stone_cpt', 0 );



// Projects
function project_cpt() {

	$labels = array(
		'name'                  => 'Projects',
		'singular_name'         => 'Project',
		'menu_name'             => 'Projects',
		'name_admin_bar'        => 'Project',
		'archives'              => 'Project Archives',
		'attributes'            => 'Project Attributes',
		'parent_item_colon'     => 'Parent Project:',
		'all_items'             => 'All Projects',
		'add_new_item'          => 'Add New Project',
		'add_new'               => 'Add New',
		'new_item'              => 'New Project',
		'edit_item'             => 'Edit Project',
		'update_item'           => 'Update Project',
		'view_item'             => 'View Project',
		'view_items'            => 'View Project',
		'search_items'          => 'Search Project',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Project',
		'uploaded_to_this_item' => 'Uploaded to this Project',
		'items_list'            => 'Projects list',
		'items_list_navigation' => 'Projects list navigation',
		'filter_items_list'     => 'Filter Applications list',
	);
	$rewrite = array(
		'slug'                  => 'projects',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Project',
		'description'           => 'Projects',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tag',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'project_cpt', 0 );

function stone_type_init() {
	$labels = array(
		'name'                       => _x('Types', 'Taxonomy General Name', 'text_domain'),
        'singular_name'              => _x('Type', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name'                  => __('Types', 'text_domain'),
        'all_items'                  => __('All Types', 'text_domain'),
        'parent_item'                => __('Parent Type', 'text_domain'),
        'parent_item_colon'          => __('Parent Type:', 'text_domain'),
        'new_item_name'              => __('New Type Name', 'text_domain'),
        'add_new_item'               => __('Add New Type', 'text_domain'),
        'edit_item'                  => __('Edit Type', 'text_domain'),
        'update_item'                => __('Update Type', 'text_domain'),
        'view_item'                  => __('View Type', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'add_or_remove_items'        => __('Add or remove items', 'text_domain'),
        'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
        'popular_items'              => __('Popular Items', 'text_domain'),
        'search_items'               => __('Search Items', 'text_domain'),
        'not_found'                  => __('Not Found', 'text_domain'),
        'no_terms'                   => __('No items', 'text_domain'),
        'items_list'                 => __('Types list', 'text_domain'),
        'items_list_navigation'      => __('Types list navigation', 'text_domain'),
	  );

    // create a new taxonomy
    register_taxonomy(
        'type', 'stones',
        array(
            'hierarchical' => true,
			'show_in_nav_menus' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'type' )
        )
    );
}
add_action( 'init', 'stone_type_init' );