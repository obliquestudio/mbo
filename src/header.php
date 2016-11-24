<?php
/**
 * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 */
?>
<!DOCTYPE html>
<!--[if (IE 8)]> <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php wp_title(''); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- https://github.com/audreyr/favicon-cheat-sheet -->
    <!-- http://www.favicomatic.com/ -->
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

    <!-- Touch icon for iOS 2.0+ and Android 2.1+: -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon-152x152.png">

    <!-- IE 10 Metro tile icon -->
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/mstile-144x144.png">

    <!-- IE 11 Tile for Windows 8.1 Start Screen -->
    <meta name="application-name" content="<?php bloginfo('name'); ?>">
    <meta name="msapplication-tooltip" content="<?php bloginfo('description'); ?>">
    <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/assets/img/mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/assets/img/mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/assets/img/mstile-310x150.png">
    <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/assets/img/mstile-310x310.png">

    <?php // Wordpress head functions ?>
    <?php wp_head(); ?>

    <?php // Google Analytics ?>

</head>
<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">

        <header id="masthead" class="site-header" role="banner">

            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-container">
                            <span>Toggle navigation</span>
                        </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>" rel="home"><?php bloginfo('name'); ?></a>
                    </div>

                    <?php mbo_primary_nav(); ?>

                </div><!-- .container-fluid -->
            </nav><!-- .navbar -->

        </header><!-- .site-header -->
