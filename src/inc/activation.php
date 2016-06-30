<?php
/**
 * Theme activation and deactivation hooks
 *
 * @link http://www.krishnakantsharma.com/activationdeactivation-hook-for-wordpress-theme/
 * @author Krishna Kant Sharma (http://www.krishnakantsharma.com)
 *
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

/**
 * Register theme activation hook
 *
 * @param string  $code     : Code of the theme. This can be the base folder of your theme. Eg if your theme is in folder 'mytheme' then code will be 'mytheme'
 * @param callback $function : Function to call when theme gets activated.
 *
 * @since MBO Framework 1.0.0
 */
function wp_register_theme_activation_hook( $code, $function ) {
	$optionKey="mbo_" . $code . "_active";
	if ( !get_option( $optionKey ) ) {
		call_user_func( $function );
		update_option( $optionKey , 1 );
	}
}


/**
 * Register deactivation hook
 *
 * @param string  $code     : Code of the theme. This must match the value you provided in wp_register_theme_activation_hook function as $code
 * @param callback $function : Function to call when theme gets deactivated.
 *
 * @since MBO Framework 1.0.0
 */
function wp_register_theme_deactivation_hook( $code, $function ) {
	// store function in code specific global
	$GLOBALS["wp_register_theme_deactivation_hook_function" . $code]=$function;

	// create a runtime function which will delete the option set while activation of this theme and will call deactivation function provided in $function
	$fn=create_function( '$theme', ' call_user_func($GLOBALS["wp_register_theme_deactivation_hook_function' . $code . '"]); delete_option("mbo_' . $code . '_active");' );

	// add above created function to switch_theme action hook. This hook gets called when admin changes the theme.
	// Due to wordpress grid implementation this hook can only be received by currently active theme (which is going to be deactivated as admin has chosen another one.
	// Your theme can perceive this hook as a deactivation hook.)
	add_action( "switch_theme", $fn );
}


/**
 * Provides activation/deactivation hook for mbo_framework, when activated the
 * above also adds in a WordPress option called mbo_" . $code . "_active.
 *
 * Later on when shortcodes plugin is complete we can check this option to see
 * if we are running the MBO Framework so that we don't include duplicates of
 * the stylesheets and JS files
 *
 * @since MBO Framework 1.0.0
 */

// Array of pages used by the Studio Oblique theme. Created on theme Activation and
// Removed on theme de-acivation.
global $mbo_docs_activation_pages;

$default_content = 'Content not shown by template. Any content here will be removed on theme de-acivation';

$mbo_docs_activation_pages = array(
	// Page Title and URL (a blank space will end up becomeing a dash "-")
	'_Docs - CSS' => array(
		// Page Content     // Template to use (if left blank the default template will be used)
		$default_content =>'docs/css.php' ),

	'_Docs - Components' => array(
		$default_content =>'docs/components.php' ),

	'_Docs - Font awesome' => array(
		$default_content =>'docs/font-awesome.php' ),

	'_Docs - Grids & Tiles' => array(
		$default_content =>'docs/grids.php' ),

	'_Docs - Javascript' => array(
		$default_content =>'docs/javascript.php' ),

	'_Docs - Pricing Tables' => array(
		$default_content =>'docs/pricing-tables.php' ),
);

$mbo_standard_activation_pages = array(
	// Page Title and URL (a blank space will end up becomeing a dash "-")
	'Home' => array(
		// Page Content     // Template to use (if left blank the default template will be used)
		'' =>'' ),

	'About' => array(
		'' =>'' ),

	'Contact' => array(
		'' =>'' ),

	'Terms and Conditions' => array(
		'' =>'' ),

	'Privacy Policy' => array(
		'' =>'' ),

	'Sitemap' => array(
		'' =>'templates/site-map.php' ),
);


// Creates pages on theme activation using global array defined above
function mbo_create_initial_pages() {

	global $mbo_docs_activation_pages;
	global $mbo_standard_activation_pages;

	$mbo_activation_pages = array_merge( $mbo_docs_activation_pages, $mbo_standard_activation_pages );

	foreach ( $mbo_activation_pages as $page_url_title => $page_meta ) {
		$id = get_page_by_title( $page_url_title );

		foreach ( $page_meta as $page_content=>$page_template ) {
			$page = array(
				'post_type'   => 'page',
				'post_title'  => $page_url_title,
				'post_name'   => $page_url_title,
				'post_status' => 'publish',
				'post_content' => $page_content,
				'post_author' => 1,
				'post_parent' => ''
			);

			if ( !isset( $id->ID ) ) {
				$new_page_id = wp_insert_post( $page );
				if ( !empty( $page_template ) ) {
					update_post_meta( $new_page_id, '_wp_page_template', $page_template );
				}
			}
		}
	};
}

