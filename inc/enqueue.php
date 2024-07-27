<?php
function mytheme_enqueue_scripts()
{
    // Enqueue CSS
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    wp_enqueue_style('splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.11/dist/css/splide.min.css');
    wp_enqueue_style('mytheme-style', get_template_directory_uri() . '/dist/css/theme.min.css', array(), '1.0.0', 'all');

    // Enqueue JavaScript
    wp_enqueue_script('splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.11/dist/js/splide.min.js', array(), null, true);
    wp_enqueue_script('splide-auto-scroll', 'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js', array('splide-js'), null, true);
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/dist/js/theme.min.js', array('jquery', 'splide-js', 'splide-auto-scroll'), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
?>