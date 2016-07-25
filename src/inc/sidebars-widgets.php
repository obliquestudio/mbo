<?php
/**
 * Sidebars & widgets
 * Usage: <?php dynamic_sidebar( $index ); ?>
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

function mbo_widgets_init() {

	register_sidebar(array(
		'name' => __( 'Main sidebar', 'mboframework' ),
		'id'            => 'main-sidebar',
        'class'         => '',
		'description' => __( 'The main sidebar.', 'mboframework' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => __( 'Footer widget area 1', 'mboframework' ),
		'id'            => 'footer-widget-1',
        'class'         => '',
		'description' => __( 'The first footer widget area.', 'mboframework' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => __( 'Footer widget area 2', 'mboframework' ),
		'id'            => 'footer-widget-2',
        'class'         => '',
		'description' => __( 'The second footer widget area.', 'mboframework' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => __( 'Footer widget area 3', 'mboframework' ),
		'id'            => 'footer-widget-3',
        'class'         => '',
		'description' => __( 'The third footer widget area.', 'mboframework' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => __( 'Footer widget area 4', 'mboframework' ),
		'id'            => 'footer-widget-4',
        'class'         => '',
		'description' => __( 'The fourth footer widget area.', 'mboframework' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

}
add_action( 'widgets_init', 'mbo_widgets_init' );
