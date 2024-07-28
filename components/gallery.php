<?php
$data = getData();
$images = $data['images'] ?? null;
?>

<div id="gallery-carousel" class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <?php foreach ($images as $image): ?>
                <li class="splide__slide">
                    <img src="<?= esc_url($image['image']); ?>" alt="">
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>