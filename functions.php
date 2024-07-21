<?php
// Memuat file theme-setup.php
require get_template_directory() . '/inc/theme-setup.php';
// Memuat file theme-options.php
require get_template_directory() . '/inc/theme-options.php';
// Theme Filters
require_once get_template_directory() . '/inc/theme-filters.php';
// Memuat file enqueue.php
require get_template_directory() . '/inc/enqueue.php';
// custom block editor 
require_once get_template_directory() . '/inc/custom-block-editor.php';
