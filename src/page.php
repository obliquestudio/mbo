<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
            // Start the loop.
            while ( have_posts() ) : the_post();

                /*
                 * Include the template for the page content.
                 */
                get_template_part( 'template-parts/content', 'page' );

            // End the loop.
            endwhile;
            ?>

            </div><!-- #content -->

            <?php get_sidebar(); ?>

        </main><!-- #main -->
    </div><!-- #content-area -->

<?php get_footer(); ?>
