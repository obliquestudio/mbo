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
            the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

            // Meta
            mbo_post_meta();
        ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more"><?php _e('Read more', 'mboframework'); ?></a>
    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
