<?php

    // Set the Current Author Variable $curauth
    $curauth = get_queried_object();
    $authorID = $curauth->ID;
    $author =  "user_" . $authorID;
//  
get_header(); ?>
<div class="content-sidebar-wrap">
    <main class="profile-item<?php //echo $provider_field_classes; ?>" id="genesis-content">
        <section class="container-fluid p-0 p-xs-8 p-sm-10 doctor-info bg-white">
            <div class="row mx-0 mx-xs-n4 mx-sm-n8">
                <div class="col-12 col-xs p-4 py-xs-0 px-xs-4 px-sm-8 order-2 text">
    <?php //if(have_posts()) : while(have_posts()) : the_post();
    echo '<h1 class="page-title">'. get_the_author_meta("display_name", $authorID) .'</h1>';
   // echo $author;
    ?>
    <?php echo '<p>Academic Title: ' . rwmb_meta( 'profile_academic_title', array( 'object_type' => 'user' ), $authorID ) .'</p>'; ?>
    <?php echo rwmb_meta( 'profile_unit', array( 'object_type' => 'user' ), $authorID ) ? '<p>College / Unit: '. rwmb_meta( 'profile_unit', array( 'object_type' => 'user' ), $authorID )->name  .'</p>' : ''; ?>
    <?php $department = rwmb_meta( 'profile_department', array( 'object_type' => 'user' ), $authorID ); ?>
    <?php if ( $department ) { ?>
		<p>Department: <?php echo esc_html( $department->name ); ?></p>
    <?php } ?>
    <?php echo get_userdata( $authorID )->description; ?>
    <?php $phone = rwmb_meta( 'profile_phone', array( 'object_type' => 'user' ), $authorID );
    if ( $phone ) {
        echo '<p>Phone: '. $phone .'</p>'; 
    }
    ?>
    <?php echo '<p>Email: '. get_userdata( $authorID )->user_email .'</p>'; ?>
    <?php $research = rwmb_meta( 'profile_research_summary', array( 'object_type' => 'user' ), $authorID );
    if ( $research ){
        echo '<h3>Research Summary</h3>';
        echo $research;
    } 
    ?>
    <?php $keywords = rwmb_meta( 'profile_keywords', array( 'object_type' => 'user' ), $authorID ); ?>
    <?php if( $keywords ): ?>
		<h3>Keywords:</h3>
		<ul>
		<?php foreach( $keywords as $keyword ): ?>
			<li><?php echo esc_html( $keyword->name ); ?></li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>
    <?php $location = rwmb_meta( 'profile_location', array( 'object_type' => 'user' ), $authorID ); ?>
    <?php if ( $location ) { ?>
        <p>Location: <?php echo esc_html( $location->name ); ?></p>
	<?php } ?>
    <?php   $projects = new WP_Query( [
                'relationship' => [
                    'id' => 'users_to_project',
                    'from' => $authorID,
                ],
                'nopaging'     => true,
            ] ); ?>
    <?php if ( $projects ): ?>
        <h3>Projects</h3>
        <?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
            <a href="<?php echo get_permalink( ); ?>"><?php echo get_the_title( ); ?></a>
        <?php endwhile;
            wp_reset_postdata(); ?>
    <?php endif;	
    ?>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer();