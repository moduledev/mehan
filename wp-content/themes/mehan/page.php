<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mehan
 */

get_header(); ?>

<?php get_template_part('template-parts/breadcrumbs', 'template');;?>
    <section id="content">

        <div class="content-wrap">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- #content end -->
<?php
get_footer();
