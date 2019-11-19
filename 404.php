<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>404</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="./index.html">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/404.css">
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
    $location3 = null;
    include('./location.php');
    ?>

    <div class="container__page404 page404 container__fixed container__fixed_adaptive">
        <h1 class="page404__heading">404</h1>
        <img src="img/404/404.svg" alt="404" class="page404__img404">
        <img src="img/404/404-adaptive.svg" alt="404" class="page404__img404_adaptive">
        <p class="page404__text">Нам очень жаль,<br class="page404__br"> но страница, которую Вы ищете не найдена.<br class="page404__br"> Но не огорчайтесь, в нашем меню<br class="page404__br"> еще много вкусной еды!</p>
        <a href="./index.php" class="page404__return-button button button_return">ВЕРНУТЬСЯ НА ГЛАВНУЮ</a>
    </div>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<!--  jQuery  -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
</body>

</html>
