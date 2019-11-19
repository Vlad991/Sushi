<!--Fourth slide type (can be pizza)-->
<?php
if ($pizzaIcon == "hit") {
    $pizzaIcon = "pizza-slide__img_hit";
} else if ($pizzaIcon == "pepper") {
    $pizzaIcon = "pizza-slide__img_pepper";
} else if ($pizzaIcon == "20") {
    $pizzaIcon = "pizza-slide__img_20";
} else if ($pizzaIcon == "new") {
    $pizzaIcon = "pizza-slide__img_new";
}
?>

<div class="pizza-slides__item">
        <div class="pizza-slide pizza-slide_3">
            <div class="pizza-slide__img <?= $pizzaIcon ?>">
                <img src="<?= $pizzaImage ?>" alt="Slide Image" class="pizza-slide-img">
                <div class="pizza-slide__likes"><?= $pizzaLikes ?></div>
            </div>
            <div class="pizza-slide__price-and-weight layout">
                <div class="pizza-slide__price layout">
                    <div class="pizza-slide__price_old"><?= $pizzaOldPrice ?></div>
                    <div class="pizza-slide__price_new"><?= $pizzaPrice ?></div>
                </div>
                <div class="pizza-slide__price"><?= $pizzaWeight ?></div>
            </div>
            <div class="pizza-slide__heading"><?= $pizzaName ?></div>
            <div class="pizza-slide__text"><?= $pizzaDescription ?><br><?= $pizzaWeight ?>
            </div>
            <div class="pizza-slide__ingredients">Добавить ингредиенты</div>
            <ul class="pizza-info__ingred-list ingred-list hide">
                <li class="ingred-list__item">
                    <div class="ingred-list__ingredient">Маслины, 30 гр.</div>
                    <ul class="ingred-list__quantity-list quantity-list layout">
                        <li class="quantity-list__item quantity-list__item_active"><img src="./img/main-page/x.svg" alt="x"
                                                                                        style="margin-bottom: 3px"></li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">1</li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">2</li>
                    </ul>
                    <div class="ingred-list__price">5 руб.</div>
                </li>
                <li class="ingred-list__item">
                    <div class="ingred-list__ingredient">Ветчина, 30 гр.</div>
                    <ul class="ingred-list__quantity-list quantity-list layout">
                        <li class="quantity-list__item quantity-list__item_active"><img src="./img/main-page/x.svg" alt="x"
                                                                                        style="margin-bottom: 3px"></li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">1</li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">2</li>
                    </ul>
                    <div class="ingred-list__price">10 руб.</div>
                </li>
                <li class="ingred-list__item">
                    <div class="ingred-list__ingredient">Салями, 20 гр.</div>
                    <ul class="ingred-list__quantity-list quantity-list layout">
                        <li class="quantity-list__item quantity-list__item_active"><img src="./img/main-page/x.svg" alt="x"
                                                                                        style="margin-bottom: 3px"></li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">1</li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">2</li>
                    </ul>
                    <div class="ingred-list__price">20 руб.</div>
                </li>
                <li class="ingred-list__item">
                    <div class="ingred-list__ingredient">Грудка кур. копченая, 30 гр.</div>
                    <ul class="ingred-list__quantity-list quantity-list layout">
                        <li class="quantity-list__item quantity-list__item_active"><img src="./img/main-page/x.svg" alt="x"
                                                                                        style="margin-bottom: 3px"></li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">1</li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">2</li>
                    </ul>
                    <div class="ingred-list__price">10 руб.</div>
                </li>
                <li class="ingred-list__item">
                    <div class="ingred-list__ingredient">Дор блю, 30 гр.</div>
                    <ul class="ingred-list__quantity-list quantity-list layout">
                        <li class="quantity-list__item quantity-list__item_active"><img src="./img/main-page/x.svg" alt="x"
                                                                                        style="margin-bottom: 3px"></li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">1</li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">2</li>
                    </ul>
                    <div class="ingred-list__price">15 руб.</div>
                </li>
                <li class="ingred-list__item">
                    <div class="ingred-list__ingredient">Моцарелла, 30 гр.</div>
                    <ul class="ingred-list__quantity-list quantity-list layout">
                        <li class="quantity-list__item quantity-list__item_active"><img src="./img/main-page/x.svg" alt="x"
                                                                                        style="margin-bottom: 3px"></li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">1</li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">2</li>
                    </ul>
                    <div class="ingred-list__price">18 руб.</div>
                </li>
                <li class="ingred-list__item">
                    <div class="ingred-list__ingredient">Пармезан, 30 гр.</div>
                    <ul class="ingred-list__quantity-list quantity-list layout">
                        <li class="quantity-list__item quantity-list__item_active"><img src="./img/main-page/x.svg" alt="x"
                                                                                        style="margin-bottom: 3px"></li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">1</li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">2</li>
                    </ul>
                    <div class="ingred-list__price">15 руб.</div>
                </li>
                <li class="ingred-list__item">
                    <div class="ingred-list__ingredient">Грибы, 30 гр.</div>
                    <ul class="ingred-list__quantity-list quantity-list layout">
                        <li class="quantity-list__item quantity-list__item_active"><img src="./img/main-page/x.svg" alt="x"
                                                                                        style="margin-bottom: 3px"></li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">1</li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">2</li>
                    </ul>
                    <div class="ingred-list__price">5 руб.</div>
                </li>
                <li class="ingred-list__item">
                    <div class="ingred-list__ingredient">Перец острый, 10 гр.</div>
                    <ul class="ingred-list__quantity-list quantity-list layout">
                        <li class="quantity-list__item quantity-list__item_active"><img src="./img/main-page/x.svg" alt="x"
                                                                                        style="margin-bottom: 3px"></li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">1</li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">2</li>
                    </ul>
                    <div class="ingred-list__price">5 руб.</div>
                </li>
                <li class="ingred-list__item">
                    <div class="ingred-list__ingredient">Перец сладкий, 20 гр.</div>
                    <ul class="ingred-list__quantity-list quantity-list layout">
                        <li class="quantity-list__item quantity-list__item_active"><img src="./img/main-page/x.svg" alt="x"
                                                                                        style="margin-bottom: 3px"></li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">1</li>
                        <li class="quantity-list__item layout"><img src="./img/main-page/x.svg" alt="x">2</li>
                    </ul>
                    <div class="ingred-list__price">5 руб.</div>
                </li>
            </ul>
            <div class="pizza-slide__sizes sizes layout">
                <div class="sizes__text">Размер:</div>
                <ul id="pizzaSizes" class="sizes__size-list size-list layout">
                    <li class="size-list__item size-list__item_active">25 см.</li>
                    <li class="size-list__item">30 см.</li>
                    <li class="size-list__item">35 см.</li>
                </ul>
            </div>
            <div class="pizza-slide__footer layout">
                <button class="pizza-slide__button button  button_to-cage">В КОРЗИНУ</button>
                <button class="button  button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
            </div>
        </div>
    </div>

