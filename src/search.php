<?php
/**
 * The template for displaying Search Results pages
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */

get_header(); ?>

    <div id="content-area" class="container-fluid">
        <main id="main" class="site-main row" role="main">

            <div id="content" class="site-content <?php mbo_content_class(); ?>" role="main">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'mboframework' ), get_search_query() ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post(); ?>

                        <?php

                        /*
                         * Include the template for the post thumb content.
                         */
                        get_template_part( 'template-parts/content', 'post-thumb' );

                    // End the loop.
                    endwhile; ?>

                </div><!-- .page-content -->

                <footer class="page-footer">
                <?php
                    /*
                     * Posts pagination
                     */
                    mbo_posts_pagination();
                ?>
                </footer><!-- .page-footer -->

            <?php else :

                // If no content, include the "No posts found" template.
                get_template_part( 'template-parts/content', 'none' );

            endif; ?>

            </div><!-- #content -->

            <?php get_sidebar(); ?>

        </main><!-- #main -->
    </div><!-- #content-area -->

<?php get_footer(); ?>
