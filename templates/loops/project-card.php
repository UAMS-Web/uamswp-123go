<?php
    /**
     * Template Name: Project Loop - Card layout
     * Designed for UAMS 1-2-3 Go
     * 
     *  Must be used inside a loop
     *  Required var: $id
     */
?>
    <div class="card">
        <picture>
        <?php if ( has_post_thumbnail() && function_exists( 'fly_add_image_size' ) ) { ?>
				<source srcset="<?php echo image_sizer(get_post_thumbnail_id($id), 512, 288, 'center', 'center'); ?> 1x, <?php echo image_sizer(get_post_thumbnail_id($id), 1024, 576, 'center', 'center'); ?> 2x"
					media="(min-width: 1px)">
				<img src="<?php echo image_sizer(get_post_thumbnail_id(), 512, 288, 'center', 'center'); ?>" itemprop="image" class="card-img-top" alt="<?php echo get_the_title($id); ?>" />
			<?php } elseif ( has_post_thumbnail() ) { ?>
				<?php echo get_the_post_thumbnail( $id, 'aspect-16-9-small',  array( 'itemprop' => 'image', 'class' => 'card-img-top' ) ); ?>
			<?php } else { ?>
				<source srcset="<?php echo UAMS_123GO_ROOT_URL; ?>assets/svg/no-image_16-9.svg" media="(min-width: 1px)">
				<img src="<?php echo UAMS_123GO_ROOT_URL; ?>assets/img/no-image_16-9.jpg" alt="" />
			<?php } ?>
        </picture>
        <div class="card-body">
            <h3 class="card-title"><?php echo get_the_title($id); ?></h3>
        </div>
        <div class="btn-container">
			<div class="inner-container">
				<a href="<?php the_permalink($id); ?>" class="btn btn-primary stretched-link" aria-label="View project <?php echo get_the_title($id); ?>">View Project</a>
			</div>
		</div>
    </div>