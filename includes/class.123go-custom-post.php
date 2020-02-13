<?php
/*
 *  Register Custom Post Types
 */
// Project CPT
function uamswp_register_project_cpt() {

	$args = array (
		'label' => esc_html__( 'Projects', 'uamswp' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Projects', 'uamswp' ),
			'name_admin_bar' => esc_html__( 'Project', 'uamswp' ),
			'add_new' => esc_html__( 'Add New', 'uamswp' ),
			'add_new_item' => esc_html__( 'Add New Project', 'uamswp' ),
			'new_item' => esc_html__( 'New Project', 'uamswp' ),
			'edit_item' => esc_html__( 'Edit Project', 'uamswp' ),
			'view_item' => esc_html__( 'View Project', 'uamswp' ),
			'update_item' => esc_html__( 'Update Project', 'uamswp' ),
			'all_items' => esc_html__( 'All Projects', 'uamswp' ),
			'search_items' => esc_html__( 'Search Projects', 'uamswp' ),
			'parent_item_colon' => esc_html__( 'Parent Project', 'uamswp' ),
			'not_found' => esc_html__( 'No Projects found', 'uamswp' ),
			'not_found_in_trash' => esc_html__( 'No Projects found in Trash', 'uamswp' ),
			'name' => esc_html__( 'Projects', 'uamswp' ),
			'singular_name' => esc_html__( 'Project', 'uamswp' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'show_in_rest' => true,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-info',
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'thumbnail',
		),
		'taxonomies' => array(
			'category',
		),
		'rewrite' => true,
	);

	register_post_type( 'project', $args );
}
add_action( 'init', 'uamswp_register_project_cpt' );
// Accomplishment CPT
function uamswp_register_accomplishment_cpt() {

	$args = array (
		'label' => esc_html__( 'Accomplishments', 'uamswp' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Accomplishments', 'uamswp' ),
			'name_admin_bar' => esc_html__( 'Accomplishment', 'uamswp' ),
			'add_new' => esc_html__( 'Add New', 'uamswp' ),
			'add_new_item' => esc_html__( 'Add New Accomplishment', 'uamswp' ),
			'new_item' => esc_html__( 'New Accomplishment', 'uamswp' ),
			'edit_item' => esc_html__( 'Edit Accomplishment', 'uamswp' ),
			'view_item' => esc_html__( 'View Accomplishment', 'uamswp' ),
			'update_item' => esc_html__( 'Update Accomplishment', 'uamswp' ),
			'all_items' => esc_html__( 'All Accomplishments', 'uamswp' ),
			'search_items' => esc_html__( 'Search Accomplishments', 'uamswp' ),
			'parent_item_colon' => esc_html__( 'Parent Accomplishment', 'uamswp' ),
			'not_found' => esc_html__( 'No Accomplishments found', 'uamswp' ),
			'not_found_in_trash' => esc_html__( 'No Accomplishments found in Trash', 'uamswp' ),
			'name' => esc_html__( 'Accomplishments', 'uamswp' ),
			'singular_name' => esc_html__( 'Accomplishment', 'uamswp' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-book-alt',
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'show_in_menu' => true,
		'menu_position' => 22,
		'supports' => array(
			'title',
			'thumbnail',
		),
		'rewrite' => true,
	);

	register_post_type( 'accomplishment', $args );
}
add_action( 'init', 'uamswp_register_accomplishment_cpt' );
