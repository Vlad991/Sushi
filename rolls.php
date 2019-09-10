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
    $location2 = "Роллы";
    include('./location.php');
    ?>

    <div id="pizzaTab" class="container__pizza-department pizza-department container__fixed container__fixed_adaptive">
        <div class="pizza-department__heading">Японская еда</div>
        <ul id="pizzaTabNav" class="pizza-department__sort-pizza sort-pizza">
            <li class="sort-pizza__item sort-pizza__item_no-hover">Сортировать:</li>
            <li class="sort-pizza__item sort-pizza__item_active"><a class="sort-pizza__link" href="#1">Все</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#2">Без авокадо</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#3">Без огурца</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#4">Без сыра</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#5">Без сырого</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#6">Классические роллы</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#7">Новинки</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#8">Острые</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#9">Премиум</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#10">С креветкой</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#11">С лососем</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#12">С сыром Филадельфия</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#13">С угрем</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#14">Теплые роллы</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#15">Хит продаж</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#16">Чиз маки</a></li>
            <li class="sort-pizza__item"><a class="sort-pizza__link" href="#17">Без рыбы</a></li>
        </ul>
        <div id="1" class="pizza-department__pizzas pizzas pizzas_novelty faded in active-tab">
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
        <div id="2" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="3" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="4" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="5" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="6" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="7" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="8" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="9" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="10" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="11" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="12" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="13" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="14" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="15" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="16" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
        <div id="17" class="pizza-department__pizzas pizzas pizzas_novelty faded">
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
