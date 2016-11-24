<?php
/**
 * Part Name: Call to Action
 * Description: Part that shows a call to action
 */
?>
<?php
    $content      = wds_page_builder_get_this_part_data( '_mbo_part_call_to_action_content');
    $btn_text     = wds_page_builder_get_this_part_data( '_mbo_part_call_to_action_btn_text');
    $link_page_id = wds_page_builder_get_this_part_data( '_mbo_part_call_to_action_btn_link_page_id');
?>

    <section class="part part-call-to-action">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-6">

                    <?php if($content) { ?>
                    <div class="section-content">
                        <?php echo apply_filters('the_content', $content); ?>
                    </div><!-- .section-content -->
                    <?php } ?>

                    <?php if($btn_text && $link_page_id) { ?>
                    <div class="section-footer">
                        <a href="<?php echo get_permalink($link_page_id); ?>" class="btn btn-primary"><?php echo $btn_text; ?></a>
                    </div><!-- .section-footer -->
                    <?php } ?>

                </div><!-- .col-## -->
            </div><!-- .row -->

        </div><!-- .container-fluid -->
    </section><!-- .part-call-to-action -->
