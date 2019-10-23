<?php
function vitamins_messengers_widget_setup() {
    register_sidebar(array(
        'name' => 'Vitamins Top Header Sidebar',
        'id' => 'sidebar-2',
        'description' => 'Vitamins Sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));
}

add_action('widgets_init','vitamins_messengers_widget_setup');