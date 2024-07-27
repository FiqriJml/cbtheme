<?php
$data = getData();
$image = isset($data['image']) ? $data['image'] : '';
?>
<div id="logo-carousel" class="splide">
    <?php if ($image): ?>
        <div class="splide__track">
            <div class="splide__list">
                <div class="splide__slide">
                    <img src="<?php echo htmlspecialchars($image); ?>" alt="Logo Image">
                </div>
                <!-- Tambahkan lebih banyak slide jika diperlukan -->
            </div>
        </div>
    <?php endif; ?>
</div>