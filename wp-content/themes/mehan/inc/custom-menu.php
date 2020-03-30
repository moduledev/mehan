<?php
/*
	 ====================================================
		Activate main top menu
	 ====================================================
 */
//function mehan_theme_setup() {
//    add_theme_support('menus');
//    register_nav_menu('primary','Primary header navigation');
//}
//add_action('init','mehan_theme_setup');


function register_mehan_menus() {

    register_nav_menus(
        array(
            'primary' => __( 'primary' ),
            'secondary' => __( 'secondary' )
        )
    );
}
add_action( 'init', 'register_mehan_menus' );