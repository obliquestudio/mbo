<?php
/**
 * Scripts and styles
 *
 * Correctly include styles and javascript files
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */

/**
 * Enqueue scripts and styles for the front end.
 */
function mbo_scripts_and_styles() {

    global $wp_styles;

    if (!is_admin()) {

        /*
        * Register stylesheets
        * See http://codex.wordpress.org/Function_Reference/wp_register_style
        * ========================================================================== */

        /*
        * Main stylesheet
        */
        wp_register_style( 'mbo-main-stylesheet', get_stylesheet_directory_uri() . '/assets/css/main.min.css', array(), null, 'all' );


        /*
        * Register scripts
        * See http://codex.wordpress.org/Function_Reference/wp_register_script
        * ========================================================================== */

        // Modernizr
        wp_register_script( 'mbo-custom-modernizr', get_stylesheet_directory_uri() . '/assets/js/modernizr.min.js', array(), null, true );

        /*
        * Grab Google CDN's latest jQuery fallback to local if offline
        * Leave in the header to avoid conflicts with plugins.
        * https://www.obstance.com/articles/web-software/wordpress/using-googles-cdn-to-load-jquery-with-a-local-fallback-on-your-wordpress-powered-site-r16/
        */
        wp_deregister_script( 'jquery' );

        // Check to make sure Google's library is available
        $link = 'http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js';
        $try_url = @fopen($link,'r');
        if( $try_url !== false ) {
        // If it's available, get it registered
            wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
        } else {
        // Register the local file if CDN fails
            wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.12.4', true);
        }

        // Main JS
        wp_register_script( 'mbo-main-scripts', get_stylesheet_directory_uri() . '/assets/js/main.min.js', array(), null, true );


        /*
        * Enqueue stylesheets
        * Opted to include css first for better mobile loading times over faster desktop
        * See http://stackoverflow.com/questions/9271276/is-the-recommendation-to-include-css-before-javascript-invalid
        * See http://codex.wordpress.org/Function_Reference/wp_enqueue_style
        * ========================================================================== */

        wp_enqueue_style( 'mbo-main-stylesheet' );


        /*
        * Enqueue scripts
        * Opted to include css first for better mobile loading times over faster desktop
        * See http://codex.wordpress.org/Function_Reference/wp_enqueue_script
        * ========================================================================== */

        wp_enqueue_script( 'mbo-custom-modernizr' );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'mbo-main-scripts' );

        /*
        * Localize the main Javascript file so that we can make the following WordPress
        * variables available to the main JS file.
        * USAGE: console.log(mbo_vars.url);
        * See http://codex.wordpress.org/Function_Reference/wp_localize_script
        */
        $mbo_vars = array(
            'url'                   => home_url(),
            'template_directory'    => get_template_directory_uri(),
            'ajaxurl'               => admin_url( 'admin-ajax.php' ),
            'ajaxNonce'             => wp_create_nonce( 'mbo_ajax_nonce' ),
        );
        wp_localize_script( 'mbo-main-scripts', 'mbo_vars', $mbo_vars );

    }

}
add_action( 'wp_enqueue_scripts', 'mbo_scripts_and_styles', 999 );