// Deletion of pages on theme de-activation using global array defined above
// Only removes documentation pages and leaves standard pages
function mbo_destroy_initial_pages() {
	global $mbo_docs_activation_pages;
	$pages = array_keys( $mbo_docs_activation_pages );

	foreach ( $pages as $page ) {
		$current_page = get_page_by_title( $page );
		wp_delete_post( $current_page->ID, true );
	}
}

// Sets the Front Page to be the page entitled Home
function mbo_set_front_page() {
	$home = get_page_by_title( 'Home' );

	if ( $home ) {
		update_option( 'page_on_front', $home->ID );
		update_option( 'show_on_front', 'page' );
	}
}

function mbo_create_primary_nav(){
	$primary_navigation = "Primary Navigation";
	$menu_location 		= "primary_navigation";

	$menu_exists = wp_get_nav_menu_object( $primary_navigation );

	if (!$menu_exists){
		$menu_id = wp_create_nav_menu($primary_navigation);

		// Set up default menu items
	    wp_update_nav_menu_item($menu_id, 0, array(
	        'menu-item-title' =>  __('Home'),
	        'menu-item-classes' => 'home',
	        'menu-item-url' => home_url( '/' ),
	        'menu-item-status' => 'publish'));


	    wp_update_nav_menu_item($menu_id, 0, array(
	        'menu-item-title' =>  __('About'),
	        'menu-item-classes' => 'about',
	        'menu-item-url' => home_url( '/about' ),
	        'menu-item-status' => 'publish'));

	    wp_update_nav_menu_item($menu_id, 0, array(
	        'menu-item-title' =>  __('Contact'),
	        'menu-item-classes' => 'contact',
	        'menu-item-url' => home_url( '/contact' ),
	        'menu-item-status' => 'publish'));

    }

    if( !has_nav_menu( $menu_location ) ){
		$locations = get_theme_mod('nav_menu_locations');
		$locations[$menu_location] = $menu_id;
		set_theme_mod( 'nav_menu_locations', $locations );
	}

}

function mbo_create_sub_footer_nav(){
	$primary_navigation = "Sub Footer Navigation";
	$menu_location 		= "sub_footer_navigation";

	$menu_exists = wp_get_nav_menu_object( $primary_navigation );

	if (!$menu_exists){
		$menu_id = wp_create_nav_menu($primary_navigation);

		// Set up default menu items
	    wp_update_nav_menu_item($menu_id, 0, array(
	        'menu-item-title' =>  __('Terms and Conditions'),
	        'menu-item-classes' => 'terms_and_conditions',
	        'menu-item-url' => home_url( '/terms-and-conditions' ),
	        'menu-item-status' => 'publish'));


	    wp_update_nav_menu_item($menu_id, 0, array(
	        'menu-item-title' =>  __('Privacy Policy'),
	        'menu-item-classes' => 'privacy_policy',
	        'menu-item-url' => home_url( '/privacy-policy' ),
	        'menu-item-status' => 'publish'));

	    wp_update_nav_menu_item($menu_id, 0, array(
	        'menu-item-title' =>  __('Sitemap'),
	        'menu-item-classes' => 'sitemap',
	        'menu-item-url' => home_url( '/sitemap' ),
	        'menu-item-status' => 'publish'));

	    }

	    if( !has_nav_menu( $menu_location ) ){
	          $locations = get_theme_mod('nav_menu_locations');
	          $locations[$menu_location] = $menu_id;
	          set_theme_mod( 'nav_menu_locations', $locations );
	      }

}

// Set permalink structure to Postname
function change_permalinks() {
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('%category%/%postname%/');
    $wp_rewrite->flush_rules();
}

// Functions that run on theme activation.
function mbo_framework_activate() {
	if ( isset( $_GET['activated'] ) && is_admin() ) {
		add_action( 'init', 'mbo_create_initial_pages' );
	}

	mbo_set_front_page();

	mbo_create_primary_nav();

	mbo_create_sub_footer_nav();

	add_action('init', 'change_permalinks');

}
wp_register_theme_activation_hook( 'framework', 'mbo_framework_activate' );

// Functions that run on theme de-activation.
function mbo_framework_deactivate() {
	mbo_destroy_initial_pages();
}
wp_register_theme_deactivation_hook( 'framework', 'mbo_framework_deactivate' );