<?php

// Collection of Walker class
class Walker_Nav_Primary extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    { //ul
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"submenu$submenu depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    { //li a span
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $li_attributes = '';
        $class_names = $value = '';
        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_iten_anchestor) ? 'current' : '';
        $classes[] = 'menu-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-submenu';
        }
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class=" ' . esc_attr($class_names) . '"';
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';
        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $attributes .= !empty($item->toggle) ? ' data-toggle="tab"' : '';
//        $attributes .=  empty($args->has_children) ? ' class="dropdown-toggle" data-toggle="tab"': '';
        if ($depth == 0 && $item->menu_item_parent == 0 ) {
            $item_output = $args->before;
            $item_output .= '<a' . $attributes . wp_get_attachment_url( get_post_thumbnail_id($item->ID) ). '>';
            $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
            $item_output .= ($depth == 0 && $args->walker->has_children) ? ' <i class="icon-angle-down"></i></a>' : '</a>';
            $item_output .= $args->after;
        } else {
            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';


            if(wp_get_attachment_url( get_post_thumbnail_id($item->object_id))){
                $item_output .= '<div class="d-flex justify-content-between">';
                $item_output .=  '<div class="sub-menu-thumb_img-wrapper" style="background-image: url(' .wp_get_attachment_url( get_post_thumbnail_id($item->object_id)). ')"></div>';
                $item_output .= '<div class=""> ' .
                    $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after .'</div>';

            } else {
                $item_output .= '<div class="d-flex justify-content-end">';
                $item_output .= '<div class=""> ' .
                    $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after .'</div>';
            }

            $item_output .=   '</div>';
            $item_output .= '</a>';

            $item_output .= $args->after;
        }
//        $item_output = $args->before;
//        $item_output .= '<a' . $attributes .'>';
//        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
//        $item_output .= ($depth == 0 && $args->walker->has_children) ? ' <i class="icon-angle-down"></i></a>' : '</a>';
//        $item_output .= $args->after;
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
//	function end_el() { // closing li a span
//
//	}
//
//	function end_lvl() { //close ul
//
//	}
}