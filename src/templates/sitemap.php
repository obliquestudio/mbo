<?php
/*
Template Name: Sitemap template
*/
?>

<?php get_header(); ?>

    <div id="content-area" class="container-fluid">
        <main id="main" class="site-main row" role="main">

            <div id="content" class="site-content <?php mbo_fw_class(); ?>" role="main">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">

                        <ul>
                        <?php
                            $exclude_array = get_the_ID();
                            wp_list_pages(
                                array(
                                    'exclude' => $exclude_array,
                                    'title_li' => '',
                                    )
                                );
                        ?>
                        </ul>

                    </div><!-- .page-content -->

                    <?php edit_post_link( __( 'Edit', 'mboframework' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

                </article><!-- #post-## -->

            </div><!-- #content -->

        </main><!-- #main -->
    </div><!-- #content-area -->

<?php get_footer(); ?>
