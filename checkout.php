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

    <!-- Navigation -->
    <?php include('./navigation.php'); ?>

    <!-- Location -->
    <?php
    $location1 = "Главная";
    $location2 = "Оформление заказа";
    include('./location.php');
    ?>

    <form class="container__checkout checkout container__fixed container__fixed_adaptive">
        <div style="height: 1350px">
            <div class="checkout__heading">Оформление заказа</div>
            <div class="checkout__blank blank">
                <div class="blank__text"><a href="./authorization.php" class="blank__auth">Авторизуйтесь</a> на сайте, и
                    мы сохраним всю информацию по заказу и автоматически заполним ваши контактные данные
                </div>
                <div class="blank__receiver-text"><label for="receiverName" type="text">Получатель:</label></div>
                <input type="text" id="receiverName" class="blank__receiver-name blank-input" placeholder="Имя*">
                <input type="text" id="receiverPhone" class="blank__receiver-phone blank-input"
                       placeholder="Контактный телефон*">
                <div class="blank__radio1 radio">
                    <div class="radio__item">
                        <input id="delivery" type="radio" name="delivery" class="radio__input" checked>
                        <label class="radio__label" for="delivery">Доставка</label>
                    </div>
                    <div class="radio__item">
                        <input id="takeYourself" type="radio" name="delivery" class="radio__input">
                        <label class="radio__label" for="takeYourself">Забрать самому</label>
                    </div>
                </div>
                <div class="blank__address address">
                    <input type="text" class="address__item blank-input" placeholder="Город*">
                    <input type="text" class="address__item blank-input" placeholder="Улица*">
                    <input type="text" class="address__item blank-input" placeholder="Дом*">
                    <input type="text" class="address__item blank-input" placeholder="Квартира">
                    <input type="text" class="address__item blank-input" placeholder="Подъезд">
                    <input type="text" class="address__item blank-input" placeholder="Код двери">
                </div>
                <div class="blank__intercom-and-call layout checkbox">
                    <div class="checkbox__item">
                        <input id="intercom" type="checkbox" class="checkbox__input">
                        <label for="intercom" class="checkbox__label">Домофон не работает</label>
                    </div>
                    <div class="checkbox__item">
                        <input id="no-call" type="checkbox" class="checkbox__input">
                        <label for="no-call" class="checkbox__label">Не перезванивать</label>
                    </div>
                </div>
                <div class="blank__when">Когда выполнить заказ?</div>
                <div class="blank__radio2 radio">
                    <div class="radio__item">
                        <input id="faster" type="radio" name="radio2" class="radio__input" checked>
                        <label class="radio__label" for="faster">Как можно быстрее</label>
                    </div>
                    <div class="radio__item">
                        <input id="choseDate" type="radio" name="radio2" class="radio__input">
                        <label class="radio__label" for="choseDate">Выбрать дату и время</label>
                    </div>
                </div>
                <div class="blank__payment">Способ оплаты:</div>
                <div class="blank__radio3 radio">
                    <div class="radio__item">
                        <input id="cash" type="radio" name="radio3" class="radio__input" checked>
                        <label class="radio__label" for="cash">Оплата при получении наличными</label>
                    </div>
                    <div class="radio__item">
                        <input id="cardReceipt" type="radio" name="radio3" class="radio__input">
                        <label class="radio__label" for="cardReceipt">Оплата мобильным платежом</label>
                    </div>
                    <div class="radio__item">
                        <input id="cardOnline" type="radio" name="radio3" class="radio__input">
                        <label class="radio__label" for="cardOnline">Оплата при получении картой Радуга онлайн</label>
                    </div>
                    <div class="radio__item">
                        <input id="mobile" type="radio" name="radio3" class="radio__input">
                        <label class="radio__label" for="mobile">Автоматический платеж</label>
                    </div>
                    <div class="radio__item">
                        <input id="auto" type="radio" name="radio3" class="radio__input">
                        <label class="radio__label" for="auto">Оплата картой Радуга онлайн</label>
                    </div>
                </div>
                <label for="comment" class="blank__comment">Комментарий к заказу:</label><br>
                <textarea id="comment" class="blank__comment-input"
                          placeholder="Например (сдача с 500 рублей...)"></textarea>
                <div class="checkbox__item blank__bonus">
                    <input id="bonus" type="checkbox" class="checkbox__input">
                    <label for="bonus" class="checkbox__label">Стать участником <a href="./bonuses.php"
                                                                                   class="blank__auth">Бонусной
                            программы</a></label>
                </div>
            </div>
        </div>
        <div>
            <div class="checkout__order-icon order-icon">
                <div class="order-icon__heading">Мой заказ:</div>
                <a href="./my_order.php" class="order-icon__back">Вернуться в корзину</a>
                <ul class="order-icon__orders orders">
                    <li class="orders__item order order_icon">
                        <img src="img/my_order/pizza1.svg" alt="Pizza" class="order__img">
                        <div class="order__description order__description_icon">
                            <div class="order__heading">Гавайская</div>
                            <div class="order__text">Куриное филе, сливочный соус, ананасы консерв., моцарелла.</div>
                        </div>
                        <div>
                            <div class="order__price order__price_icon">69 руб.</div>
                            <div class="order__price-descr">1 шт. х 69 руб.</div>
                        </div>
                    </li>
                    <li class="orders__item order order_icon">
                        <img src="img/my_order/pizza1.svg" alt="Pizza" class="order__img">
                        <div class="order__description order__description_icon">
                            <div class="order__heading">Гавайская</div>
                            <div class="order__text">Куриное филе, сливочный соус, ананасы консерв., моцарелла.</div>
                        </div>
                        <div>
                            <div class="order__price order__price_icon">69 руб.</div>
                            <div class="order__price-descr">1 шт. х 69 руб.</div>
                        </div>
                    </li>
                    <li class="orders__item order order_icon">
                        <img src="img/my_order/pizza1.svg" alt="Pizza" class="order__img">
                        <div class="order__description order__description_icon">
                            <div class="order__heading">Гавайская</div>
                            <div class="order__text">Куриное филе, сливочный соус, ананасы консерв., моцарелла.</div>
                        </div>
                        <div>
                            <div class="order__price order__price_icon">69 руб.</div>
                            <div class="order__price-descr">1 шт. х 69 руб.</div>
                        </div>
                    </li>
                </ul>
            </div>
            <button type="button" class="button checkout__submit">ОФОРМИТЬ ЗАКАЗ</button>
        </div>
    </form>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<script src="js/main.js"></script>
</body>

</html>
