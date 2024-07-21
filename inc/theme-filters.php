<?php

// // Fungsi untuk menambahkan ikon dropdown pada menu dengan submenu
// function add_dropdown_icon_to_menu($items, $args)
// {
//     if ($args->theme_location == 'primary') {
//         $items = str_replace('<ul class="sub-menu">', '<i class="fa fa-chevron-down" aria-hidden="true"></i><ul class="sub-menu">', $items);
//     }
//     return $items;
// }
// add_filter('wp_nav_menu_items', 'add_dropdown_icon_to_menu', 10, 2);