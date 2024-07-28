<?php

// Enqueue scripts and styles for admin
function mytheme_enqueue_menu_script()
{
    wp_enqueue_media();
    wp_enqueue_script('menu-icon-upload', get_template_directory_uri() . '/inc/js/menu-icon-upload.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'mytheme_enqueue_menu_script');