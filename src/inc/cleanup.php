<?php
/**
 * Cleanup
 *
 * In this file we do a bunch of things that are designed to harden WordPress
 * as well as tidy up a few of WordPress's default styles and settings
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

/**
 * WP_HEAD cleanup
 *
 * @link http://wpengineer.com/1438/wordpress-header/
 *
 * @since MBO Framework 1.0.0
 */
function mbo_head_cleanup() {

	// Display the links to the extra feeds such as category feeds
	// remove_action( 'wp_head', 'feed_links_extra', 3 );
	// Display the links to the general feeds: Post and Comment Feed
	// remove_action( 'wp_head', 'feed_links', 2 );
	// Display the link to the Really Simple Discovery service endpoint, EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// Display the link to the Windows Live Writer manifest file.
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// Index link
	remove_action( 'wp_head', 'index_rel_link' );
	// Previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// Start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// Display relational links for the posts adjacent to the current post.
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// Display the XHTML generator that is generated on the wp_head hook, WP version
	remove_action( 'wp_head', 'wp_generator' );

}
add_action( 'init', 'mbo_head_cleanup' );


/**
 * Remove the WordPress version from RSS feeds
 *
 * @since MBO Framework 1.0.0
 */
add_filter('the_generator', '__return_false');


/**
 * Remove WP version from css/js
 *
 * @since MBO Framework 1.0.0
 */
function mbo_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'mbo_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'mbo_remove_wp_ver_css_js', 9999 );


/**
 * Remove injected css for recent comments widget
 *
 * @since MBO Framework 1.0.0
 */
function mbo_remove_wp_widget_recent_comments_style() {
	if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
		remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
	}
}
add_filter( 'wp_head', 'mbo_remove_wp_widget_recent_comments_style', 1 );


/**
 * Remove injected CSS from recent comments widget
 *
 * @since MBO Framework 1.0.0
 */
function mbo_remove_recent_comments_style() {
	global $wp_widget_factory;
	if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
		remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
	}
}
add_action( 'wp_head', 'mbo_remove_recent_comments_style', 1 );


/**
 * Clean up output of stylesheet <link> tags
 *
 * @link http://wordpress.stackexchange.com/questions/50439/clean-up-script-tags/
 *
 * @since MBO Framework 1.0.0
 */
function mbo_clean_style_tag($input) {
	preg_match_all("!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches);

	//only display media if it's print
	$media = $matches[3][0] === 'print' ? ' media="print"' : '';
	return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
}
add_filter('style_loader_tag', 'mbo_clean_style_tag');


/**
 * Remove injected CSS from gallery
 *
 * @since MBO Framework 1.0.0
 */
function mbo_gallery_style($css) {
	return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
}
add_filter( 'gallery_style', 'mbo_gallery_style' );


/**
 * Remove the p from around imgs
 *
 * @link http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/
 *
 * @since MBO Framework 1.0.0
 */
function mbo_filter_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter( 'the_content', 'mbo_filter_ptags_on_images' );


/**
 * Replace [...] excerpt with readmore link
 *
 * @link http://codex.wordpress.org/Function_Reference/the_excerpt
 *
 * @since MBO Framework 1.0.0
 */
function mbo_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'mbo_excerpt_more' );


/**
 * Custom excerpt length
 * Length is defined in /inc/config.php
 *
 * @since MBO Framework 1.0.0
 */
function mbo_excerpt_length( $length ) {
	return MBO_EXCERPT_LENGTH;
}
add_filter( 'excerpt_length', 'mbo_excerpt_length', 999 );


/**
 * Remove Dashboard Widgets
 *
 * @link http://www.deluxeblogtips.com/2011/01/remove-dashboard-widgets-in-wordpress.html
 *
 * @since MBO Framework 1.0.0
 */
function mbo_remove_dashboard_widgets() {
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
	remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
	remove_meta_box('dashboard_primary', 'dashboard', 'normal');
	remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
}
add_action('admin_init', 'mbo_remove_dashboard_widgets');


/**
 * Search result filter
 *
 * Filter the search results on the front end to only show posts
 *
 * @since MBO Framework 1.0.0
 */
function searchFilter($query) {

	if (!is_admin()) {

		if ($query->is_search) {
			$query->set('post_type', 'post');
		}
		return $query;

	}
}
add_filter('pre_get_posts','searchFilter');


/**
 * Wrap oEmbed with responsive embed class
 *
 * @link http://css-tricks.com/NetMag/FluidWidthVideo/Article-FluidWidthVideo.php
 *
 * @since MBO Framework 1.0.0
 */
add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html, $url, $attr, $post_id) {
	return '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
}

