<?php
/**
 * Part Name: Content left image right
 * Description: Shows a content and image combination
 */
?>

<?php
    $content  = wds_page_builder_get_this_part_data( '_mbo_part_content_left_image_right_content');
    $image_id = wds_page_builder_get_this_part_data( '_mbo_part_content_left_image_right_image_id');
?>

    <section class="part part-content-left-image-right">
        <div class="container-fluid">

            <div class="section-content row">
                <?php if($content) { ?>
                <div class="col-sm-6">
                    <?php echo apply_filters('the_content', $content); ?>
                </div><!-- .col-## -->
                <?php } ?>

                <?php if($image_id) { ?>
                <div class="col-sm-6">
                    <?php echo wp_get_attachment_image( $image_id, 'full-size', '', array( "class" => "lazyload" ) );  ?>
                </div><!-- .col-## -->
                <?php } ?>
            </div><!-- .section-content -->

        </div><!-- .container-fluid -->
    </section><!-- .part-content-left-image-right -->
