<?php
/**
 * Part Name: Image
 * Description: Shows a single image
 */
?>

<?php
    $image_id = wds_page_builder_get_this_part_data( '_mbo_part_image_image_id');
?>

    <section class="part part-image">
    	<div class="container-fluid">
            <?php echo wp_get_attachment_image( $image_id, 'full-size', '', array( "class" => "lazyload" ) );  ?>
    	</div><!-- .container-fluid -->
    </section><!-- .part-image -->
