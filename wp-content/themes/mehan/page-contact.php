<?php
/*
Template Name: Main-Contact
*/
?>
<?php get_header(); ?>


<section id="page-title" >

    <div class="container clearfix">
        <h2> <?php echo single_post_title(); ?></h2>
        <span><?php echo the_excerpt(); ?></span>
        <?php custom_breadcrumbs(); ?>
    </div>

</section><!-- #page-title end -->
<section id="google-map" class="gmap" style="position: relative; overflow: hidden;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6474.28121424083!2d35.02553328507313!3d48.48325044039381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe25c0330bdc1%3A0x2afc2e6bc70986f4!2z0YPQuy4g0L3QsNCxLiDQl9Cw0LLQvtC00YHQutCw0Y8sIDPQlCwg0JTQvdC40L_RgNC-LCDQlNC90LXQv9GA0L7Qv9C10YLRgNC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNDkwMDA!5e0!3m2!1sru!2sua!4v1571839756980!5m2!1sru!2sua" width="2000" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Postcontent
            ============================================= -->
            <div class="postcontent nobottommargin">

                <h3>Свяжитесь с нами</h3>

                <div class="form-widget">

                    <div class="form-result"></div>

                    <form class="nobottommargin" id="template-contactform" name="template-contactform"
                          action="../../include/form.php" method="post" novalidate="novalidate">

                        <div class="form-process"></div>

                        <div class="col_one_third">
                            <label for="template-contactform-name">Имя <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="template-contactform-name" value=""
                                   class="sm-form-control required">
                        </div>

                        <div class="col_one_third">
                            <label for="template-contactform-email">Email <small>*</small></label>
                            <input type="email" id="template-contactform-email" name="template-contactform-email"
                                   value="" class="required email sm-form-control">
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-phone">Телефон</label>
                            <input type="text" id="template-contactform-phone" name="template-contactform-phone"
                                   value="" class="sm-form-control">
                        </div>

                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="template-contactform-subject">Вопрос <small>*</small></label>
                            <input type="text" id="template-contactform-subject" name="subject" value=""
                                   class="required sm-form-control">
                        </div>


                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="template-contactform-message">Сообщение <small>*</small></label>
                            <textarea class="required sm-form-control" id="template-contactform-message"
                                      name="template-contactform-message" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col_full hidden">
                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck"
                                   value="" class="sm-form-control">
                        </div>

                        <div class="col_full">
                            <button class="button button-3d nomargin" type="submit" id="template-contactform-submit"
                                    name="template-contactform-submit" value="submit">Отправить
                            </button>
                        </div>

                        <input type="hidden" name="prefix" value="template-contactform-">

                    </form>
                </div>

            </div><!-- .postcontent end -->

            <!-- Sidebar
            ============================================= -->
            <div class="sidebar col_last nobottommargin">

                <div class="widget clearfix">

                    <h3 class="nobottommargin uppercase">Украина</h3><br>

                    <address>
                        <strong>Адрес:</strong><br>
                        г.Днепр,<br>
                        Набережная заводская, 3Д<br>
                    </address>
                    <abbr title="Phone Number"><strong>Телефон:</strong></abbr> (098) 854 9090<br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com

                    <div class="line line-sm"></div>

                </div>

                <div class="line line-sm"></div>

                <div class="widget notopmargin clearfix">

                    <a href="#" class="social-icon si-small si-dark si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-dark si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-dark si-dribbble">
                        <i class="icon-dribbble"></i>
                        <i class="icon-dribbble"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-dark si-forrst">
                        <i class="icon-forrst"></i>
                        <i class="icon-forrst"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-dark si-pinterest">
                        <i class="icon-pinterest"></i>
                        <i class="icon-pinterest"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-dark si-gplus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>

                </div>

            </div><!-- .sidebar end -->

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
