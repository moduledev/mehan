<?php
/*
Template Name: Main-Zapchasti
*/
?>
<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumbs', 'template');;?>

<section id="content">

    <div class="content-wrap">

        <div class="container">
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                    the_content();
                endwhile;
                else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
            <div class="row">

                <?php $currentlang = get_bloginfo('language');
                $menu = wp_get_nav_menu_items($currentlang === 'uk' ? 'header_menu' : 'header_menu_en');
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back no-after">
                                    <div class="flip-card-inner">
                                        <p class="mb-2 text-white"><?php _e('Best solution from Conus PC', 'mehan');?></p>
                                        <button type="button" class="btn btn-outline-light mt-2"><a
                                                    href="<?php echo $element->url; ?>"><?php _e('More', 'mehan');?></a></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }
                };
                ?>

            </div>
        </div>
    </div>

</section><!-- #content end -->


<?php get_footer(); ?>
