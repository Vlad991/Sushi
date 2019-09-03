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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bonuses.css">

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

    <!--    <div class="container__search-block search-block">-->
    <!--        <div class="search-block__heading">Поиск</div>-->
    <!--        <div class="search-block__search-form">-->
    <!--            <form action="" class="search-form">-->
    <!--                <input type="text" class="search-form__input" placeholder="Что Вы ищете?">-->
    <!--                <button class="search-form__loupe"><img src="img/search-form/loupe.svg" alt="" class="search-form__img"></button>-->
    <!--            </form>-->
    <!--        </div>-->
    <!--    </div>-->

    <nav id="nav-menu" class="container__adaptive-navigation adaptive-navigation">
        <div class="container__fixed_adaptive">
            <ul class="adaptive-navigation layout">
                <li class="adaptive-navigation__item">
                    <a href="" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav1.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Новинки</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav2.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Ассорти</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav3.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Премиум</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav4.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Роллы</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav5.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Суши</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav6.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Пицца</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav7.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Wok</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav8.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Бургер и гриль</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav9.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Салаты</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav10.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Не забыть</div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navigation container__navigation container__sticky">
        <div class="container__fixed layout">
            <div id="nav-menu-icon" class="navigation__nav-menu-icon nav-menu-icon">
                <img src="img/header/nav-menu-icon.svg" alt="" class="nav-menu-icon__img">
                <div class="nav-menu-icon__title">Наше меню</div>
            </div>
            <div class="navigation__menu">
                <ul class="menu layout menu_nav">
                    <li class="menu__item menu__item_nav"><a href="" class="menu__link menu__link_nav">НОВИНКИ</a></li>
                    <li class="menu__item menu__item_nav"><a href="" class="menu__link menu__link_nav">АССОРТИ</a></li>
                    <li class="menu__item menu__item_nav"><a href="" class="menu__link menu__link_nav">ПРЕМИУМ</a></li>
                    <li class="menu__item menu__item_nav"><a href="" class="menu__link menu__link_nav">РОЛЛЫ</a></li>
                    <li class="menu__item menu__item_nav"><a href="" class="menu__link menu__link_nav">СУШИ</a></li>
                    <li class="menu__item menu__item_nav"><a href="" class="menu__link menu__link_nav">ПИЦЦА</a></li>
                    <li class="menu__item menu__item_nav"><a href="" class="menu__link menu__link_nav">WOK</a></li>
                    <li class="menu__item menu__item_nav"><a href="" class="menu__link menu__link_burgers menu__link_nav">БУРГЕРЫ И ГРИЛЬ</a></li>
                    <li class="menu__item menu__item_nav"><a href="" class="menu__link menu__link_nav">САЛАТЫ</a></li>
                    <li class="menu__item menu__item_nav"><a href="" class="menu__link menu__link_nav menu__link_dont-forget">НЕ ЗАБЫТЬ</a></li>
                </ul>
            </div>
            <div class="enter navigation__enter layout">
                <a href="" class="search">Поиск</a>
                <a href="#" class="login">Войти</a>
                <a href="#" class="basket layout">
                    <div class="basket__img-wrap">
                        <img src="img/header/basket.svg" alt="Корзина" class="basket__img">
                    </div>
                    <div class="basket__amount">1 185 р.</div>
                </a>
            </div>
        </div>
    </nav>

    <div class="location container__location">
        <div class="container__fixed">
            <span class="location__main">Главная</span>
            <span class="location__slash">/</span>
            <span class="location__sub">Бонусы</span>
        </div>
    </div>

    <div class="container__contacts-location contacts-location">
        <div class="container__fixed container__fixed_adaptive">
            <a href="authorization.php" class="contacts-location__link">Главная</a>
        </div>
    </div>

    <section class="container__bonuses bonuses">
        <div class="container__fixed container__fixed_adaptive">
            <h1 class="bonuses__heading">Бонусы</h1>
        </div>
        <header class="bonuses__bonuses-header bonuses-header">
            <div class="bonuses-header__heading">Бонусная программа<br> Love Sushi&pizza</div>
            <div class="bonuses-header__paragraph">Вовзвращаем до 10% от каждой покупки</div>
            <div class="bonuses-header__paragraph">Бонусными баллами можно оплатить всю стоимость Вашего заказа</div>
        </header>
        <div class="container__fixed container__fixed_adaptive">
            <div class="bonuses__how-it-works how-it-works">
                <div class="how-it-works__heading">Как это работает?</div>
                <ul class="how-it-works__order order layout">
                    <li class="order__item">
                        <img src="img/bonuses/icon1.svg" alt="" class="order__img">
                        <div class="order__action">Делайте заказ на сайте, в приложении или ресторане</div>
                    </li>
                    <li class="order__item order__item_small">
                        <img src="img/bonuses/arrow.svg" alt=">" class="order__arrow">
                    </li>
                    <li class="order__item">
                        <img src="img/bonuses/icon2.svg" alt="" class="order__img">
                        <div class="order__action">Накапливайте баллы за каждую покупку</div>
                    </li>
                    <li class="order__item order__item_small">
                        <img src="img/bonuses/arrow.svg" alt=">" class="order__arrow">
                    </li>
                    <li class="order__item">
                        <img src="img/bonuses/icon3.svg" alt="" class="order__img">
                        <div class="order__action">Оплачивайте покупку баллами</div>
                    </li>
                </ul>
                <h2 class="how-it-works__title">Как заработать?</h2>
                <p class="how-it-works__paragraph">Совершайте покупки.<br>До 10% от каждой покупки через сайт или приложение вернется автоматически.<br> Каждому клиенту при регистрации на сайте или в мобильном приложении автоматически открывается собственный бонусный счет, на который с каждым заказом будут начисляться бонусы за покупки.</p>
                <h2 class="how-it-works__title">Как потратить?</h2>
                <p class="how-it-works__paragraph">Бонусы действуют только в случае оформления заказа на сайте или в приложении.</p>
                <h2 class="how-it-works__title">Накопительная система</h2>
                <p class="how-it-works__paragraph">Вам присваивается ранг, который зависит от общей суммы заказов:<br>Ранг №1 до 1999 руб. - 5%<br>Ранг №2 2000-2999 руб. - 7%<br>Ранг №3 от 3000 руб. - 10%</p>
                <ul class="how-it-works__remark-list">
                    <li class="remark-list__item">Бонусы начисляются по факту обработки и доставки заказа</li>
                    <li class="remark-list__item">Бонусами нельзя оплатить напитки и стоимость доставки</li>
                    <li class="remark-list__item">ПРИ ОТСУТСТВИИ ЗАКАЗОВ НА ПРОТЯЖЕНИИ 6 МЕСЯЦЕВ(180 дней) - БОНУСНЫЕ БАЛЛЫ АННУЛИРУЮТСЯ!</li>
                    <li class="remark-list__item">При списании бонусных баллов, высчитывается разница по формуле «Баллы за заказ» - «Списываемые баллы» = остаток, который поступает на счет.</li>
                </ul>
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
