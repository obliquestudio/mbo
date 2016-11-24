<?php
/**
 * Framework functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link http://codex.wordpress.org/Theme_Development
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */


// Define stylesheet directory
define( 'SS_DIR', trailingslashit( get_stylesheet_directory() ) );

/**
 * Page builder plugin, incliudes CMB2
 *
 * @link https://github.com/WebDevStudios/WDS-Simple-Page-Builder
 *
 * @author WebDevStudios (webdevstudios.com)
 */
if ( file_exists( SS_DIR . 'inc/page-builder/wds-simple-page-builder.php' ) ) {

    // Page builder
    require_once( 'inc/page-builder/wds-simple-page-builder.php' );
    require_once( 'inc/config-page-builder.php' );
    require_once( 'inc/config-page-builder-fields.php' );

    // Meta boxes
    require_once( 'inc/config-metaboxes.php' );

    // Theme options
    require_once( 'inc/config-theme-options.php' );
}


/**
 * Page ordering plugin
 *
 * Order your pages, hierarchical custom post types, or custom post types with
 * “page-attributes” with simple drag and drop right from the built in page list.
 *
 * @link https://10up.com/plugins/simple-page-ordering-wordpress/
 *
 * @author 10up
 */
if ( file_exists( SS_DIR . 'inc/simple-page-ordering/simple-page-ordering.php' ) ) {
    require_once( 'inc/simple-page-ordering/simple-page-ordering.php' );
}


require_once('inc/cleanup.php');                // Cleanup
require_once('inc/config.php');                 // Theme setup and configuration
require_once('inc/cpt-project.php');            // Project custom post type
require_once('inc/cpt-team-member.php');        // Team member custom post type
require_once('inc/cpt-testimonial.php');        // Testimonial custom post type
require_once('inc/custom.php');                 // Custom functions
require_once('inc/nav-bootstrap-walker.php');   // Bootstrap walker class
require_once('inc/nav.php');                    // Register custom menus
require_once('inc/scripts-styles.php');         // Scripts and stylesheets
require_once('inc/shortcodes.php');             // Shortcodes
require_once('inc/sidebars-widgets.php');       // Sidebars and widgets
require_once('inc/template-tags.php');          // Functions used for templating
require_once('inc/utilities.php');              // Utilities
