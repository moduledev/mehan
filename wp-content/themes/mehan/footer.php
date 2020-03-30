<!-- Footer
============================================= -->
<footer id="footer" class="dark">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_two_third">

                <div class="widget clearfix">

                    <img src="" alt="" class="alignleft"
                         style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">



                    <div class="line" style="margin: 30px 0;"></div>

                    <div class="row">

                        <?php wp_nav_menu(
                            array(
                                'container' => 'div',
                                'container_class' => 'class="col col-lg-3 bottommargin-sm widget_links',
                                'menu_class' => '',
                                'theme_location' => 'secondary',
                                'walker' => new Walker_Nav_Secondary(),
                            )
                        ); ?>

                    </div>

                </div>

            </div>

            <div class="col_one_third col_last">

                <div class="widget clear-bottommargin-sm clearfix">

                    <div class="row">

                        <div class="col-lg-12 bottommargin-sm">
                            <div class="footer-big-contacts">
                                <span><?php _e('Phone:','mehan');?></span>
                                (098) 111 1111
                            </div>
                        </div>

                        <div class="col-lg-12 bottommargin-sm">
                            <div class="footer-big-contacts">
                                <span>Email:</span>
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
                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>Мы</strong><br>в
                                    Facebook</small></a>
                        </div>
                        <div class="col-lg-6 clearfix">
                            <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin"
                               style="margin-right: 10px;">
                                <i class="icon-rss"></i>
                                <i class="icon-rss"></i>
                            </a>
                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>Подпишитесь</strong><br>на
                                    RSS рассылку</small></a>
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
                Copyrights &copy; 2019 Mehan. Designed by <a target="_blank" href="https://moduledev.com.ua">[ModuleDev]</a> All rights reserved<br>
            </div>



        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->


<!-- Footer Scripts
============================================= -->
<?php  wp_footer() ;?>
</body>
</html>
