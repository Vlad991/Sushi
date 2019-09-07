<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Доставка еды — заказать пиццу и суши с доставкой на дом, недорого | Love-Sushi</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="./index.html">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/main-page.css">
</head>

<body>
<div class="container">

    <!-- Header -->
    <?php include('./header.php'); ?>

    <!-- Navigation -->
    <?php include('./navigation.php'); ?>

    <div class="container__main-page main-page">
        <div class="container__fixed container__fixed_adaptive">
            <div id="mainSlider" class="main-page__slider slider">
                <div class="slider__slide current slide layout">
                    <div class="slide__description description">
                        <div class="description__heading">Сет Мини в подарок на день рождения!</div>
                        <div class="description__text">Предложение действует всю неделю, на которую выпал Ваш день
                            рождения (3 дня до, в день рождения и 3 дня после).
                        </div>
                        <div class="description__button">
                            <button class="button  button_slider">СКОРЕЕ В КОРЗИНУ!</button>
                        </div>
                    </div>
                    <img src="img/main-page/slide1.svg" alt="Slide Image" class="slide__img">
                </div>
                <div class="slider__slide slide layout">
                    <div class="slide__description description">
                        <div class="description__heading">Slide 2 Heading</div>
                        <div class="description__text">Предложение действует всю неделю, на которую выпал Ваш день
                            рождения (3 дня до, в день рождения и 3 дня после).
                        </div>
                        <div class="description__button">
                            <button class="button  button_slider">СКОРЕЕ В КОРЗИНУ!</button>
                        </div>
                    </div>
                    <img src="img/main-page/slide.svg" alt="Slide Image" class="slide__img" style="width: 590px;height: 367px;background: gray;">
                </div>
                <div class="slider__slide slide layout">
                    <div class="slide__description description">
                        <div class="description__heading">Slide 3 Heading</div>
                        <div class="description__text">Предложение действует всю неделю, на которую выпал Ваш день
                            рождения (3 дня до, в день рождения и 3 дня после).
                        </div>
                        <div class="description__button">
                            <button class="button  button_slider">СКОРЕЕ В КОРЗИНУ!</button>
                        </div>
                    </div>
                    <img src="img/main-page/slide.svg" alt="Slide Image" class="slide__img" style="width: 590px;height: 367px;background: gray;">
                </div>
                <div class="slider__slide slide layout">
                    <div class="slide__description description">
                        <div class="description__heading">Slide 4 Heading</div>
                        <div class="description__text">Предложение действует всю неделю, на которую выпал Ваш день
                            рождения (3 дня до, в день рождения и 3 дня после).
                        </div>
                        <div class="description__button">
                            <button class="button  button_slider">СКОРЕЕ В КОРЗИНУ!</button>
                        </div>
                    </div>
                    <img src="img/main-page/slide.svg" alt="Slide Image" class="slide__img" style="width: 590px;height: 367px;background: gray;">
                </div>
                <ul id="controls" class="slider__controls controls layout">
                    <li class="controls__circle">
                        <div class="circle circle_active"></div>
                    </li>
                    <li class="controls__circle">
                        <div class="circle"></div>
                    </li>
                    <li class="controls__circle">
                        <div class="circle"></div>
                    </li>
                    <li class="controls__circle">
                        <div class="circle"></div>
                    </li>
                </ul>
                <div id="prev" class="slider__prev"></div>
                <div id="next" class="slider__next"></div>
            </div>
        </div>
        <div class="main-page__info-list info-list">
            <div class="container__fixed container__fixed_adaptive layout">
                <div class="info-list__item layout">
                    <img src="img/main-page/info-slide1.svg" alt="Info Item" class="info-list__img">
                    <div class="info-list__info info">
                        <div class="info__heading">Свежие продукты</div>
                        <div class="info__text">Мы не подвергаем продукты долгому хранению</div>
                    </div>
                </div>
                <div class="info-list__item layout">
                    <img src="img/main-page/info-slide2.svg" alt="Info Item" class="info-list__img">
                    <div class="info-list__info info">
                        <div class="info__heading">Надежная доставка</div>
                        <div class="info__text">Разнообразное меню на любой вкус и кошелек</div>
                    </div>
                </div>
                <div class="info-list__item layout">
                    <img src="img/main-page/info-slide3.svg" alt="Info Item" class="info-list__img">
                    <div class="info-list__info info">
                        <div class="info__heading">Онлайн оплата</div>
                        <div class="info__text">Платите как Вам удобно - наличными или онлайн</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container__fixed container__fixed_adaptive">
            <div id="pizzaTab" class="main-page__pizza-slider pizza-slider">
                <ul id="pizzaTabNav" class="pizza-slider__branches branches layout">
                    <li class="branches__item branches__item_active"><a class="branches__link" href="#discounts">СКИДКИ</a></li>
                    <li class="branches__item"><a class="branches__link" href="#hits">ХИТЫ ПРОДАЖ</a></li>
                    <li class="branches__item"><a class="branches__link" href="#novelty">НОВИНКИ</a></li>
                    <li class="branches__item"><a class="branches__link" href="#recommend">РЕКОМЕНДУЕМЫЕ</a></li>
                </ul>
                <div id="discounts" class="pizza-slider__pizza-slides pizza-slides faded in active-tab">
                    <?php
                    $rollIcon = "20";
                    $rollImage = "./img/main-page/pizza5.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "20";
                    $rollImage = "./img/main-page/pizza2.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "";
                    $rollImage = "./img/main-page/pizza1.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "20";
                    $rollImage = "./img/main-page/pizza4.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "20";
                    $rollImage = "./img/main-page/pizza5.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "20";
                    $rollImage = "./img/main-page/pizza6.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "20";
                    $rollImage = "./img/main-page/pizza2.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "20";
                    $rollImage = "./img/main-page/pizza1.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                </div>
                <div id="hits" class="pizza-slider__pizza-slides faded pizza-slides">
                    <?php
                    $rollIcon = "hit";
                    $rollImage = "./img/main-page/pizza1.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "hit";
                    $rollImage = "./img/main-page/pizza2.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "hit";
                    $rollImage = "./img/main-page/pizza3.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "hit";
                    $rollImage = "./img/main-page/pizza4.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "";
                    $rollImage = "./img/main-page/pizza5.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "hit";
                    $rollImage = "./img/main-page/pizza6.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "";
                    $rollImage = "./img/main-page/pizza2.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "";
                    $rollImage = "./img/main-page/pizza1.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                </div>
                <div id="novelty" class="pizza-slider__pizza-slides faded pizza-slides">
                    <?php
                    $rollIcon = "new";
                    $rollImage = "./img/main-page/pizza6.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "new";
                    $rollImage = "./img/main-page/pizza5.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "new";
                    $rollImage = "./img/main-page/pizza3.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "new";
                    $rollImage = "./img/main-page/pizza4.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "";
                    $rollImage = "./img/main-page/pizza5.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "hit";
                    $rollImage = "./img/main-page/pizza6.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "";
                    $rollImage = "./img/main-page/pizza2.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "";
                    $rollImage = "./img/main-page/pizza1.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                </div>
                <div id="recommend" class="pizza-slider__pizza-slides faded pizza-slides">
                    <?php
                    $rollIcon = "hit";
                    $rollImage = "./img/main-page/pizza1.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "hit";
                    $rollImage = "./img/main-page/pizza2.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "hit";
                    $rollImage = "./img/main-page/pizza3.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "";
                    $rollImage = "./img/main-page/pizza4.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "";
                    $rollImage = "./img/main-page/pizza5.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "hit";
                    $rollImage = "./img/main-page/pizza6.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "";
                    $rollImage = "./img/main-page/pizza2.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                    <?php
                    $rollIcon = "";
                    $rollImage = "./img/main-page/pizza1.svg";
                    $rollLikes = "272";
                    $rollName = "Четыре сезона";
                    $rollDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
                    $rollWeight = "540 г.";
                    $rollPrice = "69 руб.";
                    include('./roll-slide.php');
                    ?>
                </div>
            </div>
        </div>
        <div class="main-page__reviews reviews">
            <div class="container__fixed container__fixed_adaptive">
                <div class="reviews__heading">Отзывы о нас</div>
                <div id="reviewSlider" class="reviews__review-slider review-slider layout">
                    <div class="default-slide active-slide">
                        <div class="review-slider__slide">
                            <div class="review-slider__name">Александра</div>
                            <div class="review-slider__text">Всё хорошо в этом магазине, вкусная еда, заказывали роллы,
                                остались очень довольны. Удобный сайт, онлайн-заказ производится очень быстро)<br> Развития
                                вам и побольше клиентов!
                            </div>
                            <div class="review-slider__mark layout">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            </div>
                        </div>
                        <div class="review-slider__slide hide-info-slide">
                            <div class="review-slider__name">Виктория</div>
                            <div class="review-slider__text">Впервые воспользовалась вашими услугами и осталась довольна,
                                оперативное принятие заказа, вежливость персонала, быстрая доставка и в особенности,
                                вкуснейшая еда.<br> Молодцы! Пожелание- увеличивайте ассортимент !!!!!!!!!!
                            </div>
                            <div class="review-slider__mark layout">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            </div>
                        </div>
                        <div class="review-slider__slide hide-info-slide">
                            <div class="review-slider__name">Александра</div>
                            <div class="review-slider__text">Спасибо большое за пиццы! Все нереально вкусно и главное
                                быстро :)<br>
                                Теперь только к Вам. Довольна вся семья :)
                            </div>
                            <div class="review-slider__mark layout">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            </div>
                        </div>
                    </div>
                    <div class="default-slide">
                        <div class="review-slider__slide">
                            <div class="review-slider__name">Виктория</div>
                            <div class="review-slider__text">Впервые воспользовалась вашими услугами и осталась довольна,
                                оперативное принятие заказа, вежливость персонала, быстрая доставка и в особенности,
                                вкуснейшая еда.<br> Молодцы! Пожелание- увеличивайте ассортимент !!!!!!!!!!
                            </div>
                            <div class="review-slider__mark layout">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            </div>
                        </div>
                        <div class="review-slider__slide hide-info-slide">
                            <div class="review-slider__name">Александра</div>
                            <div class="review-slider__text">Всё хорошо в этом магазине, вкусная еда, заказывали роллы,
                                остались очень довольны. Удобный сайт, онлайн-заказ производится очень быстро)<br> Развития
                                вам и побольше клиентов!
                            </div>
                            <div class="review-slider__mark layout">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            </div>
                        </div>
                        <div class="review-slider__slide hide-info-slide">
                            <div class="review-slider__name">Александра</div>
                            <div class="review-slider__text">Спасибо большое за пиццы! Все нереально вкусно и главное
                                быстро :)<br>
                                Теперь только к Вам. Довольна вся семья :)
                            </div>
                            <div class="review-slider__mark layout">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            </div>
                        </div>
                    </div>
                    <div class="default-slide">
                        <div class="review-slider__slide">
                            <div class="review-slider__name">Александра</div>
                            <div class="review-slider__text">Всё хорошо в этом магазине, вкусная еда, заказывали роллы,
                                остались очень довольны. Удобный сайт, онлайн-заказ производится очень быстро)<br> Развития
                                вам и побольше клиентов!
                            </div>
                            <div class="review-slider__mark layout">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            </div>
                        </div>
                        <div class="review-slider__slide hide-info-slide">
                            <div class="review-slider__name">Александра</div>
                            <div class="review-slider__text">Спасибо большое за пиццы! Все нереально вкусно и главное
                                быстро :)<br>
                                Теперь только к Вам. Довольна вся семья :)
                            </div>
                            <div class="review-slider__mark layout">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            </div>
                        </div>
                        <div class="review-slider__slide hide-info-slide">
                            <div class="review-slider__name">Виктория</div>
                            <div class="review-slider__text">Впервые воспользовалась вашими услугами и осталась довольна,
                                оперативное принятие заказа, вежливость персонала, быстрая доставка и в особенности,
                                вкуснейшая еда.<br> Молодцы! Пожелание- увеличивайте ассортимент !!!!!!!!!!
                            </div>
                            <div class="review-slider__mark layout">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            </div>
                        </div>
                    </div>
                    <div class="default-slide">
                        <div class="review-slider__slide">
                            <div class="review-slider__name">Александра</div>
                            <div class="review-slider__text">Спасибо большое за пиццы! Все нереально вкусно и главное
                                быстро :)<br>
                                Теперь только к Вам. Довольна вся семья :)
                            </div>
                            <div class="review-slider__mark layout">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            </div>
                        </div>
                        <div class="review-slider__slide hide-info-slide">
                            <div class="review-slider__name">Александра</div>
                            <div class="review-slider__text">Всё хорошо в этом магазине, вкусная еда, заказывали роллы,
                                остались очень довольны. Удобный сайт, онлайн-заказ производится очень быстро)<br> Развития
                                вам и побольше клиентов!
                            </div>
                            <div class="review-slider__mark layout">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            </div>
                        </div>
                        <div class="review-slider__slide hide-info-slide">
                            <div class="review-slider__name">Виктория</div>
                            <div class="review-slider__text">Впервые воспользовалась вашими услугами и осталась довольна,
                                оперативное принятие заказа, вежливость персонала, быстрая доставка и в особенности,
                                вкуснейшая еда.<br> Молодцы! Пожелание- увеличивайте ассортимент !!!!!!!!!!
                            </div>
                            <div class="review-slider__mark layout">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                                <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="prevReview" class="slider__prev"></div>
                <div id="nextReview" class="slider__next"></div>
                <ul id="reviewControls" class="reviews__review-controls review-controls layout">
                    <li class="review-controls__circle review-controls__circle_active"></li>
                    <li class="review-controls__circle"></li>
                    <li class="review-controls__circle"></li>
                    <li class="review-controls__circle"></li>
                </ul>
                <button class="reviews__button button  button_review">ОСТАВИТЬ ОТЗЫВ</button>
            </div>
        </div>
        <div class="main-page__rant rant">
            <div class="container__fixed container__fixed_adaptive layout adaptive-no-layout">
                <div class="rant__slogan">“Love Sushi & Pizza” <br>&nbsp;- это свежая еда и прекрасный сервис</div>
                <div class="rant__mini-slogans mini-slogans">
                    <div class="mini-slogans__slogan">
                        <span class="mini-slogans__title">Привозим быстро.</span>
                        <span class="mini-slogans__text">Горячие блюда должны оставаться горячими. Для этого при
                            транспортировке мы используем специальные термосумки и доставляем заказы всегда за 1 час.</span>
                    </div>
                    <div class="mini-slogans__slogan">
                        <span class="mini-slogans__title">Готовим из свежего.</span>
                        <span class="mini-slogans__text">Вкусная еда может получиться только из качественных
                            продуктов. Мы не экономим на ингридиентах и закупаем их у надежных партнеров.</span>
                    </div>
                    <div class="mini-slogans__slogan">
                        <span class="mini-slogans__title">Работаем для Вас.</span>
                        <span class="mini-slogans__text">По-настоящему ценим наших клиентов. Дарим скидки, проводим
                            акции и постоянно расширяем меню. Будем рады новым друзьям!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<!--  jQuery  -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
<script src="js/main-slider.js"></script>
<script src="js/review-slider.js"></script>
<script src="js/main-tab.js"></script>
</body>

</html>
