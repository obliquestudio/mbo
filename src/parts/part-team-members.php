<?php
/**
 * Part Name: Team members
 * Description: Part that shows the team members loop
 */
?>
<?php

    // Team members loop
    $team_member_args = array (
        'post_type'      => 'team-member',
        'posts_per_page' => 500,
        'orderby'        => 'menu_order',
        'order'          => 'ASC'
    );

    $team_member_query = new WP_Query( $team_member_args );

    if ( $team_member_query->have_posts() ) : ?>

        <section class="part part-team-members">
            <div class="container-fluid">

                <div class="section-header">
                    <h1 class="section-title"><?php _e( 'Our experts', 'mboframework' ); ?></h1>
                </div><!-- .section-header -->

                <div class="section-content row">

                    <?php while ( $team_member_query->have_posts() ) : $team_member_query->the_post();

                        $team_member_name       = get_the_title();
                        $team_member_name_parts = explode( " ", $team_member_name );
                        $team_member_name_first = $team_member_name_parts[0];
                        $team_member_job_role   = get_post_meta( get_the_ID(), '_mbo_team_member_job_role', true );
                        $team_member_email      = get_post_meta( get_the_ID(), '_mbo_team_member_email', true );
                        $team_member_twitter    = get_post_meta( get_the_ID(), '_mbo_team_member_twitter', true );
                        $team_member_linkedin   = get_post_meta( get_the_ID(), '_mbo_team_member_linkedin', true );
                    ?>

                        <div class="team-member grid-element grid-element-team-member">

                            <?php
                                // Thumbnail
                                mbo_post_thumbnail();
                            ?>

                            <div class="team-member-content">
                                <ul class="team-member-details">

                                    <?php if( $team_member_name ) : ?>
                                        <li class="team-member-name"><?php echo $team_member_name; ?></li>
                                    <?php endif; ?>

                                    <?php if( $team_member_job_role ) : ?>
                                        <li class="team-member-job-role"><?php echo $team_member_job_role; ?></li>
                                    <?php endif; ?>

                                    <?php if( $team_member_email ) : ?>
                                        <li class="team-member-email"><a href="mailto:<?php echo $team_member_email; ?>"><?php echo $team_member_email; ?></a></li>
                                    <?php endif; ?>

                                    <?php if( $team_member_twitter ) : ?>
                                        <li class="team-member-twitter"><a href="<?php echo $team_member_twitter; ?>">Twitter</a></li>
                                    <?php endif; ?>

                                    <?php if( $team_member_linkedin ) : ?>
                                        <li class="team-member-linkedin"><a href="<?php echo $team_member_linkedin; ?>">LinkedIn</a></li>
                                    <?php endif; ?>

                                </ul><!-- .team-member-details -->
                            </div><!-- .team-member-content -->

                        </div><!-- .team-member -->

                    <?php endwhile; ?>

                </div><!-- .section-content -->

            </div><!-- .container-fluid -->
        </section><!-- .part-team-members -->

    <?php
        endif;
        wp_reset_query();
    ?>
