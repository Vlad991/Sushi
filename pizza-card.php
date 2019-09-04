<!--Card for pizza-->
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

<div class="pizza-page__pizza-card pizza-card">
    <div class="pizza-card__img pizza-slide__img <?= $pizzaIcon ?>">
        <img src="<?= $pizzaImage ?>" alt="Slide Image" class="pizza-img">
        <div class="pizza-slide__likes"><?= $pizzaLikes ?></div>
    </div>
    <div class="pizza-card__pizza-info pizza-info">
        <div class="pizza-info__heading"><?= $pizzaName ?></div>
        <div class="pizza-info__comp">
            <div class="pizza-info__comp-heading">Состав:</div>
            <div class="pizza-info__comp-body"><?= $pizzaDescription ?></div>
        </div>
        <div class="pizza-info__weight">Вес:<span class="pizza-info__weight-value"><?= $pizzaWeight ?></span></div>
        <div class="pizza-info__sizes sizes layout">
            <div class="sizes__text">Размер:</div>
            <ul class="sizes__size-list size-list layout">
                <li class="size-list__item size-list__item_active">25 см.</li>
                <li class="size-list__item">30 см.</li>
                <li class="size-list__item">35 см.</li>
            </ul>
        </div>
        <div class="pizza-info__ingredients pizza-slide__ingredients">Добавить ингредиенты</div>
        <div class="pizza-info__price pizza-slide__price"><?= $pizzaPrice ?></div>
        <div class="pizza-info__bonuses">
            Бонусные баллы: 4 <br>
            Цена в бонусных баллах: 170
        </div>
        <button type="button" class="pizza-info__button button button_to-cage">В КОРЗИНУ</button>
    </div>
</div>