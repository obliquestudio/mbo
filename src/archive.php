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
*/

get_header(); ?>

    <div id="content-area" class="container-fluid">
        <main id="main" class="site-main row" role="main">

            <div id="content" class="site-content <?php mbo_content_class(); ?>" role="main">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description();
                    ?>
                </header><!-- .page-header -->

                <div class="page-content">
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post(); ?>

                        <?php

                        // Include the serch post template for the content.
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
