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

    <div id="content-area" class="container-fluid">
        <main id="main" class="site-main row" role="main">

            <div id="content" class="site-content <?php mbo_fw_class(); ?>" role="main">

            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                // Include the page content template.
                get_template_part( '/partials/content', 'page' );

            // End the loop.
            endwhile;
            ?>

            </div><!-- #content -->

        </main><!-- #main -->
    </div><!-- #content-area -->

<?php get_footer(); ?>
