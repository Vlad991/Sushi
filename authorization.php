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

    <!-- Header -->
    <?php include('./header.php'); ?>

    <!-- Navigation -->
    <?php include('./navigation.php'); ?>

    <!--    <div class="container__search-block search-block">-->
    <!--        <div class="search-block__heading">Поиск</div>-->
    <!--        <div class="search-block__search-form">-->
    <!--            <form action="" class="search-form">-->
    <!--                <input type="text" class="search-form__input" placeholder="Что Вы ищете?">-->
    <!--                <button class="search-form__loupe"><img src="img/search-form/loupe.svg" alt="" class="search-form__img"></button>-->
    <!--            </form>-->
    <!--        </div>-->
    <!--    </div>-->

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
