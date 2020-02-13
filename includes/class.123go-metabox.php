<?php
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {

	$meta_boxes[] = array (
		'title' => esc_html__( 'Project Information', 'uamswp' ),
		'id' => 'project-information',
		'post_types' => array(
			0 => 'project',
		),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array (
				'id' => 'project_description',
				'name' => esc_html__( 'Description', 'uamswp' ),
				'type' => 'wysiwyg',
				'options' => array(
					'media_buttons' => false,
				),
			),
			array (
				'id' => 'project_keywords',
				'type' => 'taxonomy',
				'name' => esc_html__( 'Keywords', 'uamswp' ),
				'taxonomy' => 'keyword',
				'field_type' => 'select_advanced',
				'multiple' => true,
				'add_new' =>  true,
			),
			array (
				'id' => 'project_status',
				'type' => 'taxonomy',
				'name' => esc_html__( 'Status', 'uamswp' ),
				'taxonomy' => 'status',
				'field_type' => 'select_advanced',
				'required' => 1,
			),
			array (
				'id' => 'project_size',
				'type' => 'taxonomy',
				'name' => esc_html__( 'Project Size', 'uamswp' ),
				'taxonomy' => 'size',
				'field_type' => 'select_advanced',
				'required' => 1,
			),
			array (
				'id' => 'project_category',
				'type' => 'taxonomy',
				'name' => esc_html__( 'Primary Category', 'uamswp' ),
				'taxonomy' => 'category',
				'field_type' => 'select_advanced',
				'required' => 1,
			),
			array (
				'id' => 'project_author',
				'type' => 'user',
				'name' => esc_html__( 'Author', 'uamswp' ),
				'field_type' => 'select',
				'required' => 1,
			),
			array (
				'id' => 'project_intellectual',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Intellectual Property Statement', 'uamswp' ),
				'desc' => esc_html__( 'Because one source of funding for 1-2-3 GO is derived from intellectual property revenue, all proposals must include a brief statement describing how the proposed research might generate intellectual property leading to the filing of patent and copyright applications, and the potential for commercialization. Please briefly describe how the proposed research could possibly lead to the development of intellectual property.', 'uamswp' ),
				'required' => 1,
				'options' => array(
					'teeny' => true,
					'media_buttons' => false,
					'quicktags' => false,
					'textarea_rows' => 8,
				),
			),
		),
    );
    
    $meta_boxes[] = array (
		'title' => esc_html__( 'Profile', 'uamswp' ),
        'id' => 'profile',
        'type' => 'user',
		'fields' => array(
			array (
				'id' => 'first_name',
				'type' => 'text',
				'name' => esc_html__( 'First Name', 'uamswp' ),
			),
			array (
				'id' => 'last_name',
				'type' => 'text',
				'name' => esc_html__( 'Last Name', 'uamswp' ),
			),
			array (
				'id' => 'profile_academic_title',
				'type' => 'text',
				'name' => esc_html__( 'Academic Title', 'uamswp' ),
			),
			array (
				'id' => 'description',
				'name' => esc_html__( 'Bio', 'uamswp' ),
				'type' => 'wysiwyg',
				'options' => array(
					'teeny' => true,
					'media_buttons' => false,
					'quicktags' => false,
				),
			),
			array (
				'id' => 'profile_unit',
				'type' => 'taxonomy',
				'name' => esc_html__( 'Unit / College', 'uamswp' ),
				'taxonomy' => 'unit',
				'field_type' => 'select_advanced',
			),
			array (
				'id' => 'profile_department',
				'type' => 'taxonomy',
				'name' => esc_html__( 'Department', 'uamswp' ),
				'taxonomy' => 'department',
				'field_type' => 'select',
			),
			array (
				'id' => 'profile_phone',
				'type' => 'tel',
                'name' => esc_html__( 'Phone', 'uamswp' ),
                'desc' => 'Format: 123-456-7890',
                'attributes' => array(
                    'pattern'   => '[0-9]{3}-[0-9]{3}-[0-9]{4}',
                ),
			),
			array (
				'id' => 'profile_research_summary',
				'name' => esc_html__( 'Research Summary', 'uamswp' ),
				'type' => 'wysiwyg',
				'options' => array(
					'teeny' => true,
					'media_buttons' => false,
					'quicktags' => false,
					'textarea_rows' => 6,
				),
			),
			array (
				'id' => 'profile_publications',
				'type' => 'textarea',
				'name' => esc_html__( 'Publications', 'uamswp' ),
			),
			array (
				'id' => 'profile_keywords',
				'type' => 'taxonomy',
				'name' => esc_html__( 'Keywords', 'uamswp' ),
				'taxonomy' => 'keyword',
				'field_type' => 'select_advanced',
				'multiple' => true,
			),
			array (
				'id' => 'profile_location',
				'type' => 'taxonomy',
				'name' => esc_html__( 'Location', 'uamswp' ),
				'taxonomy' => 'location',
				'field_type' => 'select_advanced',
			),
		),
	);
	
	$meta_boxes[] = array(
		'title' => 'Custom Photo',
		'id'	=> 'profile_avatar',
        'type'  => 'user', // Specifically for user

        'fields' => array(
            array(
                'name'            => 'Upload avatar',
                'id'              => 'avatar',
                'type'            => 'image_advanced',
				'max_file_uploads' => 1,
				'desc'			  => 'Recommended size > 400px x 400px',
				'class'			  => '',
            ),
        ),
    );
    
    $meta_boxes[] = array (
		'title' => esc_html__( 'Accomplishments', 'uamswp' ),
		'id' => 'accomplishments',
		'post_types' => array(
			0 => 'accomplishment',
		),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array (
				'id' => 'accomplishment_description',
				'name' => esc_html__( 'Description', 'uamswp' ),
				'type' => 'wysiwyg',
			),
			array (
				'id' => 'accomplishment_type',
				'type' => 'taxonomy',
				'name' => esc_html__( 'Type of Accomplishment', 'uamswp' ),
				'taxonomy' => 'accomplishment_type',
				'field_type' => 'select_advanced',
			),
		),
	);

	return $meta_boxes;
}
add_action( 'mb_relationships_init', function () {
    MB_Relationships_API::register( [
        'id'   => 'users_to_project',
        'from' => [
            'object_type' => 'user',
            'meta_box'    => [
				'title' => 'Projects',
			],
			'field'		=> [
				'max_clone' => 3,
			],
			'query_args' => [
				'exclude' => exclude_tokens()
			],
        ],
        'to'   => [
            'object_type' => 'post',
            'post_type'   => 'project',
            'meta_box'    => [
				'title' => 'Researchers',
			],
			'field'		=> [
				'max_clone' => 1, // Set to number of projects
			],
		],
		//'reciprocal' => true,
    ] );
} );
