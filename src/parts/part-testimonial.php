<?php
/**
 * Part Name: Testimonial
 * Description: Shows the selected testimonial
 */
?>

<?php
    $testimonial_id       = wds_page_builder_get_this_part_data( '_mbo_part_testimonial_id' );
    $testimonial_post     = get_post( $testimonial_id );

    $testimonial_title    = $testimonial_post->post_title;
    $testimonial_content  = apply_filters( 'the_content', $testimonial_post->post_content );
    $testimonial_job_role = get_post_meta( $testimonial_id, '_mbo_testimonial_job_role', true );
    $testimonial_company  = get_post_meta( $testimonial_id, '_mbo_testimonial_company', true );
?>

    <section class="part part-testimonial">
        <div class="container-fluid">

            <blockquote>
                <?php echo $testimonial_content; ?>
                <footer>
                    <span class="cite">
                    <?php echo $testimonial_title; ?>
                    <?php if( $testimonial_job_role ) {
                        echo '- ' .  $testimonial_job_role;
                    } ?>
                    </span>
                    <?php if( $testimonial_company ) {
                        echo '<span class="company">' . $testimonial_company . '</span>';
                    } ?>
                </footer>
            </blockquote>

        </div><!-- .container-fluid -->
    </section><!-- .part-testimonial -->
