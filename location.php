<?php
    if ($location3 == null) {
        $location3 = "Главная";
    }
?>

<div class="location container__location">
    <div class="container__fixed">
        <span class="location__main"><?= $location1 ?></span>
        <span class="location__slash">/</span>
        <span class="location__sub"><?= $location2 ?></span>
    </div>
</div>

<div class="container__contacts-location contacts-location">
    <div class="container__fixed container__fixed_adaptive">
        <a href="index.php" class="contacts-location__link"><?= $location3 ?></a>
    </div>
</div>