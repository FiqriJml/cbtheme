<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-desktop">
            <div class="site-branding">
                <a href="<?php echo home_url('/') ?>">
                    <?php
                    $logo_id = carbon_get_theme_option('header_logo');
                    if ($logo_id) {
                        $logo_url = wp_get_attachment_url($logo_id);
                        if ($logo_url) {
                            echo '<img src="' . esc_url($logo_url) . '" alt="Logo">';
                        } else {
                            // Alternatif teks atau gambar jika logo belum diatur
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/default-logo.png" alt="Default Logo">';
                        }
                    } else {
                        // Alternatif teks atau gambar jika logo belum diatur
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/default-logo.png" alt="Default Logo">';
                    }
                    ?>
                </a>
            </div><!-- .site-branding -->

            <nav class="main-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id' => 'primary-menu',
                        'walker' => new My_Custom_Nav_Walker(), // Tambahkan walker custom
                    )
                );
                ?>
            </nav><!-- .main-navigation -->

            <div class="header-buttons">
                <button class="language-switcher">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/united-kingdom.png" alt="EN" />
                    <span>EN</span>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </button>
                <button class="sign-in">Sign In</button>
                <button class="get-started">Get Started</button>
            </div><!-- .header-buttons -->
            <button class="hamburger-menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="4" width="24" height="2" fill="currentColor" />
                    <rect y="11" width="24" height="2" fill="currentColor" />
                    <rect y="18" width="24" height="2" fill="currentColor" />
                </svg>
            </button>
        </div>
        <div class="mobile-navigation">
            <nav class="main-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id' => 'primary-menu',
                        'walker' => new My_Custom_Nav_Walker(), // Tambahkan walker custom
                    )
                );
                ?>
            </nav><!-- .main-navigation -->

            <div class="header-buttons">
                <button class="language-switcher">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/united-kingdom.png" alt="EN" />
                    <span>EN</span>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </button>
                <button class="sign-in">Sign In</button>
                <button class="get-started">Get Started</button>
            </div><!-- .header-buttons -->

        </div>
    </header><!-- .site-header -->