<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="site-branding">
            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
        </div><!-- .site-branding -->

        <nav class="main-navigation">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                )
            );
            ?>
        </nav><!-- .main-navigation -->
    </header><!-- .site-header -->