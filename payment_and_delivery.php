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
    <link rel="stylesheet" href="css/payment_and_delivery.css">

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

    <div class="location container__location">
        <div class="container__fixed">
            <span class="location__main">Главная</span>
            <span class="location__slash">/</span>
            <span class="location__sub">Оплата и доставка</span>
        </div>
    </div>

    <div class="container__contacts-location contacts-location">
        <div class="container__fixed container__fixed_adaptive">
            <a href="authorization.php" class="contacts-location__link">Главная</a>
        </div>
    </div>

    <div class="container__payment-and-delivery payment-and-delivery">
        <div class="container__fixed container__fixed_adaptive">
            <h1 class="payment-and-delivery__header">Оплата и доставка</h1>
            <div class="payment-and-delivery__info-text info-text">
                <p class="info-text__info-paragraph">Ждем Ваших заказов с 10:30 до 23:00 без выходных: </p>
                <ul class="info-text__info-list info-list">
                    <li class="info-list__item">По телефону: 0 (777) 7-22-44</li>
                    <li class="info-list__item">С помощью нашего официального сайта</li>
                    <li class="info-list__item">С помощью мобильного приложения</li>
                </ul>
                <p class="info-text__info-paragraph">Доставка блюд из нашего меню осуществляется собственной службой доставки. Мы можем Вам гарантировать предельно быструю и качественную доставку до двери вашего дома и офиса.</p>
                <p class="info-text__info-paragraph">Доставка осуществляется с 11:00 до 23:30 без выходных.</p>
                <h2 class="info-text__heading">Стоимость и условия доставки для г. Тирасполь, г. Бендеры и Слободзейского района</h2>
                <p class="info-text__info-paragraph">г. Тирасполь<br>Минимальная сумма заказа: 100 руб.<br>Время доставки: в течение 60 мин.</p>
                <p class="info-text__info-paragraph">Другие административные единицы<br>Минимальная сумма заказа: 200 руб.<br> Время доставки: в течение 90 мин.</p>
            </div>
            <table class="payment-and-delivery__delivery-table delivery-table">
                <tbody>
                    <tr class="table-row">
                        <td class="table-header first-col">Локация</td>
                        <td class="table-header">Время доставки</td>
                        <td class="table-header">Стоимость доставки</td>
                        <td class="table-header">Бесплатная доставка</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-col first-col">Тирасполь</td>
                        <td class="table-col">60 мин.</td>
                        <td class="table-col">20 руб.</td>
                        <td class="table-col">от 150 руб.</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-col first-col">Бендеры</td>
                        <td class="table-col">90 мин.</td>
                        <td class="table-col">35 руб.</td>
                        <td class="table-col">от 500 руб.</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-col first-col">Суклея</td>
                        <td class="table-col">60 мин.</td>
                        <td class="table-col">-</td>
                        <td class="table-col">от 200 руб.</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-col first-col">Ближний Хутор</td>
                        <td class="table-col">60 мин.</td>
                        <td class="table-col">-</td>
                        <td class="table-col">от 200 руб.</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-col first-col">Парканы, Терновка</td>
                        <td class="table-col">90 мин.</td>
                        <td class="table-col">25 руб.</td>
                        <td class="table-col">от 400 руб.</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-col first-col">Карагаш</td>
                        <td class="table-col">90 мин.</td>
                        <td class="table-col">25 руб.</td>
                        <td class="table-col">от 400 руб.</td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-col first-col">Слобозея</td>
                        <td class="table-col">90 мин.</td>
                        <td class="table-col">35 руб.</td>
                        <td class="table-col">от 500 руб.</td>
                    </tr>
                </tbody>
            </table>
            <div class="payment-and-delivery__table-title">Локация</div>
            <ul class="table-adaptive payment-and-delivery__table-adaptive">
                <li class="table-adaptive__item">
                    <div class="layout">
                        <div class="table-adaptive__location">Тирасполь</div>
                        <img src="img/payment_and_delivery/arrow.svg" alt="" class="table-adaptive__arrow">
                    </div>
                    <ul class="table-adaptive__delivery-list delivery-list">
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Время доставки:</div>
                            <div class="delivery-list__value">60 мин.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Стоимость доставки:</div>
                            <div class="delivery-list__value">20 руб.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Бесплатная доставка:</div>
                            <div class="delivery-list__value">от 150 руб.</div>
                        </li>
                    </ul>
                </li>
                <li class="table-adaptive__item">
                    <div class="layout">
                        <div class="table-adaptive__location">Бендеры</div>
                        <img src="img/payment_and_delivery/arrow.svg" alt="" class="table-adaptive__arrow">
                    </div>
                    <ul class="table-adaptive__delivery-list delivery-list">
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Время доставки:</div>
                            <div class="delivery-list__value">60 мин.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Стоимость доставки:</div>
                            <div class="delivery-list__value">20 руб.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Бесплатная доставка:</div>
                            <div class="delivery-list__value">от 150 руб.</div>
                        </li>
                    </ul>
                </li>
                <li class="table-adaptive__item">
                    <div class="layout">
                        <div class="table-adaptive__location">Суклея</div>
                        <img src="img/payment_and_delivery/arrow.svg" alt="" class="table-adaptive__arrow">
                    </div>
                    <ul class="table-adaptive__delivery-list delivery-list">
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Время доставки:</div>
                            <div class="delivery-list__value">60 мин.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Стоимость доставки:</div>
                            <div class="delivery-list__value">20 руб.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Бесплатная доставка:</div>
                            <div class="delivery-list__value">от 150 руб.</div>
                        </li>
                    </ul>
                </li>
                <li class="table-adaptive__item">
                    <div class="layout">
                        <div class="table-adaptive__location">Ближний Хутор</div>
                        <img src="img/payment_and_delivery/arrow.svg" alt="" class="table-adaptive__arrow">
                    </div>
                    <ul class="table-adaptive__delivery-list delivery-list">
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Время доставки:</div>
                            <div class="delivery-list__value">60 мин.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Стоимость доставки:</div>
                            <div class="delivery-list__value">20 руб.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Бесплатная доставка:</div>
                            <div class="delivery-list__value">от 150 руб.</div>
                        </li>
                    </ul>
                </li>
                <li class="table-adaptive__item">
                    <div class="layout">
                        <div class="table-adaptive__location">Парканы, Терновка</div>
                        <img src="img/payment_and_delivery/arrow.svg" alt="" class="table-adaptive__arrow">
                    </div>
                    <ul class="table-adaptive__delivery-list delivery-list">
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Время доставки:</div>
                            <div class="delivery-list__value">60 мин.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Стоимость доставки:</div>
                            <div class="delivery-list__value">20 руб.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Бесплатная доставка:</div>
                            <div class="delivery-list__value">от 150 руб.</div>
                        </li>
                    </ul>
                </li>
                <li class="table-adaptive__item">
                    <div class="layout">
                        <div class="table-adaptive__location">Каргаш</div>
                        <img src="img/payment_and_delivery/arrow.svg" alt="" class="table-adaptive__arrow">
                    </div>
                    <ul class="table-adaptive__delivery-list delivery-list">
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Время доставки:</div>
                            <div class="delivery-list__value">60 мин.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Стоимость доставки:</div>
                            <div class="delivery-list__value">20 руб.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Бесплатная доставка:</div>
                            <div class="delivery-list__value">от 150 руб.</div>
                        </li>
                    </ul>
                </li>
                <li class="table-adaptive__item">
                    <div class="layout">
                        <div class="table-adaptive__location">Слобозея</div>
                        <img src="img/payment_and_delivery/arrow.svg" alt="" class="table-adaptive__arrow">
                    </div>
                    <ul class="table-adaptive__delivery-list delivery-list">
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Время доставки:</div>
                            <div class="delivery-list__value">60 мин.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Стоимость доставки:</div>
                            <div class="delivery-list__value">20 руб.</div>
                        </li>
                        <li class="delivery-list__item layout">
                            <div class="delivery-list__key">Бесплатная доставка:</div>
                            <div class="delivery-list__value">от 150 руб.</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="payment-and-delivery__info-text info-text">
                <h2 class="info-text__heading">Важно:</h2>
                <p class="info-text__info-paragraph">В случае форс-мажорных обстоятельств или при большом количестве заказов время доставки может быть увеличено.</p>
                <p class="info-text__info-paragraph">Для Вашего удобства у нас есть услуга доставки заказа к определенному времени. Укажите дату и время доставки в примечании к заказу или же сообщите оператору по телефону и заказ будет у Вас к указанному времени.</p>
                <p class="info-text__info-paragraph">Так же Вы можете самостоятельно забрать свой заказ в указанное выше время по адресу г. Тирасполь, ул. 1 мая 2, корпус Е (возле парома).</p>
                <h2 class="info-text__heading">Как можно оплатить заказ?</h2>
                <h2 class="info-text__heading info-text__heading_cash">Наличными</h2>
                <ul class="info-text__info-list info-list">
                    <li class="info-list__item">При получении заказа</li>
                </ul>
                <h2 class="info-text__heading info-text__heading_cash">Безналичный расчет</h2>
                <ul class="info-text__info-list info-list">
                    <li class="info-list__item">При заказе через наш сайт доступна Онлайн оплата картой "Радуга"</li>
                    <li class="info-list__item">С помощью Мобильного платежа в APB- онлайн (для Вас генерируется код или ​QR-код, после чего необходимо подтвердить оплату) </li>
                    <li class="info-list__item">Системой «Колибри» - это компактное устройство для приёма пластиковых карт. (Производится с помощью карты "Радуга" по приезду курьера)</li>
                </ul>
                <p class="info-text__info-paragraph">Привяжите свою карту «Радуга» в личном кабинете нашего сайта или приложения. При оформлении заказа оплата будет автоматически списываться с вашего счета. Ваш заказ будет укомплектован всем необходимым: соевый соус, васаби, маринованный имбирь (в зависимости от количества роллов), одноразовые палочки и салфетки (в зависимости от количества персон)</p>
            </div>
        </div>
    </div>

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
