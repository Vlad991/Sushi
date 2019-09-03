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
    <link rel="stylesheet" href="css/pizza-department.css">

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
                    <li class="menu__item menu__item_nav"><a href=""
                                                             class="menu__link menu__link_burgers menu__link_nav">БУРГЕРЫ
                        И ГРИЛЬ</a></li>
                    <li class="menu__item menu__item_nav"><a href="" class="menu__link menu__link_nav">САЛАТЫ</a></li>
                    <li class="menu__item menu__item_nav"><a href=""
                                                             class="menu__link menu__link_nav menu__link_dont-forget">НЕ
                        ЗАБЫТЬ</a></li>
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

    <div class="container__email-not-found email-not-found">
        <div class="container__fixed">
            <div class="email-not-found__message">E-Mail адрес не найден, проверьте и попробуйте ещё раз!</div>
        </div>
    </div>

    <div class="container__new-password-sended new-password-sended">
        <div class="container__fixed">
            <div class="new-password-sended__message">Новый пароль был выслан на ваш E-mail</div>
        </div>
    </div>

    <div class="location container__location">
        <div class="container__fixed">
            <span class="location__main">Главная</span>
            <span class="location__slash">/</span>
            <span class="location__sub">Пицца</span>
        </div>
    </div>

    <div class="container__pizza-department pizza-department container__fixed container__fixed_adaptive">
        <div class="pizza-department__heading">Пицца</div>
        <ul class="pizza-department__sort-pizza sort-pizza layout">
            <li class="sort-pizza__item">Сортировать:</li>
            <li class="sort-pizza__item">Все</li>
            <li class="sort-pizza__item sort-pizza__item_active">Новинка</li>
            <li class="sort-pizza__item">Острое</li>
            <li class="sort-pizza__item">Вегетарианское</li>
            <li class="sort-pizza__item">Хит</li>
        </ul>
        <div class="pizza-department__pizzas pizzas">
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
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
