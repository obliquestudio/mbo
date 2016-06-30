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

<div id="sidebar" class="<?php mbo_sidebar_class(); ?>" role="complementary">

	<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'main-sidebar' ); ?>
	<?php endif; ?>

</div><!-- #sidebar -->