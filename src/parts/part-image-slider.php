<?php
/**
 * Part Name: Image slider
 * Description: Shows a slider of images
 */
?>

<?php
    $images = wds_page_builder_get_this_part_data( '_mbo_part_image_slider_images');
?>

    <section class="part part-image-slider">
        <div class="container-fluid">

            <div class="flexslider">
                <ul class="slides">
                    <?php foreach ( (array) $images as $attachment_id => $attachment_url ) { ?>
                    <li>
                        <?php echo wp_get_attachment_image( $attachment_id, 'full-size', '', array( "class" => "lazyload" ) );  ?>
                    </li>
                    <?php } ?>
                </ul><!-- .slides -->
            </div><!-- .flexslider -->

        </div><!-- .container-fluid -->
    </section><!-- .part-image-slider -->
