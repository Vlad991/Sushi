<!--First slide type (can be pizza, roll)-->
<?php
    if ($rollIcon=="hit") {
        $rollIcon = "pizza-slide__img_hit";
    } else if ($rollIcon=="pepper") {
        $rollIcon = "pizza-slide__img_pepper";
    } else if ($rollIcon=="20") {
        $rollIcon = "pizza-slide__img_20";
    } else if ($rollIcon=="new") {
        $rollIcon = "pizza-slide__img_new";
    }
?>

<div class="pizza-slides__item pizza-slide">
    <div class="pizza-slide__img <?= $rollIcon ?>">
        <img src="<?= $rollImage ?>" alt="Slide Image" class="pizza-slide-img">
        <div class="pizza-slide__likes"><?= $rollLikes ?></div>
    </div>
    <div class="pizza-slide__heading"><?= $rollName ?></div>
    <div class="pizza-slide__text"><?= $rollDescription ?><br><?= $rollWeight ?>
    </div>
    <div class="pizza-slide__footer layout">
        <div class="pizza-slide__price"><?= $rollPrice ?></div>
        <button class="pizza-slide__button button  button_to-cage">В КОРЗИНУ</button>
        <button class="button  button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
    </div>
</div>
