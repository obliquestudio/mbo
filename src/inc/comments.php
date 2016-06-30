<?php
/**
 * Comments
 *
 * @link http://themeshaper.com/2012/11/04/the-wordpress-theme-comments-template/
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

if ( ! function_exists( 'mbo_comment' ) ) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @since MBO Framework 1.0.0
	 */
	function mbo_comment( $comment, $args, $depth ) {

		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :

			case 'pingback' :

			case 'trackback' :
				?>
				<li class="post pingback">
					<p><?php _e( 'Pingback:', 'mboframework' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'mboframework' ), ' ' ); ?></p>
				<?php
				break;

			default :
				?>
				<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
					<article id="comment-<?php comment_ID(); ?>" class="comment">
						<header class="comment-header">
							<div class="comment-author vcard">
								<?php echo get_avatar( $comment, 40 ); ?>
								<?php printf( __( '%s <span class="says">says:</span>', 'mboframework' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
							</div><!-- .comment-author .vcard -->
							<?php if ( $comment->comment_approved == '0' ) : ?>
								<em><?php _e( 'Your comment is awaiting moderation.', 'mboframework' ); ?></em>
								<br />
							<?php endif; ?>

							<div class="comment-meta commentmetadata">
								<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
										<?php
											/* translators: 1: date, 2: time */
											printf( __( '%1$s at %2$s', 'mboframework' ), get_comment_date(), get_comment_time() ); ?>
									</time></a>
								<?php edit_comment_link( __( '(Edit)', 'mboframework' ), ' ' );
								?>
							</div><!-- .comment-meta .commentmetadata -->
						</header>

						<div class="comment-content"><?php comment_text(); ?></div>

						<div class="reply">
							<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
						</div><!-- .reply -->
					</article><!-- #comment-## -->
				<?php

				break;

		endswitch;
	}
endif; // end check for mbo_comment()


/**
 * Custom comment form fields
 *
 * Filtering default comment form fields so that they use bootstrap styles
 *
 * @link http://www.codecheese.com/2013/11/wordpress-comment-form-with-twitter-bootstrap-3-supports/
 *
 * @since MBO Framework 1.0.0
 */
add_filter( 'comment_form_default_fields', 'mbo_comment_form_fields' );
function mbo_comment_form_fields() {

	$commenter = wp_get_current_commenter();
	$req      = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields   =  array(
		'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name', 'mboframework' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' /></div>',
		'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email', 'mboframework' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' /></div>',
		'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website', 'mboframework' ) . '</label> ' .
			'<input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '"  /></div>',
	);

	return $fields;
}


/**
 * Custom comment form textarea
 *
 * Filtering default comment form textarea so that it uses bootstrap styles
 *
 * @link http://www.codecheese.com/2013/11/wordpress-comment-form-with-twitter-bootstrap-3-supports/
 *
 * @since MBO Framework 1.0.0
 */
add_filter( 'comment_form_defaults', 'mbo_comment_form' );
function mbo_comment_form( $args ) {
	$args['comment_field'] = '<div class="form-group comment-form-comment">
		<label for="comment">' . __( 'Comment', 'mboframework' ) . '</label>
		<textarea id="comment" name="comment" rows="8" aria-required="true"></textarea>
	</div>';
	$args['comment_notes_after'] = '';

	return $args;
}
