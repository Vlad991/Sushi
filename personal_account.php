<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!--  <link rel="stylesheet" href="css/normalize.css">-->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/personal_account.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
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


<script src="js/main.js"></script>
</body>

</html>
