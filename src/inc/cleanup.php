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
 */

/**
 * Wordpress header and footer cleanup
 */
function mbo_header_footer_cleanup() {
    // Display the links to the extra feeds such as category feeds
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    // Display the links to the general feeds: Post and Comment Feed
    remove_action( 'wp_head', 'feed_links', 2 );
    // Display the link to the Really Simple Discovery service endpoint, EditURI link
    remove_action( 'wp_head', 'rsd_link' );
    // Display the link to the Windows Live Writer manifest file.
    remove_action( 'wp_head', 'wlwmanifest_link' );
    // Display relational links for the posts adjacent to the current post.
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    // Remove comment-reply.min.js from the footer
    wp_deregister_script( 'comment-reply' );
}
add_action( 'init', 'mbo_header_footer_cleanup' );


/**
 * Remove the WordPress version from RSS feeds
 */
add_filter('the_generator', '__return_false');


/**
 * Disable the emoji's
 *
 * @link http://wordpress.stackexchange.com/questions/185577/disable-emojicons-introduced-with-wp-4-2
 */
function mbo_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'mbo_disable_emojis' );


/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @link http://wordpress.stackexchange.com/questions/185577/disable-emojicons-introduced-with-wp-4-2
 */
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}


/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @link http://wordpress.stackexchange.com/questions/185577/disable-emojicons-introduced-with-wp-4-2
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
    if ( 'dns-prefetch' == $relation_type ) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

        $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }
    return $urls;
}


/**
 * Remove WP version from css/js
 */
function mbo_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'mbo_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'mbo_remove_wp_ver_css_js', 9999 );


/**
 * Clean up output of stylesheet <link> tags
 *
 * @link http://wordpress.stackexchange.com/questions/50439/clean-up-script-tags/
 */
function mbo_clean_style_tag($input) {
    preg_match_all("!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches);

    // only display media if it's print
    $media = $matches[3][0] === 'print' ? ' media="print"' : '';
    return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
}
add_filter('style_loader_tag', 'mbo_clean_style_tag');


/**
 * Remove the p from around imgs
 *
 * @link http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/
 */
function mbo_filter_ptags_on_images($content){
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter( 'the_content', 'mbo_filter_ptags_on_images' );


/**
 * Custom excerpt length (only affects auto generated excerpts)
 * Length is defined in /inc/config.php
 */
function mbo_excerpt_length() {
    return MBO_EXCERPT_LENGTH;
}
add_filter( 'excerpt_length', 'mbo_excerpt_length', 999 );


/**
 * Remove [...] from excerpt
 *
 * @link http://codex.wordpress.org/Function_Reference/the_excerpt
 */
function mbo_excerpt( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'mbo_excerpt' );


/**
 * Adds trailing dots wordpress excerpt
 *
 * @link https://codex.wordpress.org/Function_Reference/wp_trim_excerpt
 */
function mbo_excerpt_more( $text ) {
    return $text . '...';
}
add_filter( 'wp_trim_excerpt', 'mbo_excerpt_more' );


/**
 * Remove Dashboard Widgets
 */
function mbo_remove_dashboard_widgets() {
    remove_meta_box('dashboard_primary', 'dashboard', 'normal'); // Remove news widget
}
add_action('admin_init', 'mbo_remove_dashboard_widgets');


/**
 * Search result filter
 *
 * Filter the search results on the front end to only show posts
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
 */
add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html, $url, $attr, $post_id) {
    return '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
}


/**
 * Enable support for SVG upload in the media center
 */
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
