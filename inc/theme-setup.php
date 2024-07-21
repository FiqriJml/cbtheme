<?php

function crb_load()
{
    require_once get_template_directory() . '/vendor/autoload.php';
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action('after_setup_theme', 'crb_load');
// Fungsi untuk menambahkan dukungan title tag
function mytheme_setup()
{
    add_theme_support('title-tag');
    // Daftarkan lokasi menu
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'mytheme'),
        )
    );
}
add_action('after_setup_theme', 'mytheme_setup');
