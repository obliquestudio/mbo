<?php
/**
 * Page builder fields configuration
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage WDS-Simple-Page-Builder
 * @link https://github.com/WebDevStudios/WDS-Simple-Page-Builder/wiki/Adding-custom-fields-to-Page-Builder-template-parts
 */

class MBO_Page_Builder_Fields {

    /**
     * Constructor
     *
     * @since 0.1.0
     * @return  null
     */
    public function __construct() {
        $this->hooks();
    }

    /**
     * Initiate our hooks
     *
     * @since 0.1.0
     * @return void
     */
    public function hooks() {

        add_filter( 'wds_page_builder_fields_call-to-action', array( $this, 'part_call_to_action_fields' ) );
        add_filter( 'wds_page_builder_fields_clients', array( $this, 'part_clients_fields' ) );
        add_filter( 'wds_page_builder_fields_content-left-image-right', array( $this, 'part_content_left_image_right_fields' ) );
        add_filter( 'wds_page_builder_fields_image-full-width', array( $this, 'part_image_full_width_fields' ) );
        add_filter( 'wds_page_builder_fields_image-grid', array( $this, 'part_image_grid_fields' ) );
        add_filter( 'wds_page_builder_fields_image-left-content-right', array( $this, 'part_image_left_content_right_fields' ) );
        add_filter( 'wds_page_builder_fields_image-slider', array( $this, 'part_image_slider_fields' ) );
        add_filter( 'wds_page_builder_fields_image', array( $this, 'part_image_fields' ) );
        add_filter( 'wds_page_builder_fields_testimonial', array( $this, 'part_testimonial_fields' ) );

    }

    /**
     * Add custom fields to call to action part
     *
     * @param $fields
     *
     * @return array
     */
    public function part_call_to_action_fields( $fields ) {

        $prefix = '_mbo_part_call_to_action_';

        $new_fields = array(
            array(
                'id'               => $prefix . 'content',
                'name'             => __( 'Content', 'cmb2' ),
                'desc'             => __( 'Enter the call to action message content', 'cmb2' ),
                'type'             => 'wysiwyg',
                'options'          => array( 'textarea_rows' => 8, ),
            ),
            array(
                'id'               => $prefix . 'btn_text',
                'name'             => __( 'Button text', 'cmb2' ),
                'desc'             => __( 'Enter the button text', 'cmb2' ),
                'type'             => 'text',
            ),
            array(
                'id'               => $prefix . 'btn_link_page_id',
                'name'             => __( 'Target page', 'cmb2' ),
                'desc'             => __( 'Select the page this button links to', 'cmb2' ),
                'type'             => 'select',
                'show_option_none' => true,
                'options'          => $this->get_page_ids()
            )
        );
        return array_merge( $fields, $new_fields );
    }

    /**
     * Add custom fields to clients part
     *
     * @param $fields
     *
     * @return array
     */
    public function part_clients_fields( $fields ) {

        $prefix = '_mbo_part_clients_';

        $new_fields = array(
            array(
                'id'           => $prefix . 'logos',
                'name'         => __( 'Logos', 'cmb2' ),
                'desc'         => __( 'Upload client logos', 'cmb2' ),
                'type'         => 'file_list',
                'preview_size' => array( 100, 100 )
            )

        );
        return array_merge( $fields, $new_fields );
    }

    /**
     * Add custom fields to content image combo part
     *
     * @param $fields
     *
     * @return array
     */
    public function part_content_left_image_right_fields( $fields ) {

        $prefix = '_mbo_part_content_left_image_right_';

        $new_fields = array(
            array(
                'id'      => $prefix . 'content',
                'name'    => __( 'Content', 'cmb2' ),
                'desc'    => __( 'Add the content', 'cmb2' ),
                'type'    => 'wysiwyg',
                'options' => array( 'textarea_rows' => 8 ),
            ),
            array(
                'id'      => $prefix . 'image',
                'name'    => __( 'Image', 'cmb2' ),
                'desc'    => __( 'Upload an image', 'cmb2' ),
                'type'    => 'file',
                'options' => array(
                    'url'     => false,
                )
            )
        );

        return array_merge( $fields, $new_fields );
    }

    /**
     * Add custom fields to full width image part
     *
     * @param $fields
     *
     * @return array
     */
    public function part_image_full_width_fields( $fields ) {

        $prefix = '_mbo_part_image_full_width_';

        $new_fields = array(
            array(
                'id'      => $prefix . 'image',
                'name'    => __( 'Image', 'cmb2' ),
                'desc'    => __( 'Upload image', 'cmb2' ),
                'type'    => 'file',
                'options' => array(
                    'url'     => false,
                )
            )
        );

        return array_merge( $fields, $new_fields );
    }

