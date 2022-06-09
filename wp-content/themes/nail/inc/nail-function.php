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

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');


function wpse_125805_add_image_meta_data($attachment_ID)
{
    $text = "Love lashes in Fuqua xtreme mink eyelash extensions advance skin care microdermabrasion treatment additional eyebrow & lash services eyelash tinting microneedling microchanneling airbrush service image micro peel treatment body waxing permanent makeup areola nipple pigmentation organic scalp pigmentation cupping therapy ear candling derma swiss lose inch body wrap beauty products eye treatments face treatments multiple area treatments";

    $my_post = array(
        'ID' => $attachment_ID,
        'post_excerpt' => "$text $attachment_ID",  // caption
        'post_content' => "$text $attachment_ID",  // description
    );
    wp_update_post($my_post);

    // update alt text for post
    update_post_meta($attachment_ID, '_wp_attachment_image_alt', "$text $attachment_ID");
}

add_action('add_attachment', 'wpse_125805_add_image_meta_data');


function reUpdateMeta()
{
    $image_ids = get_posts(
        array(
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'post_status' => 'inherit',
            'posts_per_page' => -1,
            'fields' => 'ids',
        ));
    foreach ($image_ids as $attachment_ID) {
        $text = "Love lashes in Fuqua xtreme mink eyelash extensions advance skin care microdermabrasion treatment additional eyebrow & lash services eyelash tinting microneedling microchanneling airbrush service image micro peel treatment body waxing permanent makeup areola nipple pigmentation organic scalp pigmentation cupping therapy ear candling derma swiss lose inch body wrap beauty products eye treatments face treatments multiple area treatments";

        $my_post = array(
            'ID' => $attachment_ID,
            'post_title' => "$text $attachment_ID",  // caption
            'post_excerpt' => "$text $attachment_ID",  // caption
            'post_content' => "$text $attachment_ID",  // description
        );
        wp_update_post($my_post);

        // update alt text for post
        update_post_meta($attachment_ID, '_wp_attachment_image_alt', "$text $attachment_ID");
    }
}

//add_action('init', 'reUpdateMeta');
