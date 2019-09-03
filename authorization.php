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

    <meta name="theme-color" content="#fafafa">
</head>

<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<div class="container">

    <header class="header container__header">
        <div class="container__fixed layout">
            <div class="logo header__logo layout">
                <img src="img/header/logo.svg" alt="Sushi And Pizza!" class="logo__img">
                <div class="logo__title">
                    <div class="logo__heading">LOVE <img src="img/header/logo46.svg" alt="Sushi And Pizza!" class="small-logo__img"> SUSHI
                    </div>
                    <div class="logo__subheading">Мы делаем жизнь вкуснее!</div>
                </div>
            </div>
            <div class="header__search">
                <a href="#" class="search-link"><img src="img/header/loupe.svg" alt="Поиск"
                                                     class="search-link__img"></a>
            </div>
            <div class="header__menu-icon">
                <img id="menu-icon" src="img/header/menu-icon.png" alt="" class="menu-icon">
            </div>
            <nav id="hiding-menu" class="header__menu hiding-menu">
                <div class="layout">
                    <div class="header__small-logo"><img src="img/header/logo46.svg" alt="Sushi And Pizza!" class="small-logo__img"></div>
                    <img id="close-hiding-menu" src="img/header/close.svg" alt="Close" class="header__close">
                </div>
                <ul class="menu layout">
                    <li class="menu__item"><a href="payment_and_delivery.php" class="menu__link">Оплата и доставка</a>
                    </li>
                    <li class="menu__item"><a href="bonuses.php" class="menu__link">Бонусы</a></li>
                    <li class="menu__item"><a href="promotions.php" class="menu__link">Акции</a></li>
                    <li class="menu__item"><a href="contacts.php" class="menu__link">Контакты</a></li>
                </ul>
            </nav>
            <div class="contact header__contact">
                <a class="contact__item contact__item_first" href="tel:053320420">0 (533) 20-4-20</a>
                <a class="contact__item" href="tel:77772244">0 (777) 7-22-44</a>
            </div>

        </div>
    </header>

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
            <span class="location__sub">Авторизация</span>
        </div>
    </div>

    <section class="container__authorization">
        <div class="container__wrap">
            <form action="" class="authorization authorization_phone">
                <div class="authorization__header">Авторизация</div>
                <div class="authorization__number number">
                    <div class="number__title">Номер мобильного телефона</div>
                    <input type="text" class="number__input field">
                </div>
                <button class="authorization__sms-button button">ПОЛУЧИТЬ КОД ПО SMS</button>
                <a href="#" class="authorization__footer">У меня есть пароль</a>
            </form>
            <form action="" class="authorization authorization_phone-password">
                <div class="authorization__header">Авторизация</div>
                <div class="authorization__number number">
                    <div class="number__title">Номер мобильного телефона</div>
                    <input type="text" class="number__input field">
                </div>
                <div class="authorization__password password">
                    <div class="password__title">Пароль:</div>
                    <input type="password" class="password__input field">
                    <a href="#" class="password__forgot">Забыли пароль?</a>
                </div>
                <button class="authorization__enter-button button">Войти</button>
            </form>
            <form action="" class="authorization authorization_forgot-password">
                <div class="authorization__header">Забыли пароль?</div>
                <div class="authorization__text">Введите адрес электронной почты вашей учетной записи.<br> Нажмите
                    кнопку
                    Продолжить, чтобы получить пароль по электронной почте.
                </div>
                <div class="authorization__email email">
                    <div class="email__title">E-mail:</div>
                    <input type="text" class="email__input field">
                </div>
                <button class="authorization__continue-button button">Продолжить</button>
            </form>
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
