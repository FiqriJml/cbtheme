<?php
$data = getData();
$tasks = $data["tasks"];
?>
<div class="process-section">
    <div class="text-container">
        <div class="head">
            <h1>Our sites</h1>
            <span>
                <p>
                    NEW
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
            <button>View Products&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
        </div>
    </div>
    <div class="image-container">
        <img src="http://miicro2.test/wp-content/uploads/2024/07/select-theme.png" alt="Image themes">
    </div>
</div>