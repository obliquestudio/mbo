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

	<header class="entry-header">
		<?php

			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				echo '<div class="featured-image">';
				the_post_thumbnail();
				echo '</div>';
			}

			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;

			// Output the post meta
			// Located in /inc/template-tags.php
			mbo_post_meta();

		?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<?php if ( is_single() ) : // Show this only on a single post page ?>
		<footer class="entry-footer">
			<?php the_tags( '<span class="tags-links">' . __( 'Tags:', 'mboframework' ) . ' ', ', ', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-## -->
