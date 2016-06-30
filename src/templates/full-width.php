<?php
/**
 * Template Name: Full Width Template
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

get_header(); ?>

	<div id="main" class="site-main container-fluid">
		<div id="content-area" class="row">

			<div id="content" class="site-content <?php mbo_fw_class(); ?>" role="main">

				<?php
					// Start the Loop.
					while (have_posts()) : the_post();

						// Include the page content template.
						get_template_part( '/partials/content', 'page' );

					endwhile;
				?>

			</div><!-- #content -->

		</div><!-- #content-area -->
	</div><!-- #main -->

<?php
get_footer();