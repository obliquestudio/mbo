<?php
/**
 * The template used for displaying page content
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="page-header">
		<?php
            // Thumbnail
            mbo_post_thumbnail();

            // Title
            the_title( '<h1 class="page-title">', '</h1>' );
        ?>
    </header><!-- .page-header -->

    <div class="page-content">
		<?php the_content(); ?>
	</div><!-- .page-content -->

</article><!-- #post-## -->
