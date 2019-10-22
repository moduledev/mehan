<?php
/*
Template Name: Main-Zapchasti
*/
?>
<?php get_header(); ?>


<section id="page-title" class="nobg">

    <div class="container clearfix">
        <h2> <?php echo single_post_title(); ?></h2>
        <span>
                             <?php
                             $page = get_post(get_queried_object_id());
                             echo $page->post_excerpt; ?>
                        </span>
        <?php custom_breadcrumbs(); ?>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container">

            <div class="row">
                <?php
                $menu = wp_get_nav_menu_items('header_menu');
                foreach ($menu as $element) {
                    if ($element->menu_item_parent != 0) {
                        ; ?>
                        <div class="col-lg-4 mb-4">
                            <div class="flip-card text-center">
                                <div class="flip-card-front dark"
                                     style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($element->object_id)); ?>)">
                                    <div class="flip-card-inner">
                                        <div class="card nobg noborder text-center">
                                            <div class="card-body">
                                                <h3 class="card-title"><?php echo $element->title ?></h3>
                                                <?php
                                                $post = get_post($element->object_id);
                                                $content = apply_filters('the_content', $post->post_excerpt);
                                                echo $content;; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back bg-danger no-after">
                                    <div class="flip-card-inner">
                                        <p class="mb-2 text-white">Лучшее предложение от компании Конус ПК.</p>
                                        <button type="button" class="btn btn-outline-light mt-2"><a
                                                    href="<?php echo $element->url; ?>">Далее</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }
                }; ?>

            </div>
        </div>
    </div>

</section><!-- #content end -->

<!-- Footer
============================================= -->
<footer id="footer" class="dark">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_two_third">

                <div class="widget clearfix">

                    <img src="images/footer-widget-logo.png" alt="" class="alignleft"
                         style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">

                    <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong>
                        Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this
                        template offers.</p>

                    <div class="line" style="margin: 30px 0;"></div>

                    <div class="row">

                        <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                            <ul>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Forums</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                            <ul>
                                <li><a href="#">Corporate</a></li>
                                <li><a href="#">Agency</a></li>
                                <li><a href="#">eCommerce</a></li>
                                <li><a href="#">Personal</a></li>
                                <li><a href="#">One Page</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                            <ul>
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Wedding</a></li>
                                <li><a href="#">App Showcase</a></li>
                                <li><a href="#">Magazine</a></li>
                                <li><a href="#">Landing Page</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col_one_third col_last">

                <div class="widget clear-bottommargin-sm clearfix">

                    <div class="row">

                        <div class="col-lg-12 bottommargin-sm">
                            <div class="footer-big-contacts">
                                <span>Call Us:</span>
                                (91) 22 55412474
                            </div>
                        </div>

                        <div class="col-lg-12 bottommargin-sm">
                            <div class="footer-big-contacts">
                                <span>Send an Email:</span>
                                info@canvas.com
                            </div>
                        </div>

                    </div>

                </div>

                <div class="widget subscribe-widget clearfix">
                    <div class="row">

                        <div class="col-lg-6 clearfix bottommargin-sm">
                            <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin"
                               style="margin-right: 10px;">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on
                                    Facebook</small></a>
                        </div>
                        <div class="col-lg-6 clearfix">
                            <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin"
                               style="margin-right: 10px;">
                                <i class="icon-rss"></i>
                                <i class="icon-rss"></i>
                            </a>
                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to
                                    RSS Feeds</small></a>
                        </div>

                    </div>
                </div>

            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
            </div>

            <div class="col_half col_last tright">
                <div class="copyrights-menu copyright-links clearfix">
                    <a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a
                            href="#">FAQs</a>/<a href="#">Contact</a>
                </div>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->
<?php get_footer(); ?>
