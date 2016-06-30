<?php
/**
 * The template used for displaying page content
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="page-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php the_content(); ?>
	</div><!-- .page-content -->

	<?php edit_post_link( __( 'Edit', 'mboframework' ), '<footer class="page-footer"><span class="edit-link">', '</span></footer><!-- .page-footer -->' ); ?>

</article><!-- #post-## -->