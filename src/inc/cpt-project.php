<?php
/**
 * Project Custom Post Type
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */

/**
 * Register the "Project" custom post type
 * See http://codex.wordpress.org/Function_Reference/register_post_type
 */
function cpt_project() {

	register_post_type( 'project',
		array(
			'labels' => array(
				'name'					=> __( 'Projects', 'mboframework' ),
				'singular_name'			=> __( 'Project', 'mboframework' ),
				'all_items'				=> __( 'All Projects', 'mboframework' ),
				'add_new'				=> __( 'Add New', 'mboframework' ),
				'add_new_item'			=> __( 'Add New Project', 'mboframework' ),
				'edit'					=> __( 'Edit', 'mboframework' ),
				'edit_item'				=> __( 'Edit Project', 'mboframework' ),
				'new_item'				=> __( 'Add New Project', 'mboframework' ),
				'view_item'				=> __( 'View Project', 'mboframework' ),
				'search_items'			=> __( 'Search Projects', 'mboframework' ),
				'not_found'				=> __( 'No projects found', 'mboframework' ),
				'not_found_in_trash'	=> __( 'No projects found in trash', 'mboframework' ),
				'parent_item_colon' 	=> ''
			),
			'description'			=> __( 'This is the project post type', 'mboframework' ),
			'public'				=> true,
			'publicly_queryable'	=> true,
			'exclude_from_search'	=> false,
			'show_ui'				=> true,
			'query_var'				=> true,
			'menu_position'			=> 7,
			'menu_icon'				=> 'dashicons-portfolio', // use dashicons for menu icon: https://developer.wordpress.org/resource/dashicons/
			'rewrite'				=> array( 'slug' => 'project', 'with_front' => false ),
			'has_archive'			=> true,
			'capability_type'		=> 'post',
			'hierarchical'			=> false,
			'supports' => array(
				'title',
                'editor',
				'thumbnail',
				'page-attributes'
			)
		)
	);

}
add_action( 'init', 'cpt_project');

/**
 * Register the "Project Categories" custom taxonomy
 * See http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
// register_taxonomy( 'project-category',
// 	array('project'),
// 	array('hierarchical'	=> true,
// 		'labels' => array(
// 			'name'				=> __( 'Project Categories', 'mboframework' ),
// 			'singular_name'		=> __( 'Project Category', 'mboframework' ),
// 			'search_items'		=> __( 'Search Project Categories', 'mboframework' ),
// 			'all_items'			=> __( 'All Project Categories', 'mboframework' ),
// 			'parent_item'		=> __( 'Parent Project Category', 'mboframework' ),
// 			'parent_item_colon'	=> __( 'Parent Project Category', 'mboframework' ),
// 			'edit_item'			=> __( 'Edit Project Category', 'mboframework' ),
// 			'update_item'		=> __( 'Update Project Category', 'mboframework' ),
// 			'add_new_item'		=> __( 'Add New Project Category', 'mboframework' ),
// 			'new_item_name'		=> __( 'New Project Category Name', 'mboframework' )
// 		),
// 		'show_admin_column'	=> true,
// 		'show_ui'			=> true,
// 		'query_var'			=> true,
// 		'rewrite'			=> array( 'slug' => 'project-category' ),
// 	)
// );
