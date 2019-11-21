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
    $location2 = "Ассорти";
    $location3 = null;
    include('./location.php');
    ?>

    <div id="pizzaTab" class="container__pizza-department pizza-department container__fixed container__fixed_adaptive">
        <div class="pizza-department__heading">Ассорти</div>
        <ul id="pizzaTabNav" class="pizza-department__sort-pizza sort-pizza">
            <li class="sort-pizza__item sort-pizza__item_no-hover">Сортировать:</li>
            <li class="sort-pizza__item sort-pizza__item_active"><a class="sort-pizza__link" href="#all">Все</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#for23">Для 2-3 персон</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#for34">Для 3-4 персон</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#for56">Для 5-6 персон</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#forBig">Для большой компании</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#mix">Микс теплые+холодные</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#new">Новинки</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#setWarm">Сет из теплых</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#setCold">Сет из холодных</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#superPrice">Супер цена</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#hits">Хиты</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#combo">Комбо</a></li>
        </ul>
        <div id="all" class="pizza-department__pizzas pizzas pizzas_novelty faded in active-tab">
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
        <div id="for23" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
            $rollIcon = "new";
            $rollImage = "./img/main-page/roll1.svg";
            $rollLikes = "272";
            $rollName = "Балковский";
            $rollDescription = "Снежный краб, Креветка, Огурец, икра Масаго, Японский майонез.";
            $rollWeight = "220 г.";
            $rollPrice = "79 руб.";
            include('./roll-slide.php');
            ?>
        </div>
        <div id="for34" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
            $pizzaIcon = "hit";
            $pizzaImage = "./img/main-page/pizza1.svg";
            $pizzaLikes = "272";
            $pizzaName = "Четыре сезона";
            $pizzaDescription = "Ветчина, пикантная пепперони, томатный соус, кубики брынзы, шампиньоны, моцарелла, томаты и орегано";
            $pizzaWeight = "540 г.";
            $pizzaPrice = "69 руб.";
            include('./pizza-slide.php');
            ?>
        </div>
        <div id="for56" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="forBig" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="mix" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="new" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="setWarm" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="setCold" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="superPrice" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="hits" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="combo" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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


<!--  jQuery  -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
<script src="js/pizza-slider.js"></script>
<script src="js/departments-tab.js"></script>
</body>

</html>
