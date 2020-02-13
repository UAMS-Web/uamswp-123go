<?php
// force use of templates from plugin folder
function uamswp_123go_force_template( $template )
{	
    if( is_post_type_archive( 'project' ) ) {
        $template = WP_PLUGIN_DIR .'/'. basename(dirname(dirname(__FILE__)))  .'/templates/archive-project.php';
	}
	
	if( is_singular( 'project' ) ) {
        $template = WP_PLUGIN_DIR .'/'. basename(dirname(dirname(__FILE__))) .'/templates/single-project.php';
    }
    
    // if( is_post_type_archive( 'location' ) ) {
    //     $template = WP_PLUGIN_DIR .'/'. basename(dirname(dirname(__FILE__))) .'/templates/archive-locations.php';
	// }
	
	if( is_author() ) {
        $template = WP_PLUGIN_DIR .'/'. basename(dirname(dirname(__FILE__))) .'/templates/single-author.php';
    }
    
    // if( is_tax( 'condition' ) ) {
    //     $template = WP_PLUGIN_DIR .'/'. basename(dirname(dirname(__FILE__))) .'/templates/taxonomy-condition.php';
    // }
    
    // if( is_tax( 'treatment' ) ) {
    //     $template = WP_PLUGIN_DIR .'/'. basename(dirname(dirname(__FILE__))) .'/templates/taxonomy-treatment_procedure.php';
    // }
	
    return $template;
}
add_filter( 'template_include', 'uamswp_123go_force_template' );
add_filter( 'page_template', 'profiles_page_template' );
function profiles_page_template( $page_template )
{
    if ( is_page( 'profiles' ) ) {

        $page_template = WP_PLUGIN_DIR .'/'. basename(dirname(dirname(__FILE__))) .'/templates/archive-author.php';
    }
    return $page_template;
}
add_action( 'init', 'add_author_rules', 10, 0 );
function add_author_rules() { 
    add_rewrite_rule(
        '^profile/([^/]+)/?$', 'index.php?author_name=$matches[1]', 'top');
}