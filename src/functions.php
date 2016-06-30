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
 * @since MBO Framework 1.0.0
 */

/**
 * Custom Metaboxes and Fields
 *
 * @link https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress/wiki/
 *
 * @author WebDevStudios (webdevstudios.com)
 * @since MBO Framework 1.0.0
 */
if ( file_exists( dirname( __FILE__ ) . '/inc/meta-boxes/metaboxes-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/inc/meta-boxes/metaboxes-config.php' );
}


/**
 * The Redux Options Framework Plugin
 *
 * @link http://docs.reduxframework.com/
 *
 * @author Team Redux (reduxframework.com)
 * @since MBO Framework 1.0.0
 */

// Define options framework url
define( 'REDUX_URL', trailingslashit( get_stylesheet_directory()  . '/inc/admin' ) );

// Include options framework if present
if ( !class_exists( 'ReduxFramework' ) && file_exists( REDUX_URL . 'ReduxCore/framework.php' ) ) {
    require_once REDUX_URL . 'ReduxCore/framework.php';
    require_once REDUX_URL . 'options-config.php';
}


require_once('inc/config.php');					// Theme setup and configuration
require_once('inc/cleanup.php');				// Cleanup
require_once('inc/scripts-styles.php');			// Scripts and stylesheets
require_once('inc/sidebars-widgets.php');		// Sidebars and widgets
require_once('inc/nav-bootstrap-walker.php');	// Bootstrap walker class
require_once('inc/nav.php');					// Register custom menus
require_once('inc/cpt-portfolio.php');			// Portfolio custom post type
require_once('inc/comments.php');				// Custom comments
require_once('inc/template-tags.php');			// Various other functions
require_once('inc/activation.php');				// Theme activation
require_once('inc/shortcodes.php');				// Shortcodes
require_once('inc/filter-columns.php');			// Filter custom post type columns
require_once('inc/custom.php');					// Custom functions


// Used after filter-columns.php include
// new Tax_CTP_Filter(
// 	array(

// 		// 'Custom Post Type Name' => array(
// 		// 	'Custom Taxonomy Name',
// 		// 	),
// 		)
// 	);