<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #page div elements.
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */
?>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php if ( is_active_sidebar( 'footer-widget-1' ) || is_active_sidebar( 'footer-widget-2' ) || is_active_sidebar( 'footer-widget-3' ) || is_active_sidebar( 'footer-widget-4' ) ) : ?>

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

			<?php endif; ?>

            <div id="sub-footer" class="container-fluid">
                <div class="footer-inner row">

                    <nav role="navigation">
                        <?php mbo_sub_footer_nav(); ?>
                    </nav>

                    <span class="credit">
                        <a href="<?php echo esc_url( 'http://www.obliquestudio.co.uk/' ); ?>" target="_blank">OBL<span class="red">/</span>QUE</a>
                    </span>

                </div><!-- .footer-inner -->
            </div><!-- #sub-footer -->

        </footer><!-- .site-footer -->

	</div><!-- .site -->

	<?php wp_footer(); ?>

</body>
</html>