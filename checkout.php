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
    <link rel="stylesheet" href="css/checkout.css">

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

    <form class="container__checkout checkout container__fixed container__fixed_adaptive">
        <div class="checkout__heading">Оформление заказа</div>
        <div class="checkout__blank blank">
            <div class="blank__text">Авторизуйтесь на сайте, и мы сохраним всю информацию по заказу и автоматически
                заполним ваши контактные данные
            </div>
            <div class="blank__receiver-text"><label for="receiverName" type="text">Получатель:</label></div>
            <input type="text" id="receiverName" class="blank__receiver-name blank-input" placeholder="Имя*">
            <input type="text" id="receiverPhone" class="blank__receiver-phone blank-input"
                   placeholder="Контактный телефон*">
            <div class="blank__radio1 radio">
                <div><input id="delivery" type="radio" name="radio1" class="radio__item" checked><label for="delivery">Доставка</label>
                </div>
                <div><input id="takeYourself" type="radio" name="radio1" class="radio__item"><label for="takeYourself">Забрать
                    самому</label></div>
            </div>
            <div class="blank__address address">
                <input type="text" class="address__item blank-input" placeholder="Город*">
                <input type="text" class="address__item blank-input" placeholder="Улица*">
                <input type="text" class="address__item blank-input" placeholder="Дом*">
                <input type="text" class="address__item blank-input" placeholder="Квартира">
                <input type="text" class="address__item blank-input" placeholder="Подъезд">
                <input type="text" class="address__item blank-input" placeholder="Код двери">
            </div>
            <div class="blank__intercom-and-call layout">
                <div><input id="intercom" type="checkbox" class="blank__intercom"><label for="intercom">Домофон не
                    работает</label></div>
                <div><input id="no-call" type="checkbox" class="blank__no-call"><label for="no-call">Не
                    перезванивать</label></div>
            </div>
            <div class="blank__when">Когда выполнить заказ?</div>
            <div class="blank__radio2 radio">
                <div><input id="faster" type="radio" name="radio2" class="radio__item" checked><label for="faster">Как
                    можно быстрее</label></div>
                <div><input id="choseDate" type="radio" name="radio2" class="radio__item"><label for="choseDate">Выбрать
                    дату и время</label></div>
            </div>
            <div class="blank__payment">Способ оплаты:</div>
            <div class="blank__radio3 radio">
                <div><input id="cash" type="radio" name="radio3" class="radio__item" checked><label for="cash">Оплата
                    при получении наличными</label></div>
                <div><input id="cardReceipt" type="radio" name="radio3" class="radio__item"><label for="cardReceipt">Оплата
                    при получении картой Радуга</label></div>
                <div><input id="cardOnline" type="radio" name="radio3" class="radio__item"><label for="cardOnline">Оплата
                    картой Радуга онлайн</label></div>
                <div><input id="mobile" type="radio" name="radio3" class="radio__item"><label for="mobile">Оплата
                    мобильным платежом</label></div>
                <div><input id="auto" type="radio" name="radio3" class="radio__item"><label for="auto">Автоматический
                    платеж</label></div>
            </div>
            <label for="comment" class="blank__comment">Комментарий к заказу:</label>
            <textarea id="comment" class="blank__comment-input">Например (сдача с 500 рублей...)</textarea>
            <div class="blank__bonus"><input id="bonus" type="checkbox"><label for="bonus">Стать участником Бонусной
                программы</label></div>
        </div>
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
