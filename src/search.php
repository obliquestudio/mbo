<?php
/**
 * The template for displaying Search Results pages
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
					if (have_posts()) : ?>

						<header class="page-header">
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'mboframework' ), get_search_query() ); ?></h1>
						</header><!-- .page-header -->

					<?php

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
