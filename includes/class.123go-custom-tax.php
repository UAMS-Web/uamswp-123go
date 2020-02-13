<?php
/*
 *  Register Custom Taxonomies
 */
// Type of Accomplishments
function uamswp_register_accomplishment_tax() {

	$args = array (
		'label' => esc_html__( 'Type of Accomplishments', 'uamswp' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Type of Accomplishments', 'uamswp' ),
			'all_items' => esc_html__( 'All Type of Accomplishments', 'uamswp' ),
			'edit_item' => esc_html__( 'Edit Type of Accomplishment', 'uamswp' ),
			'view_item' => esc_html__( 'View Type of Accomplishment', 'uamswp' ),
			'update_item' => esc_html__( 'Update Type of Accomplishment', 'uamswp' ),
			'add_new_item' => esc_html__( 'Add new Type of Accomplishment', 'uamswp' ),
			'new_item_name' => esc_html__( 'New Type of Accomplishment', 'uamswp' ),
			'parent_item' => esc_html__( 'Parent Type of Accomplishment', 'uamswp' ),
			'parent_item_colon' => esc_html__( 'Parent Type of Accomplishment:', 'uamswp' ),
			'search_items' => esc_html__( 'Search Type of Accomplishments', 'uamswp' ),
			'popular_items' => esc_html__( 'Popular Type of Accomplishments', 'uamswp' ),
			'separate_items_with_commas' => esc_html__( 'Separate Type of Accomplishments with commas', 'uamswp' ),
			'add_or_remove_items' => esc_html__( 'Add or remove Type of Accomplishments', 'uamswp' ),
			'choose_from_most_used' => esc_html__( 'Choose most used Type of Accomplishments', 'uamswp' ),
			'not_found' => esc_html__( 'No Type of Accomplishments found', 'uamswp' ),
			'name' => esc_html__( 'Type of Accomplishments', 'uamswp' ),
			'singular_name' => esc_html__( 'Type of Accomplishment', 'uamswp' ),
		),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => false,
		'show_in_quick_edit' => false,
		'show_admin_column' => false,
		'show_in_rest' => true,
		'hierarchical' => false,
		'query_var' => true,
		'sort' => false,
		'rewrite_no_front' => false,
		'rewrite_hierarchical' => false,
		'rewrite' => true,
	);

	register_taxonomy( 'accomplishment_type', array( 'accomplishment' ), $args );
}
add_action( 'init', 'uamswp_register_accomplishment_tax', 0 );
// Unit
function uamswp_register_unit_tax() {

	$args = array (
		'label' => esc_html__( 'Units', 'uamswp' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Units', 'uamswp' ),
			'all_items' => esc_html__( 'All Units', 'uamswp' ),
			'edit_item' => esc_html__( 'Edit Unit', 'uamswp' ),
			'view_item' => esc_html__( 'View Unit', 'uamswp' ),
			'update_item' => esc_html__( 'Update Unit', 'uamswp' ),
			'add_new_item' => esc_html__( 'Add new Unit', 'uamswp' ),
			'new_item_name' => esc_html__( 'New Unit', 'uamswp' ),
			'parent_item' => esc_html__( 'Parent Unit', 'uamswp' ),
			'parent_item_colon' => esc_html__( 'Parent Unit:', 'uamswp' ),
			'search_items' => esc_html__( 'Search Units', 'uamswp' ),
			'popular_items' => esc_html__( 'Popular Units', 'uamswp' ),
			'separate_items_with_commas' => esc_html__( 'Separate Units with commas', 'uamswp' ),
			'add_or_remove_items' => esc_html__( 'Add or remove Units', 'uamswp' ),
			'choose_from_most_used' => esc_html__( 'Choose most used Units', 'uamswp' ),
			'not_found' => esc_html__( 'No Units found', 'uamswp' ),
			'name' => esc_html__( 'Units', 'uamswp' ),
			'singular_name' => esc_html__( 'Unit', 'uamswp' ),
		),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
		'show_in_quick_edit' => false,
		'show_admin_column' => false,
		'show_in_rest' => true,
		'hierarchical' => false,
		'query_var' => true,
		'sort' => false,
		'rewrite_no_front' => false,
		'rewrite_hierarchical' => false,
		'rewrite' => true,
	);

	register_taxonomy( 'unit', array( 'project' ), $args );
}
add_action( 'init', 'uamswp_register_unit_tax', 0 );
// Academic Departments
function uamswp_register_department_tax() {

	$args = array (
		'label' => esc_html__( 'Academic Departments', 'uamswp' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Academic Departments', 'uamswp' ),
			'all_items' => esc_html__( 'All Academic Departments', 'uamswp' ),
			'edit_item' => esc_html__( 'Edit Academic Department', 'uamswp' ),
			'view_item' => esc_html__( 'View Academic Department', 'uamswp' ),
			'update_item' => esc_html__( 'Update Academic Department', 'uamswp' ),
			'add_new_item' => esc_html__( 'Add new Academic Department', 'uamswp' ),
			'new_item_name' => esc_html__( 'New Academic Department', 'uamswp' ),
			'parent_item' => esc_html__( 'Parent Academic Department', 'uamswp' ),
			'parent_item_colon' => esc_html__( 'Parent Academic Department:', 'uamswp' ),
			'search_items' => esc_html__( 'Search Academic Departments', 'uamswp' ),
			'popular_items' => esc_html__( 'Popular Academic Departments', 'uamswp' ),
			'separate_items_with_commas' => esc_html__( 'Separate Academic Departments with commas', 'uamswp' ),
			'add_or_remove_items' => esc_html__( 'Add or remove Academic Departments', 'uamswp' ),
			'choose_from_most_used' => esc_html__( 'Choose most used Academic Departments', 'uamswp' ),
			'not_found' => esc_html__( 'No Academic Departments found', 'uamswp' ),
			'name' => esc_html__( 'Academic Departments', 'uamswp' ),
			'singular_name' => esc_html__( 'Academic Department', 'uamswp' ),
		),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
		'show_in_quick_edit' => false,
		'show_admin_column' => false,
		'show_in_rest' => true,
		'hierarchical' => false,
		'query_var' => true,
		'sort' => false,
		'rewrite_no_front' => false,
		'rewrite_hierarchical' => false,
		'rewrite' => true,
	);

	register_taxonomy( 'department', array( 'project' ), $args );
}
add_action( 'init', 'uamswp_register_department_tax', 0 );
// Size
function uamswp_register_size_tax() {

	$args = array (
		'label' => esc_html__( 'Size', 'uamswp' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Size', 'uamswp' ),
			'all_items' => esc_html__( 'All Size', 'uamswp' ),
			'edit_item' => esc_html__( 'Edit Size', 'uamswp' ),
			'view_item' => esc_html__( 'View Size', 'uamswp' ),
			'update_item' => esc_html__( 'Update Size', 'uamswp' ),
			'add_new_item' => esc_html__( 'Add new Size', 'uamswp' ),
			'new_item_name' => esc_html__( 'New Size', 'uamswp' ),
			'parent_item' => esc_html__( 'Parent Size', 'uamswp' ),
			'parent_item_colon' => esc_html__( 'Parent Size:', 'uamswp' ),
			'search_items' => esc_html__( 'Search Size', 'uamswp' ),
			'popular_items' => esc_html__( 'Popular Size', 'uamswp' ),
			'separate_items_with_commas' => esc_html__( 'Separate Size with commas', 'uamswp' ),
			'add_or_remove_items' => esc_html__( 'Add or remove Size', 'uamswp' ),
			'choose_from_most_used' => esc_html__( 'Choose most used Size', 'uamswp' ),
			'not_found' => esc_html__( 'No Size found', 'uamswp' ),
			'name' => esc_html__( 'Size', 'uamswp' ),
			'singular_name' => esc_html__( 'Size', 'uamswp' ),
		),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
		'show_in_quick_edit' => false,
		'show_admin_column' => false,
		'show_in_rest' => true,
		'hierarchical' => false,
		'query_var' => true,
		'sort' => false,
		'rewrite_no_front' => false,
		'rewrite_hierarchical' => false,
		'rewrite' => true,
	);

	register_taxonomy( 'size', array( 'project' ), $args );
}
add_action( 'init', 'uamswp_register_size_tax', 0 );
// Status
function uamswp_register_status_tax() {

	$args = array (
		'label' => esc_html__( 'Status', 'uamswp' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Status', 'uamswp' ),
			'all_items' => esc_html__( 'All Status', 'uamswp' ),
			'edit_item' => esc_html__( 'Edit Status', 'uamswp' ),
			'view_item' => esc_html__( 'View Status', 'uamswp' ),
			'update_item' => esc_html__( 'Update Status', 'uamswp' ),
			'add_new_item' => esc_html__( 'Add new Status', 'uamswp' ),
			'new_item_name' => esc_html__( 'New Status', 'uamswp' ),
			'parent_item' => esc_html__( 'Parent Status', 'uamswp' ),
			'parent_item_colon' => esc_html__( 'Parent Status:', 'uamswp' ),
			'search_items' => esc_html__( 'Search Status', 'uamswp' ),
			'popular_items' => esc_html__( 'Popular Status', 'uamswp' ),
			'separate_items_with_commas' => esc_html__( 'Separate Status with commas', 'uamswp' ),
			'add_or_remove_items' => esc_html__( 'Add or remove Status', 'uamswp' ),
			'choose_from_most_used' => esc_html__( 'Choose most used Status', 'uamswp' ),
			'not_found' => esc_html__( 'No Status found', 'uamswp' ),
			'name' => esc_html__( 'Status', 'uamswp' ),
			'singular_name' => esc_html__( 'Status', 'uamswp' ),
		),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
		'show_in_quick_edit' => false,
		'show_admin_column' => false,
		'show_in_rest' => true,
		'hierarchical' => false,
		'query_var' => true,
		'sort' => false,
		'rewrite_no_front' => false,
		'rewrite_hierarchical' => false,
		'rewrite' => true,
	);

	register_taxonomy( 'status', array( 'project' ), $args );
}
add_action( 'init', 'uamswp_register_status_tax', 0 );
// Keyword
function uamswp_register_keyword_tax() {

	$args = array (
		'label' => esc_html__( 'Keywords', 'uamswp' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Keywords', 'uamswp' ),
			'all_items' => esc_html__( 'All Keywords', 'uamswp' ),
			'edit_item' => esc_html__( 'Edit Keyword', 'uamswp' ),
			'view_item' => esc_html__( 'View Keyword', 'uamswp' ),
			'update_item' => esc_html__( 'Update Keyword', 'uamswp' ),
			'add_new_item' => esc_html__( 'Add new Keyword', 'uamswp' ),
			'new_item_name' => esc_html__( 'New Keyword', 'uamswp' ),
			'parent_item' => esc_html__( 'Parent Keyword', 'uamswp' ),
			'parent_item_colon' => esc_html__( 'Parent Keyword:', 'uamswp' ),
			'search_items' => esc_html__( 'Search Keywords', 'uamswp' ),
			'popular_items' => esc_html__( 'Popular Keywords', 'uamswp' ),
			'separate_items_with_commas' => esc_html__( 'Separate Keywords with commas', 'uamswp' ),
			'add_or_remove_items' => esc_html__( 'Add or remove Keywords', 'uamswp' ),
			'choose_from_most_used' => esc_html__( 'Choose most used Keywords', 'uamswp' ),
			'not_found' => esc_html__( 'No Keywords found', 'uamswp' ),
			'name' => esc_html__( 'Keywords', 'uamswp' ),
			'singular_name' => esc_html__( 'Keyword', 'uamswp' ),
		),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
		'show_in_quick_edit' => false,
		'show_admin_column' => false,
		'show_in_rest' => true,
		'hierarchical' => false,
		'query_var' => true,
		'sort' => false,
		'rewrite_no_front' => false,
		'rewrite_hierarchical' => false,
		'rewrite' => true,
	);

	register_taxonomy( 'keyword', array( 'project' ), $args );
}
add_action( 'init', 'uamswp_register_keyword_tax', 0 );
// Location
function uamswp_register_location_tax() {

	$args = array (
		'label' => esc_html__( 'Locations', 'uamswp' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Locations', 'uamswp' ),
			'all_items' => esc_html__( 'All Locations', 'uamswp' ),
			'edit_item' => esc_html__( 'Edit Location', 'uamswp' ),
			'view_item' => esc_html__( 'View Location', 'uamswp' ),
			'update_item' => esc_html__( 'Update Location', 'uamswp' ),
			'add_new_item' => esc_html__( 'Add new Location', 'uamswp' ),
			'new_item_name' => esc_html__( 'New Location', 'uamswp' ),
			'parent_item' => esc_html__( 'Parent Location', 'uamswp' ),
			'parent_item_colon' => esc_html__( 'Parent Location:', 'uamswp' ),
			'search_items' => esc_html__( 'Search Locations', 'uamswp' ),
			'popular_items' => esc_html__( 'Popular Locations', 'uamswp' ),
			'separate_items_with_commas' => esc_html__( 'Separate Locations with commas', 'uamswp' ),
			'add_or_remove_items' => esc_html__( 'Add or remove Locations', 'uamswp' ),
			'choose_from_most_used' => esc_html__( 'Choose most used Locations', 'uamswp' ),
			'not_found' => esc_html__( 'No Locations found', 'uamswp' ),
			'name' => esc_html__( 'Locations', 'uamswp' ),
			'singular_name' => esc_html__( 'Location', 'uamswp' ),
		),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
		'show_in_quick_edit' => false,
		'show_admin_column' => false,
		'show_in_rest' => true,
		'hierarchical' => false,
		'query_var' => true,
		'sort' => false,
		'rewrite_no_front' => false,
		'rewrite_hierarchical' => false,
		'rewrite' => true,
	);

	register_taxonomy( 'location', array( 'project' ), $args );
}
add_action( 'init', 'uamswp_register_location_tax', 0 );