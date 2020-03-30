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
require get_template_directory().'/inc/custom-walker-footer.php';
require get_template_directory().'/inc/register-widgets.php';
require get_template_directory().'/inc/function-widgets.php';
require get_template_directory().'/inc/breadcrumbs.php';
require get_template_directory().'/inc/gutenberg.php';
require get_template_directory().'/inc/endpoints.php';
require get_template_directory().'/inc/sendemail.php';

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
    wp_enqueue_style('main', get_template_directory_uri() . '/public/css/main.css', array('colors-main'), '1.0.0', 'all');

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

/*
	 ====================================================
		Activate category connection on page
	 ====================================================
 */
function category_on_page() {
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page');
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');
}
// Add to the admin_init hook of your theme functions.php file
add_action( 'init', 'category_on_page' );

/*
	 ====================================================
		Activate localization
	 ====================================================
 */


add_action( 'after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain( 'mehan', get_template_directory() . '/languages' );

}



