<?php
/**
 * The template for displaying all single posts
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */

get_header(); ?>

    <div id="content-area" class="container-fluid">
        <main id="main" class="site-main row" role="main">

            <div id="content" class="site-content <?php mbo_content_class(); ?>" role="main">

            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post();

                /*
                 * Include the template for the post content.
                 */
                get_template_part( '/template-parts/content', 'post' );

            // End the loop.
            endwhile;
            ?>

            </div><!-- #content -->

            <?php get_sidebar(); ?>

        </main><!-- #main -->
    </div><!-- #content-area -->

<?php get_footer(); ?>