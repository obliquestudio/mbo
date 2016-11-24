<?php
/**
 * Team member Custom Post Type
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */

/**
 * Register the "Team member" custom post type
 * See http://codex.wordpress.org/Function_Reference/register_post_type
 */
function cpt_team_member() {

    register_post_type( 'team-member',
        array(
            'labels' => array(
                'name'                  => __( 'Team', 'mboframework' ),
                'singular_name'         => __( 'Team Member', 'mboframework' ),
                'all_items'             => __( 'All Team Members', 'mboframework' ),
                'add_new'               => __( 'Add New', 'mboframework' ),
                'add_new_item'          => __( 'Add New Team Member', 'mboframework' ),
                'edit'                  => __( 'Edit', 'mboframework' ),
                'edit_item'             => __( 'Edit Team Member', 'mboframework' ),
                'new_item'              => __( 'Add New Team Member', 'mboframework' ),
                'view_item'             => __( 'View Team Member', 'mboframework' ),
                'search_items'          => __( 'Search Team Members', 'mboframework' ),
                'not_found'             => __( 'No team members found', 'mboframework' ),
                'not_found_in_trash'    => __( 'No team members found in trash', 'mboframework' ),
                'parent_item_colon'     => ''
            ),
            'description'           => __( 'This is the team member post type', 'mboframework' ),
            'public'                => false,
            'publicly_queryable'    => true,
            'exclude_from_search'   => false,
            'show_ui'               => true,
            'query_var'             => true,
            'menu_position'         => 8,
            'menu_icon'             => 'dashicons-groups', // use dashicons for menu icon: https://developer.wordpress.org/resource/dashicons/
            'rewrite'               => array( 'slug' => 'team-member', 'with_front' => false ),
            'has_archive'           => false,
            'capability_type'       => 'post',
            'hierarchical'          => false,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'page-attributes'
            )
        )
    );

}
add_action( 'init', 'cpt_team_member');
