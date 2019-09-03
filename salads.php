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
    <link rel="stylesheet" href="css/pizza-department.css">

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
    $location2 = "Салаты";
    include('./location.php');
    ?>

    <div class="container__pizza-department pizza-department container__fixed container__fixed_adaptive">
        <div class="pizza-department__heading">Пицца</div>
        <ul class="pizza-department__sort-pizza sort-pizza layout">
            <li class="sort-pizza__item">Сортировать:</li>
            <li class="sort-pizza__item">Все</li>
            <li class="sort-pizza__item sort-pizza__item_active">Новинка</li>
            <li class="sort-pizza__item">Острое</li>
            <li class="sort-pizza__item">Вегетарианское</li>
            <li class="sort-pizza__item">Хит</li>
        </ul>
        <div class="pizza-department__pizzas pizzas">
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
            <div class="pizzas__item pizza-slide pizza-slide_2">
                <div class="pizza-slide__img">
                    <img src="img/main-page/pizza1.svg" alt="Slide Image" class="pizza-img">
                    <div class="pizza-slide__likes">272</div>
                </div>
                <div class="pizza-slide__heading">Четыре сезона</div>
                <div class="pizza-slide__text">Ветчина, пикантная пепперони, томатный соус, кубики брынзы,
                    шампиньоны, моцарелла, томаты и орегано<br>
                    540 г.
                </div>
                <div class="pizza-slide__sizes sizes layout">
                    <div class="sizes__text">Размер:</div>
                    <ul class="sizes__size-list size-list layout">
                        <li class="size-list__item size-list__item_active">25 см.</li>
                        <li class="size-list__item">30 см.</li>
                        <li class="size-list__item">35 см.</li>
                    </ul>
                </div>
                <div class="pizza-slide__footer layout">
                    <div class="pizza-slide__price">69 руб.</div>
                    <button class="pizza-slide__button button button_to-cage">В КОРЗИНУ</button>
                    <button class="button button_red button_cage"><img src="img/main-page/cage.svg" alt="Cage"></button>
                </div>
            </div>
        </div>
        <ul class="pizza-department__pagination pagination layout">
            <li class="pagination__item">
                <a href="#" class="pagination__link pagination__link_active">1</a>
            </li>
            <li class="pagination__item">
                <a href="#" class="pagination__link">2</a>
            </li>
            <li class="pagination__item">
                <a href="#" class="pagination__link">3</a>
            </li>
            <li class="pagination__item">
                <a href="#" class="pagination__link">4</a>
            </li>
            <li class="pagination__item">
                <a href="#" class="pagination__link"><img src="img/main-page/right-arrow.svg" alt=">" style="width:5px"></a>
            </li>
        </ul>
    </div>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>

<script src="https://www.google-analytics.com/analytics.js" async></script>
<script src="js/main.js"></script>
</body>

</html>
