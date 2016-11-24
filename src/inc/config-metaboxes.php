<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @package  CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */


/**
 * Project meta
 */

add_action( 'cmb2_admin_init', 'mbo_project_meta' );
function mbo_project_meta(){

    $prefix = '_mbo_project_';

    $project_meta = new_cmb2_box( array(
        'id'           => $prefix . 'meta',
        'title'        => __( 'Project details', 'cmb2' ),
        'object_types' => array( 'project' ),
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true
    ) );

    $project_meta->add_field( array(
        'id'           => $prefix . 'is_featured',
        'name'         => __( 'Featured project', 'cmb2' ),
        'desc'         => __( 'Check this box to feature this project', 'cmb2' ),
        'type'         => 'checkbox'
    ) );

    $project_meta->add_field( array(
        'id'           => $prefix . 'feature_copy',
        'name'         => __( 'Feature copy', 'cmb2' ),
        'desc'         => __( 'Enter the text that appears on the homepage slide and the top of the project page', 'cmb2' ),
        'type'         => 'wysiwyg',
        'options'      => array( 'textarea_rows' => 8 )
    ) );

}


/**
 * Team page meta
 */

add_action( 'cmb2_admin_init', 'mbo_team_member_meta' );
function mbo_team_member_meta(){

    $prefix = '_mbo_team_member_';

    $team_member_meta = new_cmb2_box( array(
        'id'           => $prefix . 'meta',
        'title'        => __( 'Team member details', 'cmb2' ),
        'object_types' => array( 'team-member' ),
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true,
    ) );

    $team_member_meta->add_field( array(
        'id'           => $prefix . 'job_role',
        'name'         => __( 'Job role', 'cmb2' ),
        'desc'         => __( 'Enter the job role for this team member', 'cmb2' ),
        'type'         => 'text',
    ) );

    $team_member_meta->add_field( array(
        'id'           => $prefix . 'email',
        'name'         => __( 'Email', 'cmb2' ),
        'desc'         => __( 'Enter the email for this team member', 'cmb2' ),
        'type'         => 'text_email',
    ) );

    $team_member_meta->add_field( array(
        'id'           => $prefix . 'twitter',
        'name'         => __( 'Twitter', 'cmb2' ),
        'desc'         => __( 'Enter the Twitter url for this team member', 'cmb2' ),
        'type'         => 'text_url',
    ) );

    $team_member_meta->add_field( array(
        'id'           => $prefix . 'linkedin',
        'name'         => __( 'linkedin', 'cmb2' ),
        'desc'         => __( 'Enter the LinkedIn url for this team member', 'cmb2' ),
        'type'         => 'text_url',
    ) );

}


/**
 * Testimonial meta
 */

add_action( 'cmb2_admin_init', 'mbo_testimonial_meta' );
function mbo_testimonial_meta(){

    $prefix = '_mbo_testimonial_';

    $testimonial_meta = new_cmb2_box( array(
        'id'           => $prefix . 'meta',
        'title'        => __( 'Testimonial details', 'cmb2' ),
        'object_types' => array( 'testimonial' ),
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true,
    ) );

    $testimonial_meta->add_field( array(
        'id'           => $prefix . 'job_role',
        'name'         => __( 'Job role', 'cmb2' ),
        'desc'         => __( 'Enter the job role for the person giving this testimonial', 'cmb2' ),
        'type'         => 'text',
    ) );

    $testimonial_meta->add_field( array(
        'id'           => $prefix . 'company',
        'name'         => __( 'Company', 'cmb2' ),
        'desc'         => __( 'Enter the company for the person giving this testimonial', 'cmb2' ),
        'type'         => 'text',
    ) );

}

