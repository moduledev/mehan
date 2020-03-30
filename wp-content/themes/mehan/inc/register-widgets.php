<?php
function mehan_messengers_widget_setup() {
    register_sidebar(array(
        'name' => 'Top header messengers Sidebar',
        'id' => 'sidebar-2',
        'description' => 'Top header messengers Sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));
}

add_action('widgets_init','mehan_messengers_widget_setup');