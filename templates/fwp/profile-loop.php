<?php
	/**
	 *  Template Name: Profile Loop - Card layout
	 *  Designed for 1-2-3 Go
	 */
?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php 
	$id = UPT()->get_user_id();
	include( UAMS_123GO_PATH . '/templates/loops/profile-card.php' );
	
	endwhile; endif; ?>