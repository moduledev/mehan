<?php
/**
 * mehan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mehan
 */
require get_template_directory().'/inc/custom-menu.php';
require get_template_directory().'/inc/custom-walker.php';
require get_template_directory().'/inc/register-widgets.php';
require get_template_directory().'/inc/function-widgets.php';

/*
====================================================
Include scripts
====================================================
*/
function mehan_script_enqueue()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main1', get_template_directory_uri() . '/styles/style.css', array('bootstrap'), '1.6.0', 'all');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/styles/swiper.css', array('main1'), '1.6.0', 'all');
    wp_enqueue_style('construction', get_template_directory_uri() . '/styles/construction.css', array('swiper'), '1.0.0', 'all');
    wp_enqueue_style('dark', get_template_directory_uri() . '/styles/dark.css', array('construction'), '1.0.0', 'all');
    wp_enqueue_style('font-icons', get_template_directory_uri() . '/styles/font-icons.css', array('dark'), '1.0.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/styles/animate.css', array('font-icons'), '1.0.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/styles/magnific-popup.css', array('animate'), '1.0.0', 'all');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/styles/fonts.css', array('magnific-popup'), '1.0.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/styles/responsive.css', array('fonts'), '1.0.0', 'all');
    wp_enqueue_style('colors-main', get_template_directory_uri() . '/styles/colors.css', array('responsive'), '1.0.0', 'all');
    wp_enqueue_style('extra', get_template_directory_uri() . '/styles/extra.css', array('colors-main'), '1.0.0', 'all');
    if( is_page_template( array('page-zapchasti-single.php') ) ) {
        wp_enqueue_style('slick', get_template_directory_uri() . '/libs/slick/slick.css', array('colors-main'), null, 'all');
        wp_enqueue_style('slick-theme', get_template_directory_uri() . '/libs/slick/slick-theme.css', array('slick'), null, 'all');
    }

    wp_enqueue_script('plugins', get_template_directory_uri() . '/scripts/plugins.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('custom_js', get_template_directory_uri() . '/scripts/functions.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/scripts/main.js', array('slick'), '1.0.0', true);

    if( is_page_template( array('page-zapchasti-single.php') ) ) {
        wp_enqueue_script('slick', get_template_directory_uri() . '/libs/slick/slick.js', array('jquery'), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'mehan_script_enqueue');
/*
====================================================
Activate CDN Jquery
====================================================
*/
function shapeSpace_include_custom_jquery()
{

    if( is_page_template( array('page-zapchasti-single.php') ) ) {
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-1.11.0.min.js', array(), null, false);
        wp_enqueue_script('jquery-mig', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js', array('jquery'), null, false);
    } else {
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, false);
    }
}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
/*
	 ====================================================
		Activate Google Fonts
	 ====================================================
 */
function load_fonts()
{
    wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Roboto');
    wp_enqueue_style('et-googleFonts');
    wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=cyrillic');
    wp_enqueue_style('et1-googleFonts');
}
add_action('wp_print_styles', 'load_fonts');
/*
====================================================
Activate custom background
====================================================
 */
add_theme_support('custom-background');
/*
	 ====================================================
		Activate post thumbnails
	 ====================================================
 */
add_theme_support('post-thumbnails');
/*
	 ====================================================
		Activate ability to change logo
	 ====================================================
 */
add_theme_support('custom-logo');
/*
	 ====================================================
		Activate search form
	 ====================================================
 */
add_theme_support('html5', array('search-form'));
/*
	 ====================================================
		Activate post formats
	 ====================================================
 */
add_theme_support('post-formats', array('aside', 'image', 'video'));

/*
	 ====================================================
		Activate post excerpt
	 ====================================================
 */
add_post_type_support( 'page', 'excerpt' );

// Breadcrumbs
function custom_breadcrumbs() {

    // Settings
    $separator          = '&nbsp;&#47;&nbsp;';
    $breadcrums_class   = 'breadcrumb';
    $home_title         = 'Главная';

    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';

    // Get the query & post information
    global $post,$wp_query;

    // Do not display on the homepage
    if ( !is_front_page() ) {

        // Build the breadcrums
        echo '<ol class="' . $breadcrums_class . '">';

        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';

        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title('', false) . '</strong></li>';

        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';

            }

            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';

        } else if ( is_single() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';

            }

            // Get post category info
            $category = get_the_category();

            if(!empty($category)) {

                // Get last category post is in
                $last_category = end(array_values($category));

                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);

                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }

            }

            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;

            }

            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

                // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {

                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            } else {

                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            }

        } else if ( is_category() ) {

            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';

        } else if ( is_page() ) {

            // Standard page
            if( $post->post_parent ){

                // If child page, get parents
                $anc = get_post_ancestors( $post->ID );

                // Get parents in the right order
                $anc = array_reverse($anc);

                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }

                // Display parent pages
                echo $parents;

                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';

            } else {

                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';

            }

        } else if ( is_tag() ) {

            // Tag page

            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;

            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';

        } elseif ( is_day() ) {

            // Day archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';

        } else if ( is_month() ) {

            // Month Archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';

        } else if ( is_year() ) {

            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';

        } else if ( is_author() ) {

            // Auhor archive

            // Get the author information
            global $author;
            $userdata = get_userdata( $author );

            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';

        } else if ( get_query_var('paged') ) {

            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';

        } else if ( is_search() ) {

            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';

        } elseif ( is_404() ) {

            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }

        echo '</ol>';

    }

}


/*
 * Change custom logo class
 *
 */

add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'standart-logo', $html );
    $html = str_replace( 'custom-logo-link', 'standart-logo', $html );

    return $html;
}



