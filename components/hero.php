<?php
$data = getData();
?>
<div class="hero">
    <div class="left">
        <div class="heading">
            <?php if (!empty($data['heading'])): ?>
                <h1><?php echo $data['heading']; ?></h1>
            <?php endif; ?>
            <div class="label">
                <?php if (!empty($data['text-price'])): ?>
                    <h1><?php echo $data['text-price']; ?></h1>
                <?php endif; ?>
                <div>
                    <?php if (!empty($data['pricing'])): ?>
                        <h1 class="price"><?php echo $data['pricing']; ?></h1>
                    <?php endif; ?>
                    <span>
                        <?php if (!empty($data['tag-price'])): ?>
                            <p><?php echo $data['tag-price']; ?></p>
                        <?php endif; ?>

                    </span>
                </div>
            </div>
        </div>
        <button class="call-to-action">Get Started <i class="fa fa-arrow-right"></i></button>
    </div>
    <div class="right">
        <img src="http://miicro2.test/wp-content/uploads/2024/07/ImageCTA-wizard-banner-image.png" alt="">
    </div>
</div>