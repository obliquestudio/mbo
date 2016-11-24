<?php
/**
 * Page builder configuration
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage WDS-Simple-Page-Builder
 * @link https://github.com/WebDevStudios/WDS-Simple-Page-Builder
 */


// Enable support for simple page builder and register areas
function mbo_setup_simple_page_builder() {

    add_theme_support( 'wds-simple-page-builder' );

    wds_page_builder_theme_support( array(
        'hide_options'    => 'disabled',                                // set to true to hide them completely
        'parts_dir'       => 'parts',                                   // directory the template parts are saved in
        'parts_prefix'    => 'part',                                    // the template part prefix, e.g. part-template.php
        'use_wrap'        => '',                                        // Whether to use a wrapper container. 'on' is TRUE
        'container'       => 'section',                                 // HTML container for Page Builder template parts
        'container_class' => '',                                        // can use multiple classes, separated by a space
        'post_types'      => array( 'page', 'project', 'team-member' ), // add any other supported post types here
    ) );

}
add_action( 'after_setup_theme', 'mbo_setup_simple_page_builder' );

// Filter to customise default page builder area name
function mbo_change_default_area_name( $name ) {
    $name = 'Content area';
    return $name;
}
add_filter( 'wds_page_builder_default_name_filter', 'mbo_change_default_area_name' );


// Filter to customise default page builder area description
function mbo_change_default_area_description( $description ) {
    $description = '';
    return $description;
}
add_filter( 'wds_page_builder_default_description_filter', 'mbo_change_default_area_description' );
