<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="img/header/logo.svg">
    <!-- Place favicon.ico in the root directory -->

    <!--  <link rel="stylesheet" href="css/normalize.css">-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/my-order.css">
    <link rel="stylesheet" href="css/chef-gift.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<div class="container">

    <!-- Header -->
    <?php include('./header.php'); ?>

    <!-- Navigation -->
    <?php include('./navigation.php'); ?>

    <!-- Location -->
    <?php
    $location1 = "Главная";
    $location2 = "Мой заказ";
    include('./location.php');
    ?>

    <form class="container__my-order my-order container__fixed container__fixed_adaptive">
        <div class="my-order__heading">Мой заказ</div>
        <ul class="my-order__orders orders">
            <li class="orders__item order">
                <img src="img/my_order/pizza1.svg" alt="Pizza" class="order__img">
                <div class="order__description">
                    <div class="order__heading">Гавайская</div>
                    <div class="order__text">Куриное филе, сливочный соус, ананасы консерв., моцарелла.</div>
                </div>
                <div class="order__quantity quantity layout">
                    <div class="quantity__mns">-</div>
                    <div class="quantity__number">1</div>
                    <div class="quantity__pls">+</div>
                </div>
                <div class="order__price">69 руб.</div>
                <img src="img/my_order/cross.svg" alt="x" class="order__cancel">
            </li>
            <li class="orders__item order">
                <img src="img/my_order/pizza2.svg" alt="Pizza" class="order__img">
                <div class="order__description">
                    <div class="order__heading">Пицца Ассорти</div>
                    <div class="order__text">Красный соус, Моцарелла, Болгарский перец, Помидор, Копченая куриная грудка, Охотничьи
                        колбаски, Бекон, Огурец соленый, Грибы, Лук. </div>
                </div>
                <div class="order__quantity quantity layout">
                    <div class="quantity__mns">-</div>
                    <div class="quantity__number">2</div>
                    <div class="quantity__pls">+</div>
                </div>
                <div class="order__price">170 руб.</div>
                <img src="img/my_order/cross.svg" alt="x" class="order__cancel">
            </li>
            <li class="orders__item order">
                <img src="img/my_order/pizza3.svg" alt="Pizza" class="order__img">
                <div class="order__description">
                    <div class="order__heading">Пицца Греческая</div>
                    <div class="order__text">Красный соус, Моцарелла, Ветчина, Помидор, Болгарский перец, Маслины, Фета, Лук. Зелень.</div>
                </div>
                <div class="order__quantity quantity layout">
                    <div class="quantity__mns">-</div>
                    <div class="quantity__number">3</div>
                    <div class="quantity__pls">+</div>
                </div>
                <div class="order__price">225 руб.</div>
                <img src="img/my_order/cross.svg" alt="x" class="order__cancel">
            </li>
        </ul>
        <div class="my-order__ord-footer ord-footer layout">
            <div class="ord-footer__enter-promo layout">
                <input type="text" class="enter-promo" placeholder="Ввести промокод">
                <button type="button" class="button  button_arrow"><img src="img/my_order/right-arrow.svg" alt="->"></button>
            </div>
            <div class="layout">
                <div class="ord-footer__sum-text">Сумма заказа :</div>
                <div class="ord-footer__sum">464 руб.</div>
            </div>
        </div>
        <div class="my-order__submit"><button type="button" class="button  button_order">ОФОРМИТЬ ЗАКАЗ</button></div>
    </form>

    <?php include('./chef-gift.php'); ?>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<script src="js/main.js"></script>
</body>

</html>
