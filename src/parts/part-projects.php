<?php
/**
 * Part Name: Projects
 * Description: Shows all the projects
 */
?>
<?php

    // Query all projects that are featured
    $project_args = array (
        'post_type'      => 'project',
        'post_status'    => 'publish',
        'posts_per_page' => 500,
        'orderby'        => 'menu_order',
        'order'          => 'ASC'
    );

    // The Query
    $project_query = new WP_Query( $project_args );

    // The Loop
    if ( $project_query->have_posts() ) : ?>

        <section class="part part-projects">
            <div class="container-fluid">

                <div class="section-content row">

                <?php while ( $project_query->have_posts() ) : $project_query->the_post();
                    $project_feature_copy = get_post_meta( get_the_ID(), '_mbo_project_feature_copy', true );
                    $project_colour     = get_post_meta( get_the_ID(), '_mbo_project_colour', true );
                    ?>

                    <div class="project grid-element grid-element-project">
                        <div class="project-inner">

                            <?php
                                // Thumbnail
                                mbo_post_thumbnail();
                            ?>

                            <div class="project-content" style="background-color: <?php echo $project_colour; ?>">

                                <div class="v-align-table">
                                    <div class="v-align-cell">

                                        <span class="project-title"><?php the_title(); ?></span>

                                        <?php if(!empty($project_feature_copy)) {
                                            echo '<div class="project-copy">';
                                            echo apply_filters('the_content', $project_feature_copy);
                                            echo '</div>';
                                        } ?>

                                        <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="btn btn-link"><?php _e( 'See Case Study', 'mboframework' ); ?></a>

                                    </div><!-- .v-align-cell -->
                                </div><!-- .v-align-table -->

                            </div><!-- .project-content -->

                        </div><!-- .project-inner -->
                    </div><!-- .project -->

                <?php endwhile; ?>

                </div><!-- .section-content -->

            </div><!-- .container-fluid -->
        </section><!-- .part-projects -->

    <?php
        endif;
        wp_reset_query();
    ?>