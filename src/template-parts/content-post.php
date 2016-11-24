<?php
/**
 * The default template for displaying post thumb content
 *
 * Used for both single and index/archive/search.
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php
            // Thumbnail
            mbo_post_thumbnail();

            // Title
            the_title( '<h1 class="entry-title">', '</h1>' );

            // Meta
            mbo_post_meta();
        ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php
            /*
             * Previous/next post navigation
             */
            mbo_post_navi();
        ?>
    </footer>

</article><!-- #post-## -->
