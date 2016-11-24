<?php
/**
* Menu & navigation
*
* @author O B L / Q U E
* @package WordPress
* @subpackage MBO_Framework
*/

/*
* Registers custom navigation menus
* See http://codex.wordpress.org/Function_Reference/register_nav_menus
*/
register_nav_menus(array(
    'primary_navigation'    => __('Primary Navigation', 'mboframework'),
    'sub_footer_navigation' => __('Sub Footer Navigation', 'mboframework')
));


/**
* Register primary nav
*
* @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
*/
function mbo_primary_nav() {
    wp_nav_menu(array(
        'menu'              => __( 'The primary manu', 'mboframework' ),
        'menu_class'        => 'nav navbar-nav navbar-right',
        'container'			=> 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'		=> 'navbar-collapse-container',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'depth'             => 2,
        'walker'            => new wp_bootstrap_navwalker(),
        'theme_location'	=> 'primary_navigation'
    ));
}

/**
* Register sub footer nav
*
* @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
*/
function mbo_sub_footer_nav() {
    wp_nav_menu(array(
        'menu'              => __( 'The sub footer menu', 'mboframework' ),
        'menu_class'        => 'sub-footer-navigation list-inline',
        'container'         => '',
        'before'            => '',
        'after'             => '',
        'link_before'       => '',
        'link_after'        => '',
        'depth'             => 0,
        'theme_location'    => 'sub_footer_navigation'
    ));
}
