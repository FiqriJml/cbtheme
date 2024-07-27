<?php
$data = getData();
$tasks = $data["tasks"] ?? null;
$heading = $data["heading"] ?? null;
$tag = strtoupper($data["tag"] ?? '');
$image = $data["image"] ?? null;
$btn_text = $data["btn_text"] ?? null;
$btn_url = $data["btn_url"] ?? null;

?>
<div class="process-section">
    <div class="text-container">
        <div class="head">
            <h1><?= $heading ?></h1>
            <span>
                <p>
                    <?= $tag ?>
                </p>
            </span>
        </div>
        <div class="body">
            <div class="tasks">
                <?php foreach ($tasks as $task): ?>
                    <div class="task"><i class="fas fa-check"></i><span><?= $task['task']; ?></span></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="foot">
            <a href="<?= $btn_url ?>"><?= $btn_text ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
    <div class="image-container">
        <img src="http://miicro2.test/wp-content/uploads/2024/07/select-theme.png" alt="Image themes">
    </div>
</div>