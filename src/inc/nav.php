<?php
/**
 * Menu & navigation
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

/*
 * Registers custom navigation menus
 * See http://codex.wordpress.org/Function_Reference/register_nav_menus
 */
register_nav_menus(array(
	'primary_navigation' => __('Primary Navigation', 'mboframework'),
	'footer_navigation' => __('Footer Navigation', 'mboframework'),
	'sub_footer_navigation' => __('Sub Footer Navigation', 'mboframework'),
));


/**
 * Register primary nav
 *
 * @since MBO Framework 1.0.0
 */
function mbo_primary_nav() {
	wp_nav_menu(array(
		'container'			=> 'div',
		'container_id'		=> 'navbar-collapse-container',
		'container_class'	=> 'collapse navbar-collapse',
		'menu'				=> __( 'The primary manu', 'mboframework' ),
		'menu_class'		=> 'nav navbar-nav navbar-right',
		'theme_location'	=> 'primary_navigation',
		'depth'				=> 2,
		'fallback_cb'		=> 'wp_bootstrap_navwalker::fallback',
		'walker'			=> new wp_bootstrap_navwalker()
	));
}


/**
 * Register footer nav
 *
 * @since MBO Framework 1.0.0
 */
function mbo_footer_nav() {
	wp_nav_menu(array(
		'container'			=> '',
		'container_class'	=> 'footer-nav clearfix',
		'menu'				=> __( 'The footer menu', 'mboframework' ),
		'menu_class'		=> 'nav navbar-nav footer-nav',
		'theme_location'	=> 'footer_navigation',
		'before'			=> '',
		'after'				=> '',
		'link_before'		=> '',
		'link_after'		=> '',
		'depth'				=> 0,
		'fallback_cb'		=> ''
	));
}


/**
 * Register sub footer nav
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 *
 * @since MBO Framework 1.0.0
 */
function mbo_sub_footer_nav() {
	wp_nav_menu(array(
		'container'			=> '',
		'container_class'	=> 'sub-footer-nav clearfix',
		'menu'				=> __( 'The sub footer menu', 'mboframework' ),
		'menu_class'		=> 'sub-footer-navigation',
		'theme_location'	=> 'sub_footer_navigation',
		'before'			=> '',
		'after'				=> '',
		'link_before'		=> '',
		'link_after'		=> '',
		'depth'				=> 0,
		'fallback_cb'		=> ''
	));
}