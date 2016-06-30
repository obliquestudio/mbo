<?php
/**
 * Theme configuration
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

/**
 * Set up the content width value based on the theme's design. This needs to be
 * specified for themes Since Version 2.6, themes need to specify the
 *
 * @link http://codex.wordpress.org/Content_Width
 *
 * @since MBO Framework 1.0.0
 * @todo Update this for each new project
 */
if ( ! isset( $content_width ) ) {
	$content_width = 720;
}


/**
 * Excerpt length
 *
 * Used to excerpt length, adjusting the "50" to match the number of words you
 * wish to display in the excerpt.
 *
 * @link http://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length
 *
 * @since MBO Framework 1.0.0
 */
define('MBO_EXCERPT_LENGTH', 50);


/**
 * Theme setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since MBO Framework 1.0.0
 */
function mbo_theme_config() {

	/*
	 * Make framework available for translation. Translations can be added to the /lang/ directory.
	 * See http://codex.wordpress.org/Translating_WordPress
	 * See http://wpml.org/2009/05/wordpress-theme-localization/
	 */
	load_theme_textdomain('mboframework', get_template_directory() . '/lang');

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for post thumbnails
	 * See http://codex.wordpress.org/Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// Set default featured image dimensions
	set_post_thumbnail_size(715, 250, true);

	/*
	 * Add new post thumbnail sizes
	 * USAGE: <?php the_post_thumbnail( 'category-thumb' ); ?>
	 */
	// add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats
	 * See http://codex.wordpress.org/Post_Formats
	 */
	/*
	add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	);
	*/

}
add_action( 'after_setup_theme', 'mbo_theme_config' );
