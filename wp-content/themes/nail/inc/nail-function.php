<?php
define("ASSET", get_template_directory_uri() . "/assets/nail");
show_admin_bar(false);


add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active nav-item';
    }
    if (in_array('menu-item-has-children', $classes)) {
        $classes[] = '';
    }
    return $classes;
}

function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

function getImageTerm($term)
{
    $thumb_id = get_term_meta($term->term_id, 'thumbnail_id', true);
    return wp_get_attachment_url($thumb_id);
}
