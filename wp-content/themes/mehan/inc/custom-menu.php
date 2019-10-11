<?php
/*
	 ====================================================
		Activate main top menu
	 ====================================================
 */
function mehan_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary','Primary header navigation');
}
add_action('init','mehan_theme_setup');
/*
	 ====================================================
		Activate portfolio menu
	 ====================================================
 */
function mehan_theme_portfolio_setup() {
    add_theme_support('menus');
    register_nav_menu('portfolio','Primary portfolio navigation');
}
add_action('init','mehan_theme_portfolio_setup');