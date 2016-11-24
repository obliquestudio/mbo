<?php
/**
 * Part Name: Featured projects
 * Description: Shows the featured projects
 */
?>

<?php
    // Query all projects that are featured
    $project_args = array (
        'post_type'      => 'project',
        'post_status'    => 'publish',
        'posts_per_page' => 500,
        'meta_key'       => '_mbo_project_is_featured',
        'meta_value'     => 'on'
    );

    // The Query
    $project_query = new WP_Query( $project_args );

    // The Loop
    if ( $project_query->have_posts() ) : ?>

        <section class="part part-featured-projects">
            <div class="flexslider">
                <ul class="slides">

                <?php while ( $project_query->have_posts() ) : $project_query->the_post();

                    $project_thumbnail_id    = get_post_thumbnail_id( get_the_ID() );
                    $project_thumbnail_url   = wp_get_attachment_url( $project_thumbnail_id, 'full-size' );
                    $project_feature_copy = get_post_meta( get_the_ID(), '_mbo_project_feature_copy', true );
                    ?>

                    <li class="slide" style="background-image: url('<?php echo $post_thumbnail_url; ?>');">
                        <div class="slide-inner container-fluid">

                            <div class="v-align-table">
                                <div class="v-align-cell">

                                    <span class="project-title"><?php the_title(); ?></span>

                                    <?php if(!empty($project_feature_copy)) {
                                        echo '<div class="project-copy">';
                                        echo apply_filters('the_content', $project_feature_copy);
                                        echo '</div>';
                                    } ?>

                                    <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-link"><?php _e('See project', 'mboframework'); ?></a>

                                </div><!-- .v-align-cell -->
                            </div><!-- .v-align-table -->

                        </div><!-- .slide-inner -->
                    </li><!-- .slide -->

                <?php endwhile; ?>

                </ul><!-- .slides -->
            </div><!-- .flexslider -->
        </section><!-- .part-featured-projects -->

    <?php
        endif;
        wp_reset_query();
    ?>