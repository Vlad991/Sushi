<nav class="navigation container__navigation container__sticky">
    <div class="container__fixed layout">
        <div id="nav-menu-icon" class="navigation__nav-menu-icon nav-menu-icon">
            <img src="./img/header/nav-menu-icon.svg" alt="" class="nav-menu-icon__img">
            <div class="nav-menu-icon__title">Наше меню</div>
        </div>
        <div class="navigation__menu">
            <ul class="menu layout menu_nav">
                <li class="menu__item menu__item_nav"><a href="./novelty.php" class="menu__link menu__link_nav">НОВИНКИ</a></li>
                <li class="menu__item menu__item_nav"><a href="./assorti.php" class="menu__link menu__link_nav">АССОРТИ</a></li>
                <li class="menu__item menu__item_nav"><a href="./premium.php" class="menu__link menu__link_nav">ПРЕМИУМ</a></li>
                <li class="menu__item menu__item_nav"><a href="./rolls.php" class="menu__link menu__link_nav">РОЛЛЫ</a></li>
                <li class="menu__item menu__item_nav"><a href="./sushi.php" class="menu__link menu__link_nav">СУШИ</a></li>
                <li class="menu__item menu__item_nav"><a href="./pizza.php" class="menu__link menu__link_nav">ПИЦЦА</a></li>
                <li class="menu__item menu__item_nav"><a href="./wok.php" class="menu__link menu__link_nav">WOK</a></li>
                <li class="menu__item menu__item_nav"><a href="./burgers.php" class="menu__link menu__link_burgers menu__link_nav">БУРГЕРЫ И ГРИЛЬ</a></li>
                <li class="menu__item menu__item_nav"><a href="./salads.php" class="menu__link menu__link_nav">САЛАТЫ</a></li>
                <li class="menu__item menu__item_nav"><a href="./drinks.php" class="menu__link menu__link_nav menu__link_dont-forget">НЕ ЗАБЫТЬ</a></li>
            </ul>
        </div>
        <div class="enter navigation__enter layout">
            <div id="searchIconOpen" class="search">Поиск</div>
            <a href="./authorization.php" class="login">Войти</a>
            <a href="./my_order.php" class="basket layout">
                <div class="basket__img-wrap">
                    <img src="img/header/basket.svg" alt="Корзина" class="basket__img">
                </div>
                <div class="basket__amount">1 185 р.</div>
            </a>
        </div>
    </div>
</nav>

<div id="searchBlock" class="hide">
    <?php include("./search-block.php"); ?>
</div>

<nav id="nav-menu" class="container__adaptive-navigation hide">
    <div class="adaptive-navigation">
        <div class="container__fixed_adaptive">
            <ul class="adaptive-navigation layout">
                <li class="adaptive-navigation__item">
                    <a href="./novelty.php" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav1.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Новинки</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="./assorti.php" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav2.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Ассорти</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="./premium.php" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav3.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Премиум</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="./rolls.php" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav4.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Роллы</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="./sushi.php" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav5.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Суши</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="./pizza.php" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav6.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Пицца</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="./wok.php" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav7.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Wok</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="./burgers.php" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav8.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Бургер и гриль</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="./salads.php" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav9.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Салаты</div>
                    </a>
                </li>
                <li class="adaptive-navigation__item">
                    <a href="./drinks.php" class="adaptive-navigation__link">
                        <img src="img/adaptive-navigation/nav10.svg" alt="" class="adaptive-navigation__img">
                        <div class="adaptive-navigation__title">Не забыть</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>