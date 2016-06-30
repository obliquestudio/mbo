<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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
					if (have_posts()) :

						// Start the Loop.
						while (have_posts()) : the_post();

							// Include the post format-specific template for the content.
							get_template_part( '/partials/content', get_post_format() );

						endwhile;

						// Previous/next page navigation.
						// Located in /inc/template-tags.php
						mbo_page_navi();

					else :

						// If no content, include the "No posts found" template.
						get_template_part( '/partials/content', 'no-results' );

					endif;
				?>

			</div><!-- #content -->

			<?php get_sidebar(); ?>

		</div><!-- #content-area -->
	</div><!-- #main -->

<?php
get_footer();
