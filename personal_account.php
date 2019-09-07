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
        <div class="personal-account__body">
            <ul class="personal-account__acc-menu acc-menu">
                <li class="acc-menu__item">История заказов</li>
                <li class="acc-menu__item">Бонусные баллы</li>
                <li class="acc-menu__item acc-menu__item_active">Личные данные</li>
                <li class="acc-menu__item">Адреса доставки</li>
                <li class="acc-menu__item">Карта Радуга</li>
                <li class="acc-menu__item">Пароль</li>
                <li class="acc-menu__item">Выйти</li>
            </ul>
            <div class="personal-account__info-data">
                <?php include("personal_data.php") ?>
            </div>
            <div class="personal-account__info-data">
                <?php include("delivery_address.php") ?>
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
