<?php
	/**
	 *  Template Name: Project Loop - Card layout
	 *  Designed for 1-2-3 Go
	 */
?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php 
	$id =get_the_ID();
	include( UAMS_123GO_PATH . '/templates/loops/project-card.php' );
	
	endwhile; endif; ?>