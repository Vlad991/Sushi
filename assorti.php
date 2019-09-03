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
    <link rel="stylesheet" href="./css/pizza-department.css">

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
    $location2 = "Ассорти";
    include('./location.php');
    ?>

    <div class="container__pizza-department pizza-department container__fixed container__fixed_adaptive">
        <div class="pizza-department__heading">Новые роллы, пиццы, бургеры и другие новинки нашего меню.</div>
        <ul class="pizza-department__sort-pizza sort-pizza">
            <li class="sort-pizza__item sort-pizza__item_no-hover">Сортировать:</li>
            <li class="sort-pizza__item sort-pizza__item_active">Все</li>
            <li class="sort-pizza__item">Для 2-3 персон</li>
            <li class="sort-pizza__item">Для 3-4 персон</li>
            <li class="sort-pizza__item">Для 5-6 персон</li>
            <li class="sort-pizza__item">Для большой компании</li>
            <li class="sort-pizza__item">Микс теплые+холодные</li>
            <li class="sort-pizza__item">Новинки</li>
            <li class="sort-pizza__item">Сет из теплых</li>
            <li class="sort-pizza__item">Сет из холодных</li>
            <li class="sort-pizza__item">Супер цена</li>
            <li class="sort-pizza__item">Хиты</li>
            <li class="sort-pizza__item">Комбо</li>
        </ul>
        <div class="pizza-department__pizzas pizzas pizzas_novelty">
            <?php
            $rollIcon = "new";
            $rollImage = "./img/main-page/roll1.svg";
            $rollLikes = "272";
            $rollName = "Балковский";
            $rollDescription = "Снежный краб, Креветка, Огурец, икра Масаго, Японский майонез.";
            $rollWeight = "220 г.";
            $rollPrice = "79 руб.";
            include('./roll-slide.php');
            ?>
            <?php
            $pizzaIcon = "hit";
            $pizzaImage = "./img/main-page/pizza1.svg";
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
            $pizzaIcon = "pepper";
            $pizzaImage = "./img/main-page/pizza6.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaOldPrice = "678 руб.";
            $pizzaPrice = "569 руб.";
            include('./pizza-slide-3.php');
            ?>
            <?php
            $pizzaIcon = "";
            $pizzaImage = "./img/main-page/pizza4.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaPrice = "69 руб.";
            include('./pizza-slide.php');
            ?>
            <?php
            $pizzaIcon = "";
            $pizzaImage = "./img/main-page/pizza5.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaPrice = "69 руб.";
            include('./pizza-slide.php');
            ?>
            <?php
            $pizzaIcon = "";
            $pizzaImage = "./img/main-page/pizza6.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaOldPrice = "678 руб.";
            $pizzaPrice = "569 руб.";
            include('./pizza-slide-3.php');
            ?>
            <?php
            $pizzaIcon = "";
            $pizzaImage = "./img/main-page/pizza1.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaPrice = "69 руб.";
            include('./pizza-slide-2.php');
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

<script src="https://www.google-analytics.com/analytics.js" async></script>
<script src="js/main.js"></script>
</body>

</html>
