<header class="header container__header">
    <div class="container__fixed layout">
        <div class="logo header__logo layout">
            <a href="./index.php" class="logo__href-img"><img src="img/header/logo.svg" alt="Sushi And Pizza!" class="logo__img"></a>
            <div class="logo__title">
                <a href="./index.php" class="logo__heading">LOVE <img src="img/header/logo46.svg" alt="Sushi And Pizza!" class="small-logo__img"> SUSHI</a>
                <div class="logo__subheading">Мы делаем жизнь вкуснее!</div>
            </div>
        </div>
        <div class="header__search">
            <a href="#" class="search-link"><img src="img/header/loupe.svg" alt="Поиск" class="search-link__img"></a>
        </div>
        <div class="header__menu-icon">
            <img id="menu-icon" src="img/header/menu-icon.png" alt="" class="menu-icon">
        </div>
        <nav id="hiding-menu" class="header__menu">
            <nav class="hiding-menu">
                <div class="layout">
                    <div class="header__small-logo"><img src="img/header/logo46.svg" alt="Sushi And Pizza!" class="small-logo__img"></div>
                    <img id="close-hiding-menu" src="img/header/close.svg" alt="Close" class="header__close">
                </div>
                <ul class="menu layout">
                    <li class="menu__item"><a href="./payment_and_delivery.php" class="menu__link">Оплата и доставка</a></li>
                    <li class="menu__item"><a href="./bonuses.php" class="menu__link">Бонусы</a></li>
                    <li class="menu__item"><a href="./promotions.php" class="menu__link">Акции</a></li>
                    <li class="menu__item"><a href="./contacts.php" class="menu__link">Контакты</a></li>
                </ul>
            </nav>
        </nav>
        <div class="contact header__contact">
            <a class="contact__item contact__item_first" href="tel:053320420">0 (533) 20-4-20</a>
            <a class="contact__item" href="tel:77772244">0 (777) 7-22-44</a>
        </div>
    </div>
    <div class="header__search-block">
        <!-- Search Block -->
        <?php include('./search-block.php'); ?>
    </div>
</header>