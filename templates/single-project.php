<?php
//  
get_header(); ?>
<div class="content-sidebar-wrap">
    <main class="project-item<?php //echo $provider_field_classes; ?>" id="genesis-content">
        <section class="container-fluid p-0 p-xs-8 p-sm-10 doctor-info bg-white">
            <div class="row mx-0 mx-xs-n4 mx-sm-n8">
                <div class="col-12 col-xs p-4 py-xs-0 px-xs-4 px-sm-8 order-2 text">
                    <?php if(have_posts()) : while(have_posts()) : the_post();
                        echo '<h1 class="page-title">'. get_the_title() .'</h1>';
                        $description = rwmb_meta( 'project_description' );
                        if( $description ) {
                            echo '<h3>Description</h3>';
                            echo $description;
                        }
                        $intellectual = rwmb_meta( 'project_intellectual' );
                        if( $intellectual ) {
                            echo '<h3>Intellectual Property Statement</h3>';
                            echo $intellectual;
                        }
                        $keywords_ids = rwmb_meta( 'project_keywords' );
                        if( $keywords_ids ): ?>
                            <h3>Keywords:</h3>
                            <ul>
                            <?php foreach( $keywords_ids as $term ): ?>
                                <li><?php echo esc_html( get_term($term, 'keyword')->name ); ?></li>
                            <?php endforeach; ?>
                            </ul>
                        <?php endif;
                        // var_dump( $keywords_ids );
                        $users  = get_users( [
                            'relationship' => [
                                'id' => 'users_to_project',
                                'to' => get_the_ID(), // You can pass object ID or full object
                            ],
                        ] );
                        if( $users ): ?>
                            <h3>Researchers:</h3>
                            <ul>
                            <?php foreach( $users as $user ): ?>
                                <li><a href="/profile/<?php echo $user->user_login; ?>/"><?php echo ($user->first_name && $user->last_name) ? $user->first_name . ' ' . $user->last_name : $user->display_name; ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        <?php endif;
                        // var_dump( $researchers_array );
                        $status_ids = rwmb_meta( 'project_status' );
                        if ( $status_ids ) { ?>
                            <p>Status: <?php echo esc_html( $status_ids->name ); ?></p>
                        <?php }
                        // var_dump( $status_ids );
                        $project_size_ids = rwmb_meta( 'project_size' );
                        if ( $project_size_ids ) { ?>
                            <p>Project Size: <?php echo esc_html( $project_size_ids->name ); ?></p>
                        <?php }
                        // var_dump( $project_size_ids );
                        $primary_category_ids = rwmb_meta( 'project_category' );
                        if ( $primary_category_ids ) { ?>
                            <p>Primary Category: <?php echo esc_html( $primary_category_ids->name ); ?></p>
                        <?php }
                        // var_dump( $primary_category_ids );
                        $project_author = rwmb_meta( 'project_author' );
                        if ( $project_author ) {
                            $user_info = get_userdata( $project_author );
                            $display_name = $user_info->display_name;
                            $first_name = $user_info->first_name;
                            $last_name = $user_info->last_name;
                        ?>
                            <p>Posted by: <a href="<?php echo get_author_posts_url( $project_author ); ?>"><?php echo ($first_name && $last_name) ? $first_name . ' ' . $last_name : $display_name; ?></a></p>
                        <?php
                        }
                        echo '<p>Project ID: ' . get_the_ID() . '</p>';
                    endwhile; endif;	
                    ?>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer();
