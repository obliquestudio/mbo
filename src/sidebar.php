<?php
/**
 * The Sidebar containing the main widget area
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */
?>

<div id="sidebar" class="<?php mbo_sidebar_class(); ?>">

	<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <div id="widget-area" class="widget-area" role="complementary">
		  <?php dynamic_sidebar( 'main-sidebar' ); ?>
        </div><!-- .widget-area -->
	<?php endif; ?>

</div><!-- #sidebar -->