<?php
/*
Template Name: Main-Contact
*/
?>
<?php get_header(); ?>


<section id="page-title">

    <div class="container clearfix">
        <h2> <?php echo single_post_title(); ?></h2>
        <span><?php echo the_excerpt(); ?></span>
        <?php custom_breadcrumbs(); ?>
        <div class=""></div>
    </div>

</section><!-- #page-title end -->
<section id="google-map" class="gmap mt-5" style="position: relative; overflow: hidden; height: auto">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2289.0362806687795!2d35.01950980607456!3d48.48253680609618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe25c0330bdc1%3A0x2afc2e6bc70986f4!2z0YPQuy4g0L3QsNCxLiDQl9Cw0LLQvtC00YHQutCw0Y8sIDPQlA!5e0!3m2!1sru!2sua!4v1579035317480!5m2!1sru!2sua"
                        width="2000" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Postcontent
            ============================================= -->
            <div class="postcontent nobottommargin">

                <h3><?php _e( 'Connect with us', 'mehan' ); ?></h3>

                <div class="form-widget" id="test_form">


                </div>

            </div><!-- .postcontent end -->

            <!-- Sidebar
            ============================================= -->
            <div class="sidebar col_last nobottommargin">

                <div class="widget clearfix">

                    <h3 class="nobottommargin uppercase"><?php _e( 'Ukraine', 'mehan' ); ?></h3><br>

                    <address>
                        <strong><?php _e( 'Address', 'mehan' ); ?>:</strong><br>
                        <?php _e( 'Dnipro, Naberezhnaya zavoskaya 3d', 'mehan' ); ?>
                    </address>
                    <abbr title="Phone Number"><strong><?php _e( 'Phone:', 'mehan' ); ?></strong></abbr> (098) 854 9090<br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com

                    <div class="line line-sm"></div>

                </div>


                <div class="widget notopmargin clearfix">

                    <a href="#" class="social-icon si-small si-dark si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-dark si-gplus">
                        <i class="icon-instagram"></i>
                        <i class="icon-instagram"></i>
                    </a>

                </div>

            </div><!-- .sidebar end -->

        </div>
    </div>

</section><!-- #content end -->

<!-- Footer
============================================= -->
<?php get_footer(); ?>
