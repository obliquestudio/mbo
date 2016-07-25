<?php
/**
 * Portfolio Custom Post Type
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

/**
 * Register the "Portfolio" custom post type
 * See http://codex.wordpress.org/Function_Reference/register_post_type
 */
function cpt_portfolio() {

	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name'					=> __( 'Portfolio', 'mboframework' ),
				'singular_name'			=> __( 'Portfolio Item', 'mboframework' ),
				'all_items'				=> __( 'All Portfolio Items', 'mboframework' ),
				'add_new'				=> __( 'Add New', 'mboframework' ),
				'add_new_item'			=> __( 'Add New Portfolio Item', 'mboframework' ),
				'edit'					=> __( 'Edit', 'mboframework' ),
				'edit_item'				=> __( 'Edit Portfolio Item', 'mboframework' ),
				'new_item'				=> __( 'Add New Portfolio Item', 'mboframework' ),
				'view_item'				=> __( 'View Portfolio Item', 'mboframework' ),
				'search_items'			=> __( 'Search Portfolio', 'mboframework' ),
				'not_found'				=> __( 'No portfolio items found', 'mboframework' ),
				'not_found_in_trash'	=> __( 'No portfolio items found in trash', 'mboframework' ),
				'parent_item_colon' 	=> ''
			),
			'description'			=> __( 'This is the portfolio post type', 'mboframework' ),
			'public'				=> true,
			'publicly_queryable'	=> true,
			'exclude_from_search'	=> false,
			'show_ui'				=> true,
			'query_var'				=> true,
			'menu_position'			=> 8,
			'menu_icon'				=> 'dashicons-portfolio', // use dashicons for menu icon: https://developer.wordpress.org/resource/dashicons/
			'rewrite'				=> array( 'slug' => 'portfolio', 'with_front' => false ),
			'has_archive'			=> true,
			'capability_type'		=> 'post',
			'hierarchical'			=> false,
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				'trackbacks',
				'custom-fields',
				'comments',
				'revisions',
				'sticky'
			)
		)
	);

	// Add post categories to portfolio post type
	// register_taxonomy_for_object_type( 'category', 'portfolio' );

	// Add post tags to portfolio post type
	// register_taxonomy_for_object_type( 'post_tag', 'portfolio' );

}
add_action( 'init', 'cpt_portfolio');


/**
 * Register the "Portfolio Categories" custom taxonomy
 * See http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
register_taxonomy( 'portfolio-categories',
	array('portfolio'),
	array('hierarchical'	=> true,
		'labels' => array(
			'name'				=> __( 'Portfolio Categories', 'mboframework' ),
			'singular_name'		=> __( 'Portfolio Category', 'mboframework' ),
			'search_items'		=> __( 'Search Portfolio Categories', 'mboframework' ),
			'all_items'			=> __( 'All Portfolio Categories', 'mboframework' ),
			'parent_item'		=> __( 'Parent Portfolio Category', 'mboframework' ),
			'parent_item_colon'	=> __( 'Parent Portfolio Category', 'mboframework' ),
			'edit_item'			=> __( 'Edit Portfolio Category', 'mboframework' ),
			'update_item'		=> __( 'Update Portfolio Category', 'mboframework' ),
			'add_new_item'		=> __( 'Add New Portfolio Category', 'mboframework' ),
			'new_item_name'		=> __( 'New Portfolio Category Name', 'mboframework' )
		),
		'show_admin_column'	=> true,
		'show_ui'			=> true,
		'query_var'			=> true,
		'rewrite'			=> array( 'slug' => 'portfolio-categories' ),
	)
);


/**
 * Register the custom tags
 * See http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
/*
register_taxonomy( 'custom_tag',
	array('custom_type'),
	array('hierarchical'	=> false,
		'labels' => array(
			'name' => __( 'Custom Tags', 'mboframework' ),
			'singular_name'		=> __( 'Custom Tag', 'mboframework' ),
			'search_items'		=> __( 'Search Custom Tags', 'mboframework' ),
			'all_items'			=> __( 'All Custom Tags', 'mboframework' ),
			'parent_item'		=> __( 'Parent Custom Tag', 'mboframework' ),
			'parent_item_colon'	=> __( 'Parent Custom Tag:', 'mboframework' ),
			'edit_item'			=> __( 'Edit Custom Tag', 'mboframework' ),
			'update_item'		=> __( 'Update Custom Tag', 'mboframework' ),
			'add_new_item'		=> __( 'Add New Custom Tag', 'mboframework' ),
			'new_item_name'		=> __( 'New Custom Tag Name', 'mboframework' )
		),
		'show_admin_column'	=> true,
		'show_ui'			=> true,
		'query_var'			=> true,
	)
);
*/
