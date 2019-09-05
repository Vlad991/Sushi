<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Интернет магазин по доставке суши, пиццы и роллов в Тирасполе</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="./index.html">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>

    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
<div class="container">

    <!-- Header -->
    <?php include('./header.php'); ?>

    <!-- Navigation -->
    <?php include('./navigation.php'); ?>

    <!-- Location -->
    <?php
    $location1 = "Главная";
    $location2 = "Авторизация";
    include('./location.php');
    ?>

    <section class="container__authorization">
        <div class="container__wrap">
            <form action="" class="authorization authorization_phone">
                <div class="authorization__header">Авторизация</div>
                <div class="authorization__number number">
                    <div class="number__title">Номер мобильного телефона</div>
                    <input type="text" class="number__input field">
                </div>
                <button type="button" id="goToPersonalAccount" class="authorization__sms-button button">ПОЛУЧИТЬ КОД ПО SMS</button>
                <a href="./404.php" class="authorization__footer">У меня есть пароль</a>
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
                    <a href="./404.php" class="password__forgot">Забыли пароль?</a>
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


<script src="js/main.js"></script>
</body>

</html>
