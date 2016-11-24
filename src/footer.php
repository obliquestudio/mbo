<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #page div elements.
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */
?>

        <footer id="colophon" class="site-footer" role="contentinfo">

            <div id="main-footer" class="container-fluid">
                <div class="footer-inner row">

                <?php if ( is_active_sidebar( 'footer-widget-1') ) : ?>
                    <div class="col-md-3">
                        <?php dynamic_sidebar( 'footer-widget-1' ); ?>
                    </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-widget-2') ) : ?>
                    <div class="col-md-3">
                        <?php dynamic_sidebar( 'footer-widget-2' ); ?>
                    </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-widget-3') ) : ?>
                    <div class="col-md-3">
                        <?php dynamic_sidebar( 'footer-widget-3' ); ?>
                    </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-widget-4') ) : ?>
                    <div class="col-md-3">
                        <?php dynamic_sidebar( 'footer-widget-4' ); ?>
                    </div>
                <?php endif; ?>

                </div><!-- .footer-inner -->
            </div><!-- #main-footer -->

            <div id="sub-footer" class="container-fluid">
                <div class="footer-inner">

                    <?php mbo_sub_footer_nav(); ?>

                    <span class="credit">
                    <?php
                        $url = 'http://www.obliquestudio.co.uk/';
                        $link = sprintf( wp_kses( __( 'Site by <a href="%s" target="_blank">Oblique</a>', 'mboframework' ), array(  'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( $url ) );
                        echo $link;
                    ?>
                    </span>

                </div><!-- .footer-inner -->
            </div><!-- #sub-footer -->

        </footer><!-- .site-footer -->

    </div><!-- .site -->

    <?php wp_footer(); ?>

</body>
</html>
