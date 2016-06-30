<?php
/**
 * Template Name: Docs - Grids & Tiles
 *
 * Cheat sheet for grids and tiles.
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

get_header(); ?>

    <div id="main" class="site-main container-fluid">
        <div id="content-area" class="row">

            <div id="content" class="site-content <?php mbo_fw_class(); ?>" role="main">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <header class="page-header">
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    </header><!-- .entry-header -->

                    <div id="docs-grid" class="page-content">

                        <h3>Standard grid</h3>

                        <div class="row">
                            <div class="col-md-12">
                                <p>12 columns</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11">
                                <p>11 columns</p>
                            </div>
                            <div class="col-md-1">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <p>10 columns</p>
                            </div>
                            <div class="col-md-2">
                                <p>2</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <p>9 columns</p>
                            </div>
                            <div class="col-md-3">
                                <p>3 columns</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>8 columns</p>
                            </div>
                            <div class="col-md-4">
                                <p>4 columns</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <p>7 columns</p>
                            </div>
                            <div class="col-md-5">
                                <p>5 columns</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>6 columns</p>
                            </div>
                            <div class="col-md-6">
                                <p>6 columns</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <p>12 columns</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>4 columns</p>
                            </div>
                            <div class="col-md-4">
                                <p>4 columns</p>
                            </div>
                            <div class="col-md-4">
                                <p>4 columns</p>
                            </div>
                        </div>

                        <h3>Pushing columns</h3>

                        <div class="row">
                            <div class="col-md-12">
                                <p>12 columns</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <p>10 columns</p>
                            </div>
                            <div class="col-md-1 col-md-offset-1">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>6 columns</p>
                            </div>
                            <div class="col-md-4 col-md-offset-2">
                                <p>4 columns</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p>3 columns</p>
                            </div>
                            <div class="col-md-7 col-md-offset-2">
                                <p>7 columns</p>
                            </div>
                        </div>

                    </div><!-- .entry-content -->

                </article><!-- #post-## -->

            </div><!-- #content -->

        </div><!-- #content-area -->
    </div><!-- #main -->

<?php
get_footer();
