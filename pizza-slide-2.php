<!--Third slide type (can be pizza)-->
<?php
if ($pizzaIcon=="hit") {
    $pizzaIcon = "pizza-slide__img_hit";
} else if ($pizzaIcon=="pepper") {
    $pizzaIcon = "pizza-slide__img_pepper";
} else if ($pizzaIcon=="20") {
    $pizzaIcon = "pizza-slide__img_20";
} else if ($pizzaIcon=="new") {
    $pizzaIcon = "pizza-slide__img_new";
}
?>

<div class="pizza-slides__item pizza-slide pizza-slide_3">
    <div class="pizza-slide__img <?= $pizzaIcon ?>">
        <img src="<?= $pizzaImage ?>" alt="Slide Image" class="pizza-img">
        <div class="pizza-slide__likes"><?= $pizzaLikes ?></div>
    </div>
    <div class="pizza-slide__heading"><?= $pizzaName ?></div>
    <div class="pizza-slide__text"><?= $pizzaDescription ?><br><?= $pizzaWeight ?>
    </div>
    <div class="pizza-slide__ingredients">Добавить ингредиенты</div>
    <div class="pizza-slide__sizes sizes layout">
        <div class="sizes__text">Размер:</div>
        <ul class="sizes__size-list size-list layout">
            <li class="size-list__item size-list__item_active">25 см.</li>
            <li class="size-list__item">30 см.</li>
            <li class="size-list__item">35 см.</li>
        </ul>
    </div>
    <div class="pizza-slide__footer layout">
        <div class="pizza-slide__price"><?= $pizzaPrice ?></div>
        <button class="pizza-slide__button button  button_to-cage">В КОРЗИНУ</button>
        <button class="button  button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
    </div>
</div>