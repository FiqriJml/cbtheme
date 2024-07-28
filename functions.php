<?php
// Memuat file theme-setup.php
require get_template_directory() . '/inc/theme-setup.php';
// Memuat file theme-options.php
require get_template_directory() . '/inc/theme-options.php';
// enqueue for admin
require get_template_directory() . '/inc/enqueue-admin-scripts.php';
// Memuat file custom-menu.php
require get_template_directory() . '/inc/custom-menu.php';
// Theme Filters
require_once get_template_directory() . '/inc/theme-filters.php';
// Memuat file enqueue.php
require get_template_directory() . '/inc/enqueue.php';
// custom block editor 
require_once get_template_directory() . '/inc/custom-block-editor.php';
// class 
require_once get_template_directory() . '/inc/class-my-custom-nav-walker.php';

