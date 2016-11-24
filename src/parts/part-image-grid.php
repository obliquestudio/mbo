<?php
/**
 * Part Name: Image grid
 * Description: Shows an image grid
 */
?>

<?php
    $images = wds_page_builder_get_this_part_data( '_mbo_part_image_grid_images' );
?>

    <section class="part part-image-grid">
        <div class="container-fluid">

            <div class="section-content row">
                <?php foreach ( (array) $images as $attachment_id => $attachment_url ) { ?>
                <div class="col-sm-6">
                    <?php echo wp_get_attachment_image( $attachment_id, 'full-size', '', array( "class" => "lazyload" ) );  ?>
                </div><!-- .col-## -->
                <?php } ?>
            </div><!-- .section-content -->

        </div><!-- .container-fluid -->
    </section><!-- .part-image-grid -->
