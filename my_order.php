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
    <link rel="stylesheet" href="css/my-order.css">
    <link rel="stylesheet" href="css/chef-gift.css">

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
            <span class="location__sub">Акции</span>
        </div>
    </div>

    <div class="container__contacts-location contacts-location">
        <div class="container__fixed container__fixed_adaptive">
            <a href="authorization.php" class="contacts-location__link">Главная</a>
        </div>
    </div>

    <form class="container__my-order my-order container__fixed container__fixed_adaptive">
        <div class="my-order__heading">Мой заказ</div>
        <ul class="my-order__orders orders">
            <li class="orders__item order">
                <img src="img/my_order/pizza1.svg" alt="Pizza" class="order__img">
                <div class="order__description">
                    <div class="order__heading">Гавайская</div>
                    <div class="order__text">Куриное филе, сливочный соус, ананасы консерв., моцарелла.</div>
                </div>
                <div class="order__quantity quantity layout">
                    <div class="quantity__mns">-</div>
                    <div class="quantity__number">1</div>
                    <div class="quantity__pls">+</div>
                </div>
                <div class="order__price">69 руб.</div>
                <img src="img/my_order/cross.svg" alt="x" class="order__cancel">
            </li>
            <li class="orders__item order">
                <img src="img/my_order/pizza2.svg" alt="Pizza" class="order__img">
                <div class="order__description">
                    <div class="order__heading">Пицца Ассорти</div>
                    <div class="order__text">Красный соус, Моцарелла, Болгарский перец, Помидор, Копченая куриная грудка, Охотничьи
                        колбаски, Бекон, Огурец соленый, Грибы, Лук. </div>
                </div>
                <div class="order__quantity quantity layout">
                    <div class="quantity__mns">-</div>
                    <div class="quantity__number">2</div>
                    <div class="quantity__pls">+</div>
                </div>
                <div class="order__price">170 руб.</div>
                <img src="img/my_order/cross.svg" alt="x" class="order__cancel">
            </li>
            <li class="orders__item order">
                <img src="img/my_order/pizza3.svg" alt="Pizza" class="order__img">
                <div class="order__description">
                    <div class="order__heading">Пицца Греческая</div>
                    <div class="order__text">Красный соус, Моцарелла, Ветчина, Помидор, Болгарский перец, Маслины, Фета, Лук. Зелень.</div>
                </div>
                <div class="order__quantity quantity layout">
                    <div class="quantity__mns">-</div>
                    <div class="quantity__number">3</div>
                    <div class="quantity__pls">+</div>
                </div>
                <div class="order__price">225 руб.</div>
                <img src="img/my_order/cross.svg" alt="x" class="order__cancel">
            </li>
        </ul>
        <div class="my-order__ord-footer ord-footer layout">
            <div class="ord-footer__enter-promo layout">
                <input type="text" class="enter-promo" placeholder="Ввести промокод">
                <button type="button" class="button button_red button_arrow"><img src="img/my_order/right-arrow.svg" alt="->"></button>
            </div>
            <div class="layout">
                <div class="ord-footer__sum-text">Сумма заказа :</div>
                <div class="ord-footer__sum">464 руб.</div>
            </div>
        </div>
        <div class="my-order__submit"><button type="button" class="button button_red button_order">ОФОРМИТЬ ЗАКАЗ</button></div>
    </form>

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
