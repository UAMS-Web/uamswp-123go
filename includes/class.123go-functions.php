<?php
/*
 * FacetWP functions
 */
// Filter to fix facetwp hash error
add_filter( 'facetwp_is_main_query', function( $is_main_query, $query ) {
    // if ( 'provider' == $query->get( 'post_type' ) ) {
		$is_main_query = false;
    // }
    return $is_main_query;
}, 10, 2 );

add_filter( 'facetwp_shortcode_html', function( $output, $atts) {
	if ( !empty( $atts['template'] ) && 'projects' == $atts['template'] ) { // replace 'example' with name of your template
        /** modify replacement as needed, make sure you keep the facetwp-template class **/
        $output = str_replace( 'facetwp-template', 'facetwp-template card-list list', $output );
	}
	if ( !empty( $atts['template'] ) && 'profiles' == $atts['template'] ) { // replace 'example' with name of your template
        /** modify replacement as needed, make sure you keep the facetwp-template class **/
        $output = str_replace( 'facetwp-template', 'facetwp-template card-list card-list-profiles', $output );
	}
	return $output;
}, 10, 2 );

// Turn on FWP Accessibility features
add_filter( 'facetwp_assets', function( $assets ) {
    $assets['accessibility.js'] = FACETWP_URL . '/assets/js/src/accessibility.js';
    return $assets;
});

function fwp_add_facet_labels() {
    ?>
    <script>
    (function($) {
        $(document).on('facetwp-loaded', function() {
            $('.facetwp-facet').each(function() {
                var $facet = $(this);
                var facet_name = $facet.attr('data-name');
                var facet_label = FWP.settings.labels[facet_name];
    
                if ($facet.closest('.facet-wrap').length < 1 && $facet.closest('.facetwp-flyout').length < 1) {
                    $facet.wrap('<div class="facet-wrap"></div>');
                    $facet.before('<h3 class="facet-label">' + facet_label + '</h3>');
                }
            });
        });
    })(jQuery);
    </script>
    <?php
}
add_action( 'wp_footer', 'fwp_add_facet_labels', 100 );

// Add FacetWP Sources - User keywords & user locations
add_filter( 'facetwp_facet_sources', function( $sources ) {
    $sources['meta-box']['choices']["user/keywords"] = "[User Profile] keywords";
    $sources['meta-box']['choices']["user/location"] = "[User Profile] location";
    return $sources;
}, 20 );

/**
 * Index the user keywords
 * Note: set the data source to "[User Profile] keywords"
 * then save and re-index
 */
add_filter( 'facetwp_indexer_post_facet', function( $return, $params ) {
    $facet = $params['facet'];
    $defaults = $params['defaults'];
    $source = isset( $facet['source'] ) ? $facet['source'] : '';

    if ( 'user/keywords' == $source ) {
        $current_id = (int) $defaults['post_id'];
        $user_id = (int) UPT()->get_user_id( $current_id );
        $keywords = rwmb_meta( 'profile_keywords', array( 'object_type' => 'user' ), $user_id );
        if (!empty( $keywords) ) { 
            foreach( $keywords as $keyword ):
                $defaults['facet_value']         = $keyword->slug;
                $defaults['facet_display_value'] = $keyword->name;
                $defaults['term_id']             = $keyword->term_id;
                FWP()->indexer->index_row( $defaults );
            endforeach;
        }
        $return = true;
    }

    return $return;
}, 10, 2 );

/**
 * Index the featured products
 * Note: set the data source to "[User Profile] location"
 * then save and re-index
 */
add_filter( 'facetwp_indexer_post_facet', function( $return, $params ) {
    $facet = $params['facet'];
    $defaults = $params['defaults'];
    $source = isset( $facet['source'] ) ? $facet['source'] : '';

    if ( 'user/location' == $source ) {
        $current_id = (int) $defaults['post_id'];
        $user_id = (int) UPT()->get_user_id( $current_id );
        $location = rwmb_meta( 'profile_location', array( 'object_type' => 'user' ), $user_id );
        if (!empty( $location) ) { // Single entry
            $defaults['facet_value']         = $location->slug;
            $defaults['facet_display_value'] = $location->name;
            $defaults['term_id']             = $location->term_id;
            FWP()->indexer->index_row( $defaults );
        }
        $return = true;
    }

    return $return;
}, 10, 2 );

/**
 * Meta Box Functions
 */
function exclude_tokens() {
    global $wpdb;

    $table_name = $wpdb->prefix . "mb_relationships";

    $users = $wpdb->get_results( "SELECT * FROM $table_name WHERE type = 'users_to_project'" );
    $user_list = array();
    $used = array();	
    foreach ($users as $user){
        $user_list[] = $user->from;
    };
    $user_counts = array_count_values($user_list);
    foreach ($user_counts as $key => $value)
    {
        if ($value >= 1) // Set value to number of projects
        {
            $used[] = $key;
        }
    }
    return $used;
}

function uamswp_123go_script_register() {
    global $post_type;
	// if ( !is_admin() ) {
	// 	wp_register_script( 'pubmed-api', UAMS_FAD_ROOT_URL . 'assets/js/pubmed-api-async.js', array('jquery'), null, true );
    // }
    // if ( (is_single() && ('location' == $post_type)) ) {
    //     wp_enqueue_style( 'leaflet-css', UAMS_FAD_ROOT_URL . 'assets/leaflet/leaflet.css', array(), '1.1', 'all');
    //     wp_enqueue_script( 'leaflet-js', UAMS_FAD_ROOT_URL . 'assets/leaflet/leaflet-bing.js', array(), null, false );
    // }
    if ( (is_archive() && ('project' == $post_type)) ) {
        wp_enqueue_script( 'mobile-filter-toggle', UAMS_123GO_ROOT_URL . 'assets/js/mobile-filter-toggle.js', array('jquery'), null, false );
    }
	wp_enqueue_style( '123go-css', UAMS_123GO_ROOT_URL . 'assets/css/uamswp-123go.css', array(), '1.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'uamswp_123go_script_register' );