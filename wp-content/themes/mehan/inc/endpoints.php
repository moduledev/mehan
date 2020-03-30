<?php
add_action('rest_api_init', function () {
    register_rest_route( 'test/v1', 'latest-posts/(?P<category_id>\d+)',array(
        'methods'  => 'GET',
        'callback' => 'get_menus_elements'
    ));
});

function get_menus_elements() {

    $menu = wp_get_nav_menu_items('header_menu');
    $menu_en = wp_get_nav_menu_items('header_menu_en');
    if (empty($menu)) {
        return new WP_Error( 'empty_category', 'there is no post in this category', array('status' => 404) );
    }

    $response = new WP_REST_Response(array_merge($menu,$menu_en));
    $response->set_status(200);

    return $response;
}

