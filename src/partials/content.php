<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
        // Post thumbnail.
        mbo_post_thumbnail();
    ?>

    <header class="entry-header">
        <?php
            if ( is_single() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
            endif;

            // Output the post meta
            // Located in /inc/template-tags.php
            mbo_post_meta();

            twentyfifteen_entry_meta();

        ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
            /* translators: %s: Name of current post */
            the_content( sprintf(
                __( 'Continue reading %s', 'mboframework' ), // TODO
                the_title( '<span class="screen-reader-text">', '</span>', false )
            ) );
        ?>
    </div><!-- .entry-content -->

    <?php edit_post_link( __( 'Edit', 'mboframework' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->
