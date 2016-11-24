<?php
/**
 * Include and setup theme options.
 *
 * @package  CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2-Snippet-Library/tree/master/options-and-settings-pages
 */
class mbo_Admin {

    /**
     * Option key, and option page slug
     * @var string
     */
    private $key = 'mbo_options';

    /**
     * Options page metabox id
     * @var string
     */
    private $metabox_id = 'mbo_options_metabox';

    /**
     * Options Page title
     * @var string
     */
    protected $title = '';

    /**
     * Options Page hook
     * @var string
     */
    protected $options_page = '';

    /**
     * Holds an instance of the object
     *
     * @var _mbo_Admin
     **/
    private static $instance = null;

    /**
     * Constructor
     * @since 0.1.0
     */
    private function __construct() {
        // Set our title
        $this->title = __( 'Site Options', 'cmb2' );
    }

    /**
     * Returns the running object
     *
     * @return _mbo_Admin
     **/
    public static function get_instance() {
        if( is_null( self::$instance ) ) {
            self::$instance = new self();
            self::$instance->hooks();
        }
        return self::$instance;
    }

    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks() {
        add_action( 'admin_init', array( $this, 'init' ) );
        add_action( 'admin_menu', array( $this, 'add_options_page' ) );
        add_action( 'cmb2_admin_init', array( $this, 'add_options_page_metabox' ) );
    }


    /**
     * Register our setting to WP
     * @since  0.1.0
     */
    public function init() {
        register_setting( $this->key, $this->key );
    }

    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page() {
        $this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );

        // Include CMB CSS in the head to avoid FOUC
        add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
    }

    /**
     * Admin page markup. Mostly handled by CMB2
     * @since  0.1.0
     */
    public function admin_page_display() {
        ?>
        <div class="wrap cmb2-options-page <?php echo $this->key; ?>">
            <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
            <?php cmb2_metabox_form( $this->metabox_id, $this->key ); ?>
        </div>
        <?php
    }

    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_metabox() {

        // hook in our save notices
        add_action( "cmb2_save_options-page_fields_{$this->metabox_id}", array( $this, 'settings_notices' ), 10, 2 );

        $prefix = '_mbo_options_';

        $mbo_options = new_cmb2_box( array(
            'id'          => $this->metabox_id,
            'hookup'      => false,
            'cmb_styles'  => false,
            'show_on'     => array (
                // These are important, don't remove
                'key'         => 'options-page',
                'value'       => array( $this->key, )
            )
        ) );

        $mbo_options->add_field( array(
            'id'          => $prefix . 'legal_copy',
            'name'        => __( 'Legal copy', 'cmb2' ),
            'description' => __( 'Enter the legal copy that appears in the footer', 'cmb2' ),
            'type'        => 'wysiwyg',
            'options'     => array(
                'textarea_rows' => 8,
                'media_buttons' => false // show insert/upload button(s)
            )
        ) );

        $mbo_options->add_field( array(
            'id'          => $prefix . 'contact_title',
            'name'        => __( 'Contact details', 'cmb2' ),
            'type'        => 'title'
        ) );

        $mbo_options->add_field( array(
            'id'          => $prefix . 'address',
            'name'        => __( 'Address', 'cmb2' ),
            'description' => __( 'Enter your address', 'cmb2' ),
            'type'        => 'wysiwyg',
            'options'     => array(
                'textarea_rows' => 8,
                'media_buttons' => false // show insert/upload button(s)
            )
        ) );

        $mbo_options->add_field( array(
            'id'          => $prefix . 'phone',
            'name'        => __( 'Phone', 'cmb2' ),
            'desc'        => __( 'Enter your phone number', 'cmb2' ),
            'type'        => 'text'
        ) );

        $mbo_options->add_field( array(
            'id'          => $prefix . 'email',
            'name'        => __( 'Email', 'cmb2' ),
            'description' => __( 'Enter your email address', 'cmb2' ),
            'type'        => 'text_email'
        ) );

        $mbo_options->add_field( array(
            'id'          => $prefix . 'directions_link',
            'name'        => __( 'Directions', 'cmb2' ),
            'description' => __( 'Enter the directions link', 'cmb2' ),
            'type'        => 'text_url'
        ) );

        $mbo_options->add_field( array(
            'id'          => $prefix . 'socials_title',
            'name'        => __( 'Socials', 'cmb2' ),
            'type'        => 'title'
        ) );

        $mbo_options->add_field( array(
            'id'          => $prefix . 'socials_twitter',
            'name'        => __( 'Twitter', 'cmb2' ),
            'description' => __( 'Enter your Twitter url', 'cmb2' ),
            'type'        => 'text_url'
        ) );

        $mbo_options->add_field( array(
            'id'          => $prefix . 'socials_linkedin',
            'name'        => __( 'LinkedIn', 'cmb2' ),
            'description' => __( 'Enter your LinkedIn url', 'cmb2' ),
            'type'        => 'text_url'
        ) );

        $mbo_options->add_field( array(
            'id'          => $prefix . 'socials_instagram',
            'name'        => __( 'Instagram', 'cmb2' ),
            'description' => __( 'Enter your Instagram url', 'cmb2' ),
            'type'        => 'text_url'
        ) );

        $mbo_options->add_field( array(
            'id'          => $prefix . 'socials_behance',
            'name'        => __( 'Behance', 'cmb2' ),
            'description' => __( 'Enter your Behance url', 'cmb2' ),
            'type'        => 'text_url'
        ) );

        $mbo_options->add_field( array(
            'id'          => $prefix . 'socials_facebook',
            'name'        => __( 'Facebook', 'cmb2' ),
            'description' => __( 'Enter your Facebook url', 'cmb2' ),
            'type'        => 'text_url'
        ) );


    }

    /**
     * Register settings notices for display
     *
     * @since  0.1.0
     * @param  int   $object_id Option key
     * @param  array $updated   Array of updated fields
     * @return void
     */
    public function settings_notices( $object_id, $updated ) {
        if ( $object_id !== $this->key || empty( $updated ) ) {
            return;
        }

        add_settings_error( $this->key . '-notices', '', __( 'Settings updated.', 'myprefix' ), 'updated' );
        settings_errors( $this->key . '-notices' );
    }

    /**
     * Public getter method for retrieving protected/private variables
     * @since  0.1.0
     * @param  string  $field Field to retrieve
     * @return mixed          Field value or exception is thrown
     */
    public function __get( $field ) {
        // Allowed fields to retrieve
        if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
            return $this->{$field};
        }

        throw new Exception( 'Invalid property: ' . $field );
    }

}

/**
 * Helper function to get/return the mbo_Admin object
 * @since  0.1.0
 * @return mbo_Admin object
 */
function mbo_Admin() {
    return mbo_Admin::get_instance();
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function mbo_get_option( $key = '' ) {
    return cmb2_get_option( mbo_Admin()->key, $key );
}

// Get it started
mbo_Admin();
