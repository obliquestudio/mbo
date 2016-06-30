<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */
get_header(); ?>

	<div id="main" class="site-main container-fluid">
		<div id="content-area" class="row">

			<div id="content" class="site-content <?php mbo_content_class(); ?>" role="main">

				<header class="page-header">
					<h1 class="page-title"><?php _e('404: Page not found', 'mboframework'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'The page you trying to reach does not exist, or has been moved. Perhaps searching can help.', 'mboframework' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->

			</div><!-- #content -->

		</div><!-- #content-area -->
	</div><!-- #main -->

<?php
get_footer();
