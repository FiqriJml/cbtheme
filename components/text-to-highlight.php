<?php
$data = getData();
$heading = $data['heading'] ?? null;
$bg_image = $data['bg_image'] ?? null;
?>
<div class="text-to-highlight" style="background-image: url(<?php echo $bg_image; ?>);">
    <h1><?= $heading ?></h1>
</div>