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
    <link rel="stylesheet" href="css/contacts.css">

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
            <span class="location__sub">Контакты</span>
        </div>
    </div>

    <div class="container__contacts-location contacts-location">
        <div class="container__fixed container__fixed_adaptive">
            <a href="authorization.php" class="contacts-location__link">Главная</a>
        </div>
    </div>

    <section class="container__contacts contacts">
        <div class="container__fixed container__fixed_adaptive">
            <div class="contacts__header">Контакты</div>
            <div class="contacts__communication-points communication-points">
                <div class="communication-points__item communication-points__item_first">
                    <img src="img/contacts/point1.svg" alt="" class="communication-point__img">
                    <div class="communication-point__text communication-point__text_first">
                        <div class="communication-point__title">Наш адрес:</div>
                        <div class="communication-point__point">г. Тирасполь, ул. 1 Мая, 2</div>
                    </div>
                </div>
                <div class="communication-points__item communication-points__item_second">
                    <img src="img/contacts/point2.svg" alt="" class="communication-point__img">
                    <div class="communication-point__text communication-point__text_second">
                        <div class="communication-point__title">Телефон:</div>
                        <div class="communication-point__point">0 (533) 20-4-20, 0 (777) 7-22-44</div>
                    </div>
                </div>
                <div class="communication-points__item communication-points__item_third">
                    <img src="img/contacts/point3.svg" alt="" class="communication-point__img">
                    <div class="communication-point__text communication-point__text_third">
                        <div class="communication-point__title">E-mail:</div>
                        <div class="communication-point__point">zakaz@love-sushi.org</div>
                    </div>
                </div>
                <div class="communication-points__item communication-points__item_fourth">
                    <img src="img/contacts/point4.svg" alt="" class="communication-point__img">
                    <div class="communication-point__text communication-point__text_fourth">
                        <div class="communication-point__title">Время работы:</div>
                        <div class="communication-point__point">с 11:00 до 23:00</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container__map">
        <div id="map" class="map"></div>
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
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {lat: 46.8309549, lng: 29.6167622};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {
                zoom: 17,
                center: uluru
            });
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbe_pjG--7Tm9BJL5m4rHeSfWFsJ8seUI&callback=initMap">
</script>
<script src="js/main.js"></script>
</body>

</html>