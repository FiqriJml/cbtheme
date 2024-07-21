<?php
// Memanggil file header.php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Memulai loop
        if (have_posts()):
            while (have_posts()):
                the_post();
                // Menampilkan konten halaman
                the_content();
            endwhile;
        endif;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
// Memanggil file footer.php
get_footer();
?>