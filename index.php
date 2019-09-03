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
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/main-page.css">

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

    <div class="container__main-page main-page">
        <div class="container__fixed container__fixed_adaptive">
            <div class="main-page__slider slider">
                <div class="slider__slide slide layout">
                    <div class="slide__description description">
                        <div class="description__heading">Сет Мини в подарок на день рождения!</div>
                        <div class="description__text">Предложение действует всю неделю, на которую выпал Ваш день
                            рождения (3 дня до, в день рождения и 3 дня после).
                        </div>
                        <div class="description__button">
                            <button class="button  button_slider">СКОРЕЕ В КОРЗИНУ!</button>
                        </div>
                    </div>
                    <img src="img/main-page/slide1.svg" alt="Slide Image" class="slide__img">
                </div>
                <ul class="slider__controls controls layout">
                    <li class="controls__circle">
                        <div class="circle"></div>
                    </li>
                    <li class="controls__circle">
                        <div class="circle circle_active"></div>
                    </li>
                    <li class="controls__circle">
                        <div class="circle"></div>
                    </li>
                    <li class="controls__circle">
                        <div class="circle"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-page__info-list info-list">
            <div class="container__fixed container__fixed_adaptive layout">
                <div class="info-list__item layout">
                    <img src="img/main-page/info-slide1.svg" alt="Info Item" class="info-list__img">
                    <div class="info-list__info info">
                        <div class="info__heading">Свежие продукты</div>
                        <div class="info__text">Мы не подвергаем продукты долгому хранению</div>
                    </div>
                </div>
                <div class="info-list__item layout">
                    <img src="img/main-page/info-slide2.svg" alt="Info Item" class="info-list__img">
                    <div class="info-list__info info">
                        <div class="info__heading">Надежная доставка</div>
                        <div class="info__text">Разнообразное меню на любой вкус и кошелек</div>
                    </div>
                </div>
                <div class="info-list__item layout">
                    <img src="img/main-page/info-slide3.svg" alt="Info Item" class="info-list__img">
                    <div class="info-list__info info">
                        <div class="info__heading">Онлайн оплата</div>
                        <div class="info__text">Платите как Вам удобно - наличными или онлайн</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container__fixed container__fixed_adaptive">
            <div class="main-page__pizza-slider pizza-slider">
                <ul class="pizza-slider__branches branches layout">
                    <li class="branches__item branches__item_active">СКИДКИ</li>
                    <li class="branches__item">ХИТЫ ПРОДАЖ</li>
                    <li class="branches__item">НОВИНКИ</li>
                    <li class="branches__item">РЕКОМЕНДУЕМЫЕ</li>
                </ul>
                <div class="pizza-slider__pizza-slides pizza-slides">
                    <div class="pizza-slides__item pizza-slide">
                        <div class="pizza-slide__img pizza-slide__img_hit">
                            <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                            <div class="pizza-slide__likes">272</div>
                        </div>
                        <div class="pizza-slide__heading">Четыре сезона</div>
                        <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                            шампиньоны, моцарелла, томаты и орегано<br>
                            540 г.
                        </div>
                        <div class="pizza-slide__footer layout">
                            <div class="pizza-slide__price">69 руб.</div>
                            <button class="pizza-slide__button button  button_to-cage">СКОРЕЕ В КОРЗИНУ!</button>
                            <button class="button  button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                        </div>
                    </div>
                    <div class="pizza-slides__item pizza-slide">
                        <div class="pizza-slide__img">
                            <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                            <div class="pizza-slide__likes">199</div>
                        </div>
                        <div class="pizza-slide__heading">Четыре сезона</div>
                        <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                            шампиньоны, моцарелла, томаты и орегано<br>
                            540 г.
                        </div>
                        <div class="pizza-slide__footer layout">
                            <div class="pizza-slide__price">69 руб.</div>
                            <button class="pizza-slide__button button  button_to-cage">СКОРЕЕ В КОРЗИНУ!</button>
                            <button class="button  button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                        </div>
                    </div>
                    <div class="pizza-slides__item pizza-slide">
                        <div class="pizza-slide__img">
                            <img src="img/main-page/pizza2.svg" alt="Slide Image" class="pizza-img">
                            <div class="pizza-slide__likes">154</div>
                        </div>
                        <div class="pizza-slide__heading">Четыре сезона</div>
                        <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                            шампиньоны, моцарелла, томаты и орегано<br>
                            540 г.
                        </div>
                        <div class="pizza-slide__footer layout">
                            <div class="pizza-slide__price">69 руб.</div>
                            <button class="pizza-slide__button button  button_to-cage">СКОРЕЕ В КОРЗИНУ!</button>
                            <button class="button  button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                        </div>
                    </div>
                    <div class="pizza-slides__item pizza-slide">
                        <div class="pizza-slide__img">
                            <img src="img/main-page/pizza3.svg" alt="Slide Image" class="pizza-img">
                            <div class="pizza-slide__likes">321</div>
                        </div>
                        <div class="pizza-slide__heading">Четыре сезона</div>
                        <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                            шампиньоны, моцарелла, томаты и орегано<br>
                            540 г.
                        </div>
                        <div class="pizza-slide__footer layout">
                            <div class="pizza-slide__price">69 руб.</div>
                            <button class="pizza-slide__button button  button_to-cage">СКОРЕЕ В КОРЗИНУ!</button>
                            <button class="button  button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                        </div>
                    </div>
                    <div class="pizza-slides__item pizza-slide">
                        <div class="pizza-slide__img">
                            <img src="img/main-page/pizza4.svg" alt="Slide Image" class="pizza-img">
                            <div class="pizza-slide__likes">180</div>
                        </div>
                        <div class="pizza-slide__heading">Четыре сезона</div>
                        <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                            шампиньоны, моцарелла, томаты и орегано<br>
                            540 г.
                        </div>
                        <div class="pizza-slide__footer layout">
                            <div class="pizza-slide__price">69 руб.</div>
                            <button class="pizza-slide__button button  button_to-cage">СКОРЕЕ В КОРЗИНУ!</button>
                            <button class="button  button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                        </div>
                    </div>
                    <div class="pizza-slides__item pizza-slide">
                        <div class="pizza-slide__img">
                            <img src="img/main-page/pizza5.svg" alt="Slide Image" class="pizza-img">
                            <div class="pizza-slide__likes">140</div>
                        </div>
                        <div class="pizza-slide__heading">Четыре сезона</div>
                        <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                            шампиньоны, моцарелла, томаты и орегано<br>
                            540 г.
                        </div>
                        <div class="pizza-slide__footer layout">
                            <div class="pizza-slide__price">69 руб.</div>
                            <button class="pizza-slide__button button  button_to-cage">СКОРЕЕ В КОРЗИНУ!</button>
                            <button class="button  button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                        </div>
                    </div>
                    <div class="pizza-slides__item pizza-slide">
                        <div class="pizza-slide__img pizza-slide__img_pepper">
                            <img src="img/main-page/pizza6.svg" alt="Slide Image" class="pizza-img">
                            <div class="pizza-slide__likes">150</div>
                        </div>
                        <div class="pizza-slide__heading">Четыре сезона</div>
                        <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                            шампиньоны, моцарелла, томаты и орегано<br>
                            540 г.
                        </div>
                        <div class="pizza-slide__footer layout">
                            <div class="pizza-slide__price">69 руб.</div>
                            <button class="pizza-slide__button button  button_to-cage">СКОРЕЕ В КОРЗИНУ!</button>
                            <button class="button  button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                        </div>
                    </div>
                    <div class="pizza-slides__item pizza-slide">
                        <div class="pizza-slide__img">
                            <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                            <div class="pizza-slide__likes">199</div>
                        </div>
                        <div class="pizza-slide__heading">Четыре сезона</div>
                        <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                            шампиньоны, моцарелла, томаты и орегано<br>
                            540 г.
                        </div>
                        <div class="pizza-slide__footer layout">
                            <div class="pizza-slide__price">69 руб.</div>
                            <button class="pizza-slide__button button  button_to-cage">СКОРЕЕ В КОРЗИНУ!</button>
                            <button class="button  button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-page__reviews reviews">
            <div class="container__fixed container__fixed_adaptive">
                <div class="reviews__heading">Отзывы о нас</div>
                <div class="reviews__review-slider review-slider layout">
                    <div class="review-slider__slide">
                        <div class="review-slider__name">Александра</div>
                        <div class="review-slider__text">Всё хорошо в этом магазине, вкусная еда, заказывали роллы,
                            остались очень довольны. Удобный сайт, онлайн-заказ производится очень быстро)<br> Развития
                            вам и побольше клиентов!
                        </div>
                        <div class="review-slider__mark layout">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                        </div>
                    </div>
                    <div class="review-slider__slide hide-info-slide">
                        <div class="review-slider__name">Виктория</div>
                        <div class="review-slider__text">Впервые воспользовалась вашими услугами и осталась довольна,
                            оперативное принятие заказа, вежливость персонала, быстрая доставка и в особенности,
                            вкуснейшая еда.<br> Молодцы! Пожелание- увеличивайте ассортимент !!!!!!!!!!
                        </div>
                        <div class="review-slider__mark layout">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                        </div>
                    </div>
                    <div class="review-slider__slide hide-info-slide">
                        <div class="review-slider__name">Александра</div>
                        <div class="review-slider__text">Спасибо большое за пиццы! Все нереально вкусно и главное
                            быстро :)<br>
                            Теперь только к Вам. Довольна вся семья :)
                        </div>
                        <div class="review-slider__mark layout">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                            <img src="img/main-page/star.svg" alt="*" class="mark__star">
                        </div>
                    </div>
                </div>
                <ul class="reviews__review-controls review-controls layout">
                    <li class="review-controls__circle"></li>
                    <li class="review-controls__circle"></li>
                    <li class="review-controls__circle"></li>
                    <li class="review-controls__circle review-controls__circle_active"></li>
                </ul>
                <button class="reviews__button button  button_review">ОСТАВИТЬ ОТЗЫВ</button>
            </div>
        </div>
        <div class="main-page__rant rant">
            <div class="container__fixed container__fixed_adaptive layout adaptive-no-layout">
                <div class="rant__slogan">“Love Sushi & Pizza” <br>&nbsp;- это свежая еда и прекрасный сервис</div>
                <div class="rant__mini-slogans mini-slogans">
                    <div class="mini-slogans__slogan">
                        <span class="mini-slogans__title">Привозим быстро.</span>
                        <span class="mini-slogans__text">Горячие блюда должны оставаться горячими. Для этого при
                            транспортировке мы используем специальные термосумки и доставляем заказы всегда за 1 час.</span>
                    </div>
                    <div class="mini-slogans__slogan">
                        <span class="mini-slogans__title">Готовим из свежего.</span>
                        <span class="mini-slogans__text">Вкусная еда может получиться только из качественных
                            продуктов. Мы не экономим на ингридиентах и закупаем их у надежных партнеров.</span>
                    </div>
                    <div class="mini-slogans__slogan">
                        <span class="mini-slogans__title">Работаем для Вас.</span>
                        <span class="mini-slogans__text">По-настоящему ценим наших клиентов. Дарим скидки, проводим
                            акции и постоянно расширяем меню. Будем рады новым друзьям!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<script src="js/main.js"></script>
</body>

</html>
