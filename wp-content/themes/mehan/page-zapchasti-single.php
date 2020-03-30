<?php
/*
Template Name: Main-Zapchasti-Single
*/
?>
<?php get_header(); ?>


<section id="page-title">

    <div class="container clearfix">
        <h2> <?php echo single_post_title(); ?></h2>
        <span><?php echo the_excerpt(); ?></span>
        <?php custom_breadcrumbs(); ?>
    </div>

</section><!-- #page-title end -->

<!------- Content------>
<section id="content">

    <div class="content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

</section><!-- #content end -->


<?php get_footer(); ?>
