<?php
/**
 * Part Name: Image left content right
 * Description: Shows a content and image combination
 */
?>

<?php
    $content = wds_page_builder_get_this_part_data( '_mbo_part_image_left_content_right_content');
    $image_id   = wds_page_builder_get_this_part_data( '_mbo_part_image_left_content_right_image_id');
?>

    <section class="part part-image-left-content-right">
        <div class="container-fluid">

            <div class="section-content row">
                <?php if($content) { ?>
                <div class="col-sm-6 col-sm-push-6">
                    <?php echo apply_filters('the_content', $content); ?>
                </div><!-- .col-## -->
                <?php } ?>

                <?php if($image_id) { ?>
                <div class="col-sm-6 col-sm-pull-6">
                    <?php echo wp_get_attachment_image( $image_id, 'full-size', '', array( "class" => "lazyload" ) );  ?>
                </div><!-- .col-## -->
                <?php } ?>
            </div><!-- .section-content -->

        </div><!-- .container-fluid -->
    </section><!-- .part-image-left-content-right -->
