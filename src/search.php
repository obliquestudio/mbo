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

    <div id="content-area" class="container-fluid">
        <main id="main" class="site-main row" role="main">

            <div id="content" class="site-content <?php mbo_content_class(); ?>" role="main">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'mboframework' ), get_search_query() ); ?></h1>
                </header><!-- .page-header -->

                <?php
                // Start the loop.
                while ( have_posts() ) : the_post(); ?>

                    <?php

                    // Include the serch post template for the content.
                    get_template_part( '/partials/content', 'search' );

                // End the loop.
                endwhile;

                // Previous/next page navigation.
                // Located in /inc/template-tags.php
                mbo_page_navi();

            // If no content, include the "No posts found" template.
            else :

                get_template_part( '/partials/content', 'none' );

            endif;
            ?>

            </div><!-- #content -->

            <?php get_sidebar(); ?>

        </main><!-- #main -->
    </div><!-- #content-area -->

<?php get_footer(); ?>
