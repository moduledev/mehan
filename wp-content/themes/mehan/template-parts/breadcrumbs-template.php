<?php
/**
 * Template part for displaying page breadcrumbs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mehan
 */

?>

<section id="page-title">

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

