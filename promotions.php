<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="img/header/logo.svg">
    <!-- Place favicon.ico in the root directory -->

    <!--  <link rel="stylesheet" href="css/normalize.css">-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/promotions.css">

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
    $location2 = "Акции";
    include('./location.php');
    ?>

    <section class="container__promotions promotions">
        <div class="container__fixed container__fixed_adaptive">
            <header class="promotions__header">Акции</header>
            <div class="promotions__slider">
                <nav class="slider layout">
                    <a href="./404.php" class="slide">
                        <div class="slide__header slide__header_1">
                            <div class="slide__heading">Сет Мини именинникам<br> в подарок!</div>
                        </div>
                        <div class="slide__article">
                            <div class="slide__article-title">Сет Мини в подарок на день рождения!</div>
                            <div class="slide__text">Всем именинникам дарим сет Мини к заказам от 500 рублей по
                                промокоду : d200<br>Предложение действует всю неделю, на которую выпал Ваш день рождения
                                (3 дня до, в день рождения и 3 дня после).
                            </div>
                        </div>
                    </a>
                    <a href="./404.php" class="slide">
                        <div class="slide__header slide__header_2">
                            <div class="slide__heading slide__heading_black">Счастливые часы!</div>
                        </div>
                        <div class="slide__article">
                            <div class="slide__article-title">Счастливые часы - Скидка 20% на всю пиццу!</div>
                            <div class="slide__text">Мы предоставляем скидку 20% на пиццу с 12.00 до 16.00 с
                                Понедельника по Четверг, кроме праздников и выходных!<br>Промокод: h100
                            </div>
                        </div>
                    </a>
                    <a href="./404.php" class="slide">
                        <div class="slide__header slide__header_3">
                            <div class="slide__heading"></div>
                        </div>
                        <div class="slide__article">
                            <div class="slide__article-title">Каждую неделю дарим СЕТ ХИТ !</div>
                            <div class="slide__text">Дорогие друзья! Мы объявляем еженедельный конкурс в нашем
                                сообществе
                                ВКОНТАКТЕ!
                            </div>
                        </div>
                    </a>
                    <a href="./404.php" class="slide">
                        <div class="slide__header slide__header_3">
                            <div class="slide__heading"></div>
                        </div>
                        <div class="slide__article">
                            <div class="slide__article-title">Каждую неделю дарим СЕТ ХИТ !</div>
                            <div class="slide__text">Дорогие друзья! Мы объявляем еженедельный конкурс в нашем
                                сообществе
                                ВКОНТАКТЕ!
                            </div>
                        </div>
                    </a>
                    <a href="./404.php" class="slide">
                        <div class="slide__header slide__header_1">
                            <div class="slide__heading">Сет Мини именинникам<br> в подарок!</div>
                        </div>
                        <div class="slide__article">
                            <div class="slide__article-title">Сет Мини в подарок на день рождения!</div>
                            <div class="slide__text">Всем именинникам дарим сет Мини к заказам от 500 рублей по
                                промокоду : d200<br>Предложение действует всю неделю, на которую выпал Ваш день рождения
                                (3 дня до, в день рождения и 3 дня после).
                            </div>
                        </div>
                    </a>
                    <a href="./404.php" class="slide">
                        <div class="slide__header slide__header_2">
                            <div class="slide__heading slide__heading_black">Счастливые часы!</div>
                        </div>
                        <div class="slide__article">
                            <div class="slide__article-title">Счастливые часы - Скидка 20% на всю пиццу!</div>
                            <div class="slide__text">Мы предоставляем скидку 20% на пиццу с 12.00 до 16.00 с
                                Понедельника по Четверг, кроме праздников и выходных!<br> Промокод: h100
                            </div>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
<script src="js/main.js"></script>
</body>

</html>
