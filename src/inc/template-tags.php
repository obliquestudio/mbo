<?php
/**
 * Template tags
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

/**
 * Content classes
 *
 * @since MBO Framework 1.0.0
 */
// Fullwidth #main class
function mbo_fw_class() {
	echo 'col-sm-12';
}

// #main class
function mbo_content_class() {
	echo 'col-sm-7';
}

// #sidebar class
function mbo_sidebar_class() {
	echo 'col-sm-4 col-sm-offset-1';
}


/**
 * Custom the_author_posts_link
 *
 * @since MBO Framework 1.0.0
 */
function mbo_get_the_author_posts_link() {
	global $authordata;
	if ( !is_object( $authordata ) )
		return false;
	$link = sprintf(
		'<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
		get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
		esc_attr( sprintf( __( 'Posts by %s', 'mboframework' ), get_the_author() ) ),
		get_the_author()
	);
	return $link;
}


/**
 * Post Meta
 *
 * Outpusts all the meta for the current posts, includes post date, categories,
 * author, comments and edit link
 *
 * @since MBO Framework 1.0.0
 */
function mbo_post_meta() {

	// Search page results can contain both posts and pages so only show post meta if this result is a post
	if ( 'post' == get_post_type() ): ?>

		<div class="entry-meta">
		<?php

			$time_string = '<time class="updated" datetime="%1$s">%2$s</time>';

			$time_string = sprintf( $time_string,
				get_the_time('Y-m-j'),
				get_the_time(get_option('date_format'))
			);

			printf( __( '<span class="posted-on">Posted %1$s</span>', 'mboframework' ), $time_string );

			if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'mboframework' ), __( '1 Comment', 'mboframework' ), __( '% Comments', 'mboframework' ) ); ?></span>
			<?php endif;

			printf( __( '<span class="cat-links">In %1$s</span>', 'mboframework' ), get_the_category_list(', ') );

			edit_post_link( __( 'Edit', 'mboframework' ), '<span class="edit-link">', '</span>' );

		?>
		</div><!-- .entry-meta -->

	<?php endif;

}


/**
 * Page navigation
 *
 * Customise the pagination function to use Bootstrap 3 styles.
 *
 * @since MBO Framework 1.0.0
 */
function mbo_page_navi() {

	global $wp_query;
	$bignum = 999999999;
	if ( $wp_query->max_num_pages <= 1 )
		return;

	echo '<nav class="page-navigation">';

	$return = paginate_links( array(
		'base'       => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
		'format'     => '',
		'current'    => max( 1, get_query_var('paged') ),
		'total'      => $wp_query->max_num_pages,
		'prev_text'  => '&larr;',
		'next_text'  => '&rarr;',
		'type'       => 'list',
		'end_size'   => 3,
		'mid_size'   => 3
	) );

	// Bandaid to change class of paginate_links ul
	// http://wordpress.stackexchange.com/questions/126080/changing-pagination-list-class
	echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );

	echo '</nav>';

}


/**
 * Post navigation
 *
 * Customise the to next/previous function to use Bootstrap 3 styles.
 *
 * @since MBO Framework 1.0.0
 */
function mbo_post_navi() {

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="post-navigation">
		<ul class="pager">
			<?php
				previous_post_link( '<li class="previous">%link</li>', __( '<span class="meta-nav">&larr;</span> Next', 'Previous post link', 'mboframework' ) );
				next_post_link( '<li class="next">%link</li>', __( 'Previous <span class="meta-nav">&rarr;</span>', 'Next post link', 'mboframework' ) );
			?>
		</ul><!-- .nav-links -->
	</nav><!-- .navigation -->
<?php

}


/**
 * Custom search form
 *
 * Updates the default search form to use Bootstrap 3 styles.
 *
 * @since MBO Framework 1.0.0
 */
function mbo_wpsearch() {
	$form = '
	   <form id="searchform" role="search" method="get" action="' . home_url( '/' ) . '" >
		  <div class="input-group">
			 <label class="sr-only" for="s">' . __( 'Search for:', 'mboframework' ) . '</label>
			 <input class="form-control" type="text" id="s" value="' . get_search_query() . '" name="s" placeholder="' . esc_attr__( 'Enter search term', 'mboframework' ) . '" />
			 <span class="input-group-btn">
				<input type="submit" id="searchsubmit" class="btn btn-default" value="' . esc_attr__( 'Search' ) .'" />
			 </span>
		  </div>
	   </form>
   ';
	return $form;
}
add_filter( 'get_search_form', 'mbo_wpsearch' );


/**
 * Custom password protected form
 *
 * Updates the password protected form to use Bootstrap 3 styles.
 *
 * @link http://tummel.me/wordpress-3-4-custom-password-form/
 *
 * @since MBO Framework 1.0.0
 */
function custom_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$form = '<form action="' . get_option('siteurl') . '/wp-login.php?action=postpass" class="post-password-form" method="post"><p>' . __( "This content is password protected. To view it please enter your password below:", 'mboframework' ) . '</p><p style="margin-bottom: 0;"><label class="pass-label" for="' . $label . '">' . __( "Password:", 'mboframework' ) . ' </label></p><div class="input-group"><input class="form-control" type="password" id="' . $label . '" name="post_password" placeholder="' . esc_attr__( 'Please enter your password', 'mboframework' ) . '"  /><span class="input-group-btn"><input type="submit" name="Submit" class="btn btn-default" value="' . esc_attr__( "Submit" ) . '" /></span></div></form>';
	return $form;
}
add_filter( 'the_password_form', 'custom_password_form' );
