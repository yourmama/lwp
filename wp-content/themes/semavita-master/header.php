<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html<?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <!--Pluging in bootstrap css -->
   <!--Сейчас бутсрап импортируется внутри style.css c gjvjom. @import-->
<!--<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">-->
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header" role="banner">
        <div class="row-counter">
            <div class="row" id="site-title-wrapper">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="hgroup">
                        <h1 class="site-title" style="text-align: center;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description" style="text-align: center;"><?php bloginfo( 'description' ); ?></h2>
                    </div>
                </div>
                <div class="col-sm-4"></div>

            </div>

        </div>

    


        <div>

            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false,
            'menu_class' => 'header-menu row', 'link_before' => '<div>', 'link_after' => '</div>')); ?>
            <script>
            (function (){
                $( ".header-menu li" ).addClass( "col-sm-4" );
            }());

            </script>
        </div><!-- #site-navigation -->

        <?php if ( get_header_image() ) : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
        <?php endif; ?>
    </header><!-- #masthead -->

    <div id="main" class="wrapper">