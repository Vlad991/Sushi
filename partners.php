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
    $location2 = "Партнерская программа";
    $location3 = null;
    include('./location.php');
    ?>

    <div class="container__about about container__fixed container__fixed_adaptive" style="height: 1000px">
        <div class="container__heading">Партнерская программа</div>
        <div class="container__text">Партнерская программа Love Sushi&Pizza совершенно бесплатна и позволяет участникам получать дополнительный доход путём размещения ссылок как на весь наш магазин Love Sushi&Pizza, так и на отдельные товары. Каждая покупка, совершённая по партнерской ссылке, принесёт доход! Стандартный размер комиссии составляет 5%. За подробной информацией обращайтесь на страницу информации для партнеров.</div>
    </div>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<!--  jQuery  -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
</body>

</html>
