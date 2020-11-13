<?php
    /**
     * Template Name: Profile Loop - Card layout
     * Designed for UAMS 1-2-3 Go
     * 
     *  Must be used inside a loop
     *  Required var: $id
     */
?>
    <div class="card">
        <picture>
            <?php if ( get_the_author_meta('avatar', $id) && function_exists( 'fly_add_image_size' ) ) { ?>
				<source srcset="<?php echo image_sizer(get_the_author_meta('avatar', $id), 253, 337, 'center', 'center'); ?> 1x, <?php echo image_sizer(get_the_author_meta('avatar', $id), 506, 675, 'center', 'center'); ?> 2x"
					media="(min-width: 1px)">
				<img src="<?php echo image_sizer(get_the_author_meta('avatar', $id), 253, 337, 'center', 'center'); ?>" itemprop="image" class="card-img-top" alt="<?php echo get_the_title($id); ?>" />
			<?php } elseif ( get_the_author_meta('avatar', $id) ) { ?>
				<img src="<?php echo wp_get_attachment_image_url( get_the_author_meta('avatar', $id), 'full' ); ?>" class ="card-img-top" />
			<?php } else { ?>
				<source srcset="<?php echo UAMS_123GO_ROOT_URL; ?>assets/svg/no-image_1-1.svg" media="(min-width: 1px)">
				<img src="<?php echo UAMS_123GO_ROOT_URL; ?>assets/img/no-image_1-1.jpg" alt="" />
			<?php } ?>
        </picture>
        <div class="card-body">
            <h3 class="card-title"><?php echo get_the_author($id); ?></h3>
        </div>
        <div class="btn-container">
			<div class="inner-container">
				<a href="/profile/<?php echo get_the_author_meta( 'user_login', $id); ?>" class="btn btn-primary stretched-link" aria-label="View <?php echo get_the_author($id); ?>">View Profile</a>
			</div>
		</div>
    </div>