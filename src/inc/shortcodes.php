<?php
/**
 * Shortcodes
 *
 * @link https://codex.wordpress.org/Shortcode_API
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */

// Enable shortcodes in widgets
add_filter('widget_text', 'do_shortcode');
