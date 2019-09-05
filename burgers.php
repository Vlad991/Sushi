<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Интернет магазин по доставке суши, пиццы и роллов в Тирасполе</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="./index.html">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/pizza-department.css">
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
    $location2 = "Бургеры и гриль";
    include('./location.php');
    ?>

    <div class="container__pizza-department pizza-department container__fixed container__fixed_adaptive">
        <div class="pizza-department__heading">Блюда на гриле</div>
        <ul class="pizza-department__sort-pizza sort-pizza">
            <li class="sort-pizza__item sort-pizza__item_no-hover">Сортировать:</li>
            <li class="sort-pizza__item sort-pizza__item_active">Все</li>
            <li class="sort-pizza__item">Мясные блюда</li>
            <li class="sort-pizza__item">Бургеры</li>
            <li class="sort-pizza__item">Закуски</li>
        </ul>
        <div class="pizza-department__pizzas pizzas">
            <?php
            $pizzaIcon = "20";
            $pizzaImage = "./img/main-page/pizza2.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaPrice = "69 руб.";
            include('./pizza-slide.php');
            ?>
            <?php
            $pizzaIcon = "20";
            $pizzaImage = "./img/main-page/pizza2.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaPrice = "69 руб.";
            include('./pizza-slide.php');
            ?>
            <?php
            $pizzaIcon = "20";
            $pizzaImage = "./img/main-page/pizza2.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaPrice = "69 руб.";
            include('./pizza-slide.php');
            ?>
            <?php
            $pizzaIcon = "20";
            $pizzaImage = "./img/main-page/pizza2.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaPrice = "69 руб.";
            include('./pizza-slide.php');
            ?>
            <?php
            $pizzaIcon = "20";
            $pizzaImage = "./img/main-page/pizza2.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaPrice = "69 руб.";
            include('./pizza-slide.php');
            ?>
            <?php
            $pizzaIcon = "20";
            $pizzaImage = "./img/main-page/pizza2.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaPrice = "69 руб.";
            include('./pizza-slide.php');
            ?>
            <?php
            $pizzaIcon = "20";
            $pizzaImage = "./img/main-page/pizza2.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaPrice = "69 руб.";
            include('./pizza-slide.php');
            ?>
            <?php
            $pizzaIcon = "20";
            $pizzaImage = "./img/main-page/pizza2.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaPrice = "69 руб.";
            include('./pizza-slide.php');
            ?>
        </div>
        <ul class="pizza-department__pagination pagination layout">
            <li class="pagination__item">
                <a href="#" class="pagination__link pagination__link_active">1</a>
            </li>
            <li class="pagination__item">
                <a href="#" class="pagination__link">2</a>
            </li>
            <li class="pagination__item">
                <a href="#" class="pagination__link">3</a>
            </li>
            <li class="pagination__item">
                <a href="#" class="pagination__link">4</a>
            </li>
            <li class="pagination__item">
                <a href="#" class="pagination__link"><img src="img/main-page/right-arrow.svg" alt=">" style="width:5px"></a>
            </li>
        </ul>
    </div>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<script src="js/main.js"></script>
</body>

</html>
