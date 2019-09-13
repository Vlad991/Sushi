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
    <link rel="stylesheet" href="./css/personal_account.css">
    <link rel="stylesheet" href="./css/my-order.css">
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
    $location2 = "Партнеры";
    include('./location.php');
    ?>

    <section class="container__personal-account personal-account container__fixed container__fixed_adaptive">
        <div class="personal-account__heading container__heading">Личный кабинет</div>
        <div id="personalAccountTab" class="personal-account__body">
            <ul id="personalAccountTabNav" class="personal-account__acc-menu acc-menu">
                <li class="acc-menu__item"><a class="acc-menu__link" href="#1">История заказов</a></li>
                <li class="acc-menu__item"><a class="acc-menu__link" href="#2">Бонусные баллы</a></li>
                <li class="acc-menu__item"><a class="acc-menu__link" href="#3">Личные данные</a></li>
                <li class="acc-menu__item"><a class="acc-menu__link" href="#4">Адреса доставки</a></li>
                <li class="acc-menu__item"><a class="acc-menu__link" href="#5">Карта Радуга</a></li>
                <li class="acc-menu__item"><a class="acc-menu__link" href="#6">Пароль</a></li>
                <li class="acc-menu__item"><a class="acc-menu__link" href="./index.php">Выйти</a></li>
            </ul>
            <div id="1" class="personal-account__info-data faded">
                <?php include("./order_history.php") ?>
            </div>
            <div id="2" class="personal-account__info-data faded">
                <?php include("./delivery_address.php") ?>
            </div>
            <div id="3" class="personal-account__info-data faded">
                <?php include("./personal_data.php") ?>
            </div>
            <div id="4" class="personal-account__info-data faded">
                <?php include("./delivery_address.php") ?>
            </div>
            <div id="5" class="personal-account__info-data faded">
                <?php include("./card_rainbow.php") ?>
            </div>
            <div id="6" class="personal-account__info-data faded">
                <?php include("./delivery_address.php") ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<!--  jQuery  -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
<script src="js/personal-account-tab.js"></script>
</body>

</html>
