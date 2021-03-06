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
 */

get_header(); ?>

    <div id="content-area" class="container-fluid">
        <main id="main" class="site-main row" role="main">

            <div id="content" class="site-content <?php mbo_content_class(); ?>" role="main">

            <?php if (have_posts()) : ?>

                <header class="page-header">
                    <?php
                        $page_for_posts_id = get_option( 'page_for_posts' );
                        echo '<h1 class="page-title">' . get_the_title($page_for_posts_id) . '</h1>';
                    ?>
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
