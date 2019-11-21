<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Интернет магазин по доставке суши, пиццы и роллов в Тирасполе</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="./index.html">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>

    <!-- Styles -->
    <?php include('./styles.php'); ?>
</head>

<body>
<div class="container">

    <!-- Header -->
    <?php include('./header.php'); ?>

    <!-- Navigation -->
    <?php include('./navigation.php'); ?>

    <!-- Location -->
    <?php
    $location1 = "Главная";
    $location2 = "Бонусы";
    $location3 = null;
    include('./location.php');
    ?>

    <section class="container__bonuses bonuses">
        <div class="container__fixed container__fixed_adaptive">
            <h1 class="container__heading">Бонусы</h1>
        </div>
        <header class="bonuses__bonuses-header bonuses-header">
            <div class="bonuses-header__heading">Бонусная программа<br> Love Sushi&pizza</div>
            <div class="bonuses-header__paragraph">Вовзвращаем до 10% от каждой покупки</div>
            <div class="bonuses-header__paragraph">Бонусными баллами можно оплатить всю стоимость Вашего заказа</div>
        </header>
        <div class="container__fixed container__fixed_adaptive">
            <div class="bonuses__how-it-works how-it-works">
                <div class="how-it-works__heading">Как это работает?</div>
                <ul class="how-it-works__order order layout">
                    <li class="order__item">
                        <img src="img/bonuses/icon1.svg" alt="" class="order__img">
                        <div class="order__action">Делайте заказ на сайте, в приложении или ресторане</div>
                    </li>
                    <li class="order__item order__item_small">
                        <img src="img/bonuses/arrow.svg" alt=">" class="order__arrow">
                    </li>
                    <li class="order__item">
                        <img src="img/bonuses/icon2.svg" alt="" class="order__img">
                        <div class="order__action">Накапливайте баллы за каждую покупку</div>
                    </li>
                    <li class="order__item order__item_small">
                        <img src="img/bonuses/arrow.svg" alt=">" class="order__arrow">
                    </li>
                    <li class="order__item">
                        <img src="img/bonuses/icon3.svg" alt="" class="order__img">
                        <div class="order__action">Оплачивайте покупку баллами</div>
                    </li>
                </ul>
                <h2 class="how-it-works__title">Как заработать?</h2>
                <p class="how-it-works__paragraph">Совершайте покупки.<br>До 10% от каждой покупки через сайт или приложение вернется автоматически.<br> Каждому клиенту при регистрации на сайте или в мобильном приложении автоматически открывается собственный бонусный счет, на который с каждым заказом будут начисляться бонусы за покупки.</p>
                <h2 class="how-it-works__title">Как потратить?</h2>
                <p class="how-it-works__paragraph">Бонусы действуют только в случае оформления заказа на сайте или в приложении.</p>
                <h2 class="how-it-works__title">Накопительная система</h2>
                <p class="how-it-works__paragraph">Вам присваивается ранг, который зависит от общей суммы заказов:<br>Ранг №1 до 1999 руб. - 5%<br>Ранг №2 2000-2999 руб. - 7%<br>Ранг №3 от 3000 руб. - 10%</p>
                <ul class="how-it-works__remark-list">
                    <li class="remark-list__item">Бонусы начисляются по факту обработки и доставки заказа</li>
                    <li class="remark-list__item">Бонусами нельзя оплатить напитки и стоимость доставки</li>
                    <li class="remark-list__item">ПРИ ОТСУТСТВИИ ЗАКАЗОВ НА ПРОТЯЖЕНИИ 6 МЕСЯЦЕВ(180 дней) - БОНУСНЫЕ БАЛЛЫ АННУЛИРУЮТСЯ!</li>
                    <li class="remark-list__item">При списании бонусных баллов, высчитывается разница по формуле «Баллы за заказ» - «Списываемые баллы» = остаток, который поступает на счет.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<!--  jQuery  -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
</body>

</html>
