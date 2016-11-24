<?php
/**
 * Part Name: Clients
 * Description: Part that shows client logos
 */
?>
<?php
    $clients_logos = wds_page_builder_get_this_part_data( '_mbo_part_clients_logos' );
?>

<section class="part part-clients">
    <div class="container-fluid">

        <div class="section-header">
            <h1 class="section-title"><?php _e( 'Our clients', 'mboframework' ); ?></h1>
        </div><!-- .section-header -->

        <div class="section-content row">
            <?php foreach ( (array) $clients_logos as $attachment_id => $attachment_url ) { ?>
                <div class="client-logo grid-element grid-element-client-logo">
                    <?php echo wp_get_attachment_image( $attachment_id, 'full-size', '', array( "class" => "lazyload" ) );  ?>
                </div>
            <?php } ?>
        </div><!-- .section-content -->

    </div><!-- .container-fluid -->
</section><!-- .part-clients -->
