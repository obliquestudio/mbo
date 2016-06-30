<?php
/**
 * The template for displaying all single posts
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

				<?php
					// Start the Loop.
					while (have_posts()) : the_post();

						// Include the post format-specific template for the content.
						get_template_part( '/partials/content', get_post_format() );

						// Previous/next post navigation.
						// Located in /inc/template-tags.php
						mbo_post_navi();

						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) {
							comments_template();
						}

					endwhile;
				?>

			</div><!-- #content -->

			<?php get_sidebar(); ?>

		</div><!-- #content-area -->
	</div><!-- #main -->

<?php
get_footer();
