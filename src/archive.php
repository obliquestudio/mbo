<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a new
 * template file for each specific one.
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

				<?php if (have_posts()) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
								if ( is_category() ) :
									single_cat_title();

								elseif ( is_tag() ) :
									single_tag_title();

								elseif ( is_author() ) :
									printf( __( 'Author: %s', 'mboframework' ), '<span class="vcard">' . get_the_author() . '</span>' );

								elseif ( is_day() ) :
									printf( __( 'Day: %s', 'mboframework' ), '<span>' . get_the_date() . '</span>' );

								elseif ( is_month() ) :
									printf( __( 'Month: %s', 'mboframework' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'mboframework' ) ) . '</span>' );

								elseif ( is_year() ) :
									printf( __( 'Year: %s', 'mboframework' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'mboframework' ) ) . '</span>' );

								elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
									_e( 'Asides', 'mboframework' );

								elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
									_e( 'Galleries', 'mboframework');

								elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
									_e( 'Images', 'mboframework');

								elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
									_e( 'Videos', 'mboframework' );

								elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
									_e( 'Quotes', 'mboframework' );

								elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
									_e( 'Links', 'mboframework' );

								elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
									_e( 'Statuses', 'mboframework' );

								elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
									_e( 'Audios', 'mboframework' );

								elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
									_e( 'Chats', 'mboframework' );

								else :
									_e( 'Archives', 'mboframework' );

								endif;
							?>
						</h1>
					</header><!-- .page-header -->

					<?php

						// Start the Loop.
						while (have_posts()) : the_post();

							// Include the post format-specific template for the content.
							get_template_part( '/partials/content', get_post_format() );

						endwhile;

						// Previous/next page navigation.
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
