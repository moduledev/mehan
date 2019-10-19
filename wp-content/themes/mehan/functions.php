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

/*
====================================================
Include scripts
====================================================
*/
function mehan_script_enqueue()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/styles/style.css', array('bootstrap'), '1.6.0', 'all');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/styles/swiper.css', array('main'), '1.6.0', 'all');
    wp_enqueue_style('construction', get_template_directory_uri() . '/styles/construction.css', array('swiper'), '1.0.0', 'all');
    wp_enqueue_style('dark', get_template_directory_uri() . '/styles/dark.css', array('construction'), '1.0.0', 'all');
    wp_enqueue_style('font-icons', get_template_directory_uri() . '/styles/font-icons.css', array('dark'), '1.0.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/styles/animate.css', array('font-icons'), '1.0.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/styles/magnific-popup.css', array('animate'), '1.0.0', 'all');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/styles/fonts.css', array('magnific-popup'), '1.0.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/styles/responsive.css', array('fonts'), '1.0.0', 'all');
    wp_enqueue_style('colors', get_template_directory_uri() . '/styles/colors.css', array('responsive'), '1.0.0', 'all');
    wp_enqueue_style('extra', get_template_directory_uri() . '/styles/extra.css', array('colors'), '1.0.0', 'all');


    wp_enqueue_script('jquery', get_template_directory_uri() . '/scripts/jquery.js', array(), '1.0.0', true);
    wp_enqueue_script('plugins', get_template_directory_uri() . '/scripts/plugins.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('custom_js', get_template_directory_uri() . '/scripts/functions.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mehan_script_enqueue');
/*
====================================================
Activate CDN Jquery
====================================================
*/
function shapeSpace_include_custom_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
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

