<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */

get_header(); ?>

    <div id="content-area" class="container-fluid">
        <main id="main" class="site-main row" role="main">

            <div id="content" class="site-content <?php mbo_fw_class(); ?>" role="main">

                <article class="error-404 not-found">

                    <header class="page-header">
                        <h1 class="page-title"><?php _e('Uh oh…', 'mboframework'); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php _e( '404! The page you are looking for doesn&rsquo;t exist.', 'mboframework' ); ?></p>
                        <?php get_search_form(); ?>
                    </div><!-- .page-content -->

                </article><!-- .error-404 -->

            </div><!-- #content -->

        </main><!-- #main -->
    </div><!-- #content-area -->

<?php get_footer(); ?>
