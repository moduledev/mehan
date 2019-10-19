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
    <title>Construction | Canvas</title>
    <?php wp_head(); ?>
</head>

<body class="stretched">

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
                    <ul>
                        <li><a href="index.html">Locations</a>
                            <ul>
                                <li><a href="#">San Francisco</a></li>
                                <li><a href="#">London</a></li>
                                <li><a href="#">Amsterdam</a></li>
                            </ul>
                        </li>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
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

                <a href="index.html" class="retina-logo"><img src="demos/construction/images/logo@2x.png"
                                                              alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <ul class="header-extras">
                <li>
                    <i class="i-plain icon-call nomargin"></i>
                    <div class="he-text">
                        Call Us
                        <span>(91) 22 54215821</span>
                    </div>
                </li>
                <li>
                    <i class="i-plain icon-line2-envelope nomargin"></i>
                    <div class="he-text">
                        Email Us
                        <span>info@canvas.com</span>
                    </div>
                </li>
                <li>
                    <i class="i-plain icon-line-clock nomargin"></i>
                    <div class="he-text">
                        We'are Open
                        <span>Mon - Sat, 10AM to 6PM</span>
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
                    <!--                    <ul>-->
                    <!--                        <li class="current"><a href="#">-->
                    <!--                                <div>Home</div>-->
                    <!--                            </a></li>-->
                    <!--                        <li><a href="demos/construction/services.html">-->
                    <!--                                <div>What we do</div>-->
                    <!--                            </a>-->
                    <!--                            <ul>-->
                    <!--                                <li><a href="#">-->
                    <!--                                        <div>Housing Management</div>-->
                    <!--                                    </a></li>-->
                    <!--                                <li><a href="#">-->
                    <!--                                        <div>Construction Planning</div>-->
                    <!--                                    </a></li>-->
                    <!--                                <li><a href="#">-->
                    <!--                                        <div>Green Homes</div>-->
                    <!--                                    </a></li>-->
                    <!--                                <li><a href="#">-->
                    <!--                                        <div>Architecture Design</div>-->
                    <!--                                    </a></li>-->
                    <!--                                <li><a href="#">-->
                    <!--                                        <div>Interior Planning</div>-->
                    <!--                                    </a></li>-->
                    <!--                            </ul>-->
                    <!--                        </li>-->
                    <!--                        <li><a href="demos/construction/about-us.html">-->
                    <!--                                <div>About Us</div>-->
                    <!--                            </a></li>-->
                    <!--                        <li><a href="demos/construction/projects.html">-->
                    <!--                                <div>Projects</div>-->
                    <!--                            </a>-->
                    <!--                            <ul>-->
                    <!--                                <li><a href="demos/construction/projects-2.html">-->
                    <!--                                        <div>2 Columns</div>-->
                    <!--                                    </a></li>-->
                    <!--                                <li><a href="demos/construction/projects-3.html">-->
                    <!--                                        <div>3 Columns</div>-->
                    <!--                                    </a></li>-->
                    <!--                                <li><a href="demos/construction/projects.html">-->
                    <!--                                        <div>4 Columns</div>-->
                    <!--                                    </a></li>-->
                    <!--                                <li>-->
                    <!--                                    <a href="demos/construction/projects-5.html">-->
                    <!--                                        <div class="d-flex flex-row justify-content-between ">-->
                    <!--                                            <div class="thumb_link_img">-->
                    <!--                                                <img src="https://via.placeholder.com/35/FF0000/FFFFFF?Text=Down.com" alt="">-->
                    <!--                                            </div>-->
                    <!--                                            <div class="t">qweqwe qwe q eqw eqw eqw eqw eq </div>-->
                    <!--                                        </div>-->
                    <!--                                    </a>-->
                    <!--                                </li>-->
                    <!--                            </ul>-->
                    <!--                        </li>-->
                    <!--                        <li><a href="demos/construction/investors.html">-->
                    <!--                                <div>Investors</div>-->
                    <!--                            </a></li>-->
                    <!--                        <li><a href="demos/construction/blog.html">-->
                    <!--                                <div>News</div>-->
                    <!--                            </a></li>-->
                    <!--                        <li><a href="demos/construction/careers.html">-->
                    <!--                                <div>Careers</div>-->
                    <!--                            </a></li>-->
                    <!--                        <li><a href="demos/construction/contact.html">-->
                    <!--                                <div>Contact</div>-->
                    <!--                            </a></li>-->
                    <!--                    </ul>-->

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value=""
                                   placeholder="Type &amp; Hit Enter..">
                        </form>
                    </div><!-- #top-search end -->

                </div>

            </nav><!-- #primary-menu end -->

        </div>

    </header><!-- #header end -->