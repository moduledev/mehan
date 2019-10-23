<?php
/*
Template Name: Main-Zapchasti-Single
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

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container">

            <div class="row">
                <!--               --><?php
                //                $images = get_children(array('post_parent' => get_queried_object_id(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999));
                //                /* $images is now a object that contains all images (related to post id 1) and their information ordered like the gallery interface. */
                //                if ($images) { ?>
                <!--                    <div id="fade1" style="width: 100%">-->
                <!--                        --><?php //foreach ($images as $attachment_id => $attachment) { ?>
                <!--                                <div><img src="-->
                <?php //echo wp_get_attachment_image_url($attachment_id, 'full', false); ?><!--" alt=""></div>-->
                <!--                       --><?php //} ?>
                <!--                    </div>-->
                <!--                --><?php //} ?>
            </div>
            <div class="row">
                <?php echo wp_strip_all_tags(get_the_content()); ?>
                <div id="fade1" style="width: 100%">-->
                    <?php
                    $images = get_attached_media('image', get_queried_object_id());
                    foreach ($images as $image) { ?>
                        <div><img src="<?php echo $image->guid; ?>" alt=""></div>
                    <?php } ?>

<!--                    --><?php //$loop = new WP_Query( array('post_type' => 'gallery',
//        'posts_per_page' => 100 )
//            );
//        while ( $loop->have_posts() ) : $loop->the_post();
//
//        if ( $gallery = get_post_gallery( 24, false ) ) :
//
//            $img_ids = explode( ',', $gallery['ids'] );
//            /* Loop through all the image and output them one by one */
//            foreach( $gallery['src'] as $key => $src ) : ?>
<!---->
<!--                <img src="--><?php //echo $src; ?><!--" class="my-custom-class" alt="Gallery image" />-->
<!--                --><?php
//                    $image_post = get_post( $img_ids[ $key ] ); ?>
<!--                    <p class="wp-caption-text">--><?php //echo $image_post->post_excerpt; ?><!--</p>-->
<!---->
<!--            --><?php //endforeach;
//        endif;
//
// endwhile; wp_reset_postdata(); ?>
                </div>
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