    /**
     * Add custom fields to image grid part
     *
     * @param $fields
     *
     * @return array
     */
    public function part_image_grid_fields( $fields ) {

        $prefix = '_mbo_part_image_grid_';

        $new_fields = array(
            array(
                'id'           => $prefix . 'images',
                'name'         => __( 'Images', 'cmb2' ),
                'desc'         => __( 'Upload images', 'cmb2' ),
                'type'         => 'file_list',
                'preview_size' => array( 100, 100 )
            )

        );
        return array_merge( $fields, $new_fields );
    }

    /**
     * Add custom fields to content image combo part
     *
     * @param $fields
     *
     * @return array
     */
    public function part_image_left_content_right_fields( $fields ) {

        $prefix = '_mbo_part_image_left_content_right_';

        $new_fields = array(
            array(
                'id'      => $prefix . 'image',
                'name'    => __( 'Image', 'cmb2' ),
                'desc'    => __( 'Upload an image', 'cmb2' ),
                'type'    => 'file',
            ),
            array(
                'id'      => $prefix . 'content',
                'name'    => __( 'Content', 'cmb2' ),
                'desc'    => __( 'Add the content', 'cmb2' ),
                'type'    => 'wysiwyg',
                'options' => array( 'textarea_rows' => 8 ),
            )
        );

        return array_merge( $fields, $new_fields );
    }

    /**
     * Add custom fields to image slider part
     *
     * @param $fields
     *
     * @return array
     */
    public function part_image_slider_fields( $fields ) {

        $prefix = '_mbo_part_image_slider_';

        $new_fields = array(
            array(
                'id'           => $prefix . 'images',
                'name'         => __( 'Images', 'cmb2' ),
                'desc'         => __( 'Upload images', 'cmb2' ),
                'type'         => 'file_list',
                'preview_size' => array( 100, 100 )
            )

        );
        return array_merge( $fields, $new_fields );
    }

    /**
     * Add custom fields to image part
     *
     * @param $fields
     *
     * @return array
     */
    public function part_image_fields( $fields ) {

        $prefix = '_mbo_part_image_';

        $new_fields = array(
            array(
                'id'      => $prefix . 'image',
                'name'    => __( 'Image', 'cmb2' ),
                'desc'    => __( 'Upload image', 'cmb2' ),
                'type'    => 'file',
                'options' => array(
                    'url'     => false,
                )
            )
        );

        return array_merge( $fields, $new_fields );
    }

    /**
     * Add custom fields to testimonial Part
     *
     * @param $fields
     *
     * @return array
     */
    public function part_testimonial_fields( $fields ) {

        $prefix = '_mbo_part_testimonial_';

        $new_fields = array(
            array(
                'id'               => $prefix . 'id',
                'name'             => __( 'Testimonial', 'cmb2' ),
                'desc'             => __( 'Please select a testimonial to display', 'cmb2' ),
                'type'             => 'select',
                'show_option_none' => true,
                'options'          => $this->get_testimonial_ids()
            )
        );

        return array_merge( $fields, $new_fields );
    }

    /**
     * Return an array of testimonial post id / post title pairs
     *
     * @param $fields
     *
     * @return array
     */
    public function get_page_ids() {

        $args = array(
            'post_type'   => 'page',
            'numberposts' => 500,
            'orderby'     => 'title',
            'order'       => 'ASC',
        );

        $posts = get_posts( $args );

        if ( $posts ) {
            foreach ( $posts as $post ) {
                $post_options[ $post->ID ] = $post->post_title;
            }
        } else {
            $post_options = null;
        }

        return $post_options;
    }

    /**
     * Return an array of testimonial post id / post title pairs
     *
     * @param $fields
     *
     * @return array
     */
    public function get_testimonial_ids() {

        $args = array(
            'post_type'   => 'testimonial',
            'numberposts' => 500,
            'orderby'     => 'title',
            'order'       => 'ASC',
        );

        $posts = get_posts( $args );

        if ( $posts ) {
            foreach ( $posts as $post ) {
                $post_options[ $post->ID ] = $post->post_title;
            }
        } else {
            $post_options = null;
        }

        return $post_options;

    }

}

$fields_object = new MBO_Page_Builder_Fields;
