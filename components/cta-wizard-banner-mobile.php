<?php
$data = getData();
$bg_image = $data['bg_image'] ?? null;
$image = $data['image'] ?? null;
$heading = $data['heading'] ?? null;
$btn_text = $data['btn_text'] ?? null;
$btn_url = $data['btn_url'] ?? null;
$pricing = $data['pricing'] ?? null;
$tag_price = strtoupper($data['tag_price'] ?? null);
?>
<div class="cta-wizard-banner-mobile" style="background-image: url(<?= $bg_image ?>);">
    <div class="text-container">
        <h1>
            <?= $heading ?>
        </h1>
        <div class="label">
            <span class="pricing">
                <?= $pricing ?>
            </span>
            <span class="tag-price">
                <?= $tag_price ?>
            </span>
        </div>
        <a href="<?= $btn_url ?>"><?= $btn_text ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
    </div>
    <div class="image-container">
        <img src="<?= $image ?>" alt="">
    </div>
</div>