<?php
/**
 * Part Name: Image full width
 * Description: Shows a full width image
 */
?>

<?php
    $image_id = wds_page_builder_get_this_part_data( '_mbo_part_image_full_width_image_id' );
?>

    <section class="part part-image-full-width">
        <?php echo wp_get_attachment_image( $image_id, 'full-size', '', array( "class" => "lazyload" ) );  ?>
    </section><!-- .part-image-full-width -->
