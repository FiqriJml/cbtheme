<?php
// Fungsi untuk menambahkan dukungan title tag
function mytheme_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'mytheme_setup');
