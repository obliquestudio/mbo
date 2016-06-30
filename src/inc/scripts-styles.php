<?php
/**
 * Scripts and styles
 *
 * Correctly include styles and javascript files
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since MBO Framework 1.0.0
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
		wp_register_style( 'mbo-main-stylesheet', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), null, 'all' );

		// IE-only style sheet
		wp_register_style( 'mbo-ie-only', get_stylesheet_directory_uri() . '/assets/css/ie.css', array(), null, 'all' );


		/*
		 * Register scripts
		 * See http://codex.wordpress.org/Function_Reference/wp_register_script
		 * ========================================================================== */

		// Main JS
		wp_register_script( 'mbo-main-scripts', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), null, true );

		/*
		 * Grab Google CDN's latest jQuery fallback to local if offline
		 * Leave in the header to avoid conflicts with plugins.
		 */
		wp_deregister_script('jquery');

		wp_register_script(
		  'jquery',
		  'http://code.jquery.com/jquery-latest.min.js',
		  [],
		  null,
		  true
		);

		add_filter( 'script_loader_src', 'mbo_jquery_fallback', 10, 2 );

		/*
		 * Enqueue stylesheets
		 * Opted to include css first for better mobile loading times over faster desktop
		 * See http://stackoverflow.com/questions/9271276/is-the-recommendation-to-include-css-before-javascript-invalid
		 * See http://codex.wordpress.org/Function_Reference/wp_enqueue_style
		 * ========================================================================== */

		// wp_enqueue_style( 'font-awesome' );
		wp_enqueue_style( 'mbo-main-stylesheet' );
		wp_enqueue_style( 'mbo-ie-only' );

		// Add conditional wrapper around ie stylesheet
		$wp_styles->add_data( 'mbo-ie-only', 'conditional', 'lt IE 9' );


		/*
		 * Enqueue scripts
		 * Opted to include css first for better mobile loading times over faster desktop
		 * See http://codex.wordpress.org/Function_Reference/wp_enqueue_script
		 * ========================================================================== */

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'mbo-main-scripts' );

		// Comment reply script for threaded comments
		if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
			wp_enqueue_script( 'comment-reply' );
		}


		/*
		 * Localize the main Javascript file so that we can make the following WordPress
		 * variables available to the main JS file.
		 * USAGE: console.log(mbo_vars.url);
		 * See http://codex.wordpress.org/Function_Reference/wp_localize_script
		 */
		$mbo_vars = array(
			'url' 					=> home_url(),
			'template_directory' 	=> get_template_directory_uri(),
			'ajaxurl' 				=> admin_url( 'admin-ajax.php' ),
			'ajaxNonce'				=> wp_create_nonce( 'mbo_ajax_nonce' ),
		);
		wp_localize_script( 'mbo-main-scripts', 'mbo_vars', $mbo_vars );

	}

}
add_action( 'wp_enqueue_scripts', 'mbo_scripts_and_styles', 999 );

/**
 * Output the local fallback immediately after jQuery's <script>
 *
 * @link http://wordpress.stackexchange.com/a/12450
 */
function mbo_jquery_fallback($src, $handle = null) {
  static $add_jquery_fallback = false;

  if ($add_jquery_fallback) {
    echo '<script>window.jQuery || document.write(\'<script src="' . $add_jquery_fallback .'"><\/script>\')</script>' . "\n";
    $add_jquery_fallback = false;
  }

  if ($handle === 'jquery') {
    $add_jquery_fallback = apply_filters('script_loader_src', \includes_url('/assets/js/jquery/jquery.js'), 'jquery-fallback');
  }

  return $src;
}
