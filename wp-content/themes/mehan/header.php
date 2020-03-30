<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mehan
 */

?>

<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700"
          rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>


    <!-- Document Title
    ============================================= -->
    <title>Meхан - <?php echo single_post_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('stretched');?>>

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar">

        <div class="container clearfix">

            <div class="col_half nobottommargin clearfix">

                <!-- Top Social
                ============================================= -->
                <div id="top-social">
                    <ul>
                        <li><a href="#" class="si-facebook"><span class="ts-icon"><i
                                            class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a>
                        </li>
                        <li><a href="#" class="si-instagram"><span class="ts-icon"><i
                                            class="icon-instagram2"></i></span><span
                                        class="ts-text">Instagram</span></a>
                        </li>
                    </ul>

                </div><!-- #top-social end -->

            </div>

            <div class="col_half fright col_last clearfix nobottommargin">

                <!-- Top Links
                ============================================= -->
                <div class="top-links">
                    <ul class="d-flex"><?php pll_the_languages();?></ul>

                </div><!-- .top-links end -->

            </div>

        </div>

    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id="header" class="sticky-style-2">

        <div class="container clearfix">

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <?php $logo = get_custom_logo(); ?>
                <?php if ($logo): ?>
                    <?php
                    $custom_logo__url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full'); ?>
                    <a class="standard-logo" href="<?php echo esc_url(home_url('/')); ?>"><img
                                src="<?php echo $custom_logo__url[0]; ?>" alt=""></a>
                <?php else: ?>
                    <a href="#"><img src="" alt=""></a>
                <?php endif; ?>
            </div><!-- #logo end -->
            <?php  dynamic_sidebar( 'sidebar-2' ); ?>

            <ul class="header-extras">

                <li>
                    <i class="i-plain icon-line2-envelope nomargin"></i>
                    <div class="he-text">
                        Email
                        <span><?php bloginfo('admin_email')?></span>
                    </div>
                </li>
                <li>
                    <i class="i-plain icon-line-clock nomargin"></i>
                    <div class="he-text">
                        <?php _e( 'We are opened', 'mehan' ); ?>
                        <span>Пн - Сб, 10:00 to 18:00</span>
                    </div>
                </li>
            </ul>

        </div>

        <div id="header-wrap">

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="with-arrows style-2 center">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                    <?php wp_nav_menu(
                        array(
                            'container' => '',
                            'menu_class' => '',
                            'theme_location' => 'primary',
                            'walker' => new Walker_Nav_Primary(),
                        )
                    ); ?>

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search"  class="header-search">
                        <a href="#" id="top-search-trigger" class="header-search__close"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <?php get_search_form(); ?>
                    </div><!-- #top-search end -->

                </div>

            </nav><!-- #primary-menu end -->

        </div>

    </header><!-- #header end -->

