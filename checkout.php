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
    <link rel="stylesheet" href="./css/my-order.css">
    <link rel="stylesheet" href="./css/checkout.css">
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
    $location2 = "Оформление заказа";
    $location3 = null;
    include('./location.php');
    ?>

    <form class="container__checkout checkout container__fixed container__fixed_adaptive">
        <div class="checkout_first">
            <div class="checkout__heading">Оформление заказа</div>
            <div class="checkout__blank blank">
                <div class="blank__text"><a href="./authorization.php" class="blank__auth">Авторизуйтесь</a> на сайте, и
                    мы сохраним всю информацию по заказу и автоматически заполним ваши контактные данные
                </div>
                <div class="blank__receiver-text"><label for="receiverName" type="text">Получатель:</label></div>
                <input type="text" id="receiverName" class="blank__receiver-name blank-input" placeholder="Имя*">
                <input type="text" id="receiverPhone" class="blank__receiver-phone blank-input"
                       placeholder="Контактный телефон*">
                <div id="checkoutAddressRadio" class="blank__radio1 radio">
                    <div class="radio__item">
                        <input id="delivery" type="radio" name="delivery" class="radio__input" checked>
                        <label class="radio__label" for="delivery">Доставка</label>
                    </div>
                    <div class="radio__item">
                        <input id="takeYourself" type="radio" name="delivery" class="radio__input">
                        <label class="radio__label" for="takeYourself">Забрать самому</label>
                    </div>
                </div>
                <div id="checkoutFilials" class="blank__fillials">
                    <div class="radio__item">
                        <input id="firstAddress" type="radio" name="fillial" class="radio__input" checked>
                        <label class="radio__label" for="firstAddress">г. Тирасполь, ул. 1 Мая, 2</label>
                    </div>
                    <div class="radio__item">
                        <input id="secondAddress" type="radio" name="fillial" class="radio__input" checked>
                        <label class="radio__label" for="secondAddress">г. Тирасполь, ул. 1 Мая, 2</label>
                    </div>
                </div>
                <div id="checkoutAddress" class="blank__address address">
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
        <div class="checkout_second">
            <div class="checkout__order-icon order-icon">
                <div class="order-icon__heading">Мой заказ:</div>
                <a href="./my_order.php" class="order-icon__back">Вернуться в корзину</a>
                <div class="order-icon__result">
                    <div class="layout result_div">
                        <div class="order-icon__result-title">Сумма заказа:</div>
                        <div class="order-icon__result-value">464 руб.</div>
                    </div>
                    <div class="layout result_div">
                        <div class="order-icon__result-title">Доставка:</div>
                        <div class="order-icon__result-value">Бесплатно</div>
                    </div>
                    <div class="layout result_div">
                        <div class="order-icon__result-title">Итого к оплате:</div>
                        <div class="order-icon__result-value">464 руб.</div>
                    </div>
                </div>
            </div>
            <button type="button" class="button checkout__submit">ОФОРМИТЬ ЗАКАЗ</button>
        </div>
    </form>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<!--  jQuery  -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
<script src="js/checkout.js"></script>
</body>

</html>
