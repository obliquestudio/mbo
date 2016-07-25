<?php
/**
 * The template for displaying 404 pages (Not Found)
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

                <section class="error-404 not-found">

                    <header class="page-header">
                        <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'mboframework'); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php _e( 'The page you trying to reach does not exist, or has been moved. Perhaps searching can help.', 'mboframework' ); ?></p>

                        <?php get_search_form(); ?>
                    </div><!-- .page-content -->

                </section><!-- .error-404 -->

            </div><!-- #content -->

        </main><!-- #main -->
    </div><!-- #content-area -->

<?php
get_footer();
