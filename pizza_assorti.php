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
    <link rel="stylesheet" href="./css/pizza-department.css">
    <link rel="stylesheet" href="./css/pizza-page.css">
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
    $location2 = "Пицца";
    include('./location.php');
    ?>

    <section class="container__pizza-page pizza-page container__fixed container__fixed_adaptive">
        <?php
        $pizzaIcon = "pepper";
        $pizzaImage = "./img/pizza-page/pizza.svg";
        $pizzaLikes = "272";
        $pizzaName = "Пицца Ассорти";
        $pizzaDescription = "Красный соус, Моцарелла, Болгарский перец, Помидор, Копченая куриная грудка, Охотничьи колбаски, Бекон, Огурец соленый, Грибы, Лук. Зелень (петрушка) по просьбе клиента!!! ";
        $pizzaWeight = "540 г.";
        $pizzaPrice = "85 руб.";
        include('./pizza-card.php');
        ?>
        <div class="pizza-page__recommended recommended">
            <div class="recommended__heading">Рекомендуем</div>
            <div class=" recommended__pizzas pizzas">
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
    </section>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<!--  jQuery  -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
</body>

</html>
