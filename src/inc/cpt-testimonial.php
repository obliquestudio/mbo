<?php
/**
 * Testimonial Custom Post Type
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */

/**
 * Register the "Testimonial" custom post type
 * See http://codex.wordpress.org/Function_Reference/register_post_type
 */
function cpt_testimonial() {

    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name'                  => __( 'Testimonials', 'mboframework' ),
                'singular_name'         => __( 'Testimonial', 'mboframework' ),
                'all_items'             => __( 'All Testimonials', 'mboframework' ),
                'add_new'               => __( 'Add New', 'mboframework' ),
                'add_new_item'          => __( 'Add New Testimonial', 'mboframework' ),
                'edit'                  => __( 'Edit', 'mboframework' ),
                'edit_item'             => __( 'Edit Testimonial', 'mboframework' ),
                'new_item'              => __( 'Add New Testimonial', 'mboframework' ),
                'view_item'             => __( 'View Testimonial', 'mboframework' ),
                'search_items'          => __( 'Search Testimonials', 'mboframework' ),
                'not_found'             => __( 'No testimonials found', 'mboframework' ),
                'not_found_in_trash'    => __( 'No testimonials found in trash', 'mboframework' ),
                'parent_item_colon'     => ''
            ),
            'description'           => __( 'This is the testimonial post type', 'mboframework' ),
            'public'                => false,
            'publicly_queryable'    => true,
            'exclude_from_search'   => false,
            'show_ui'               => true,
            'query_var'             => true,
            'menu_position'         => 9,
            'menu_icon'             => 'dashicons-format-quote', // use dashicons for menu icon: https://developer.wordpress.org/resource/dashicons/
            'rewrite'               => array( 'slug' => 'testimonial', 'with_front' => false ),
            'has_archive'           => false,
            'capability_type'       => 'post',
            'hierarchical'          => false,
            'supports' => array(
                'title',
                'editor'
            )
        )
    );

}
add_action( 'init', 'cpt_testimonial');
