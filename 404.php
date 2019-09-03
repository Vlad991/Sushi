<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>404</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="img/header/logo.svg">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/404.css">

    <meta name="theme-color" content="#fafafa">
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
    $location2 = "404";
    include('./location.php');
    ?>

    <div class="container__page404 page404 container__fixed container__fixed_adaptive">
        <h1 class="page404__heading">404</h1>
        <img src="img/404/404.svg" alt="404" class="page404__img404">
        <img src="img/404/404-adaptive.svg" alt="404" class="page404__img404_adaptive">
        <p class="page404__text">Нам очень жаль,<br class="page404__br"> но страница, которую Вы ищете не найдена.<br class="page404__br"> Но не огорчайтесь, в нашем меню<br class="page404__br"> еще много вкусной еды!</p>
        <a href="authorization.php" class="page404__return-button button button_return">ВЕРНУТЬСЯ НА ГЛАВНУЮ</a>
    </div>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<script src="js/main.js"></script>
</body>

</html>
