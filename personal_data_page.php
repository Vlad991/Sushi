<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Доставка еды — заказать пиццу и суши с доставкой на дом, недорого | Love-Sushi</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="./index.html">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>

    <!-- Styles -->
    <?php include('./styles.php'); ?>
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
    $location2 = "Личные данные";
    $location3 = null;
    include('./location.php');
    ?>

    <?php include('./personal_data.php'); ?>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<!--  jQuery  -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
</body>

</html>
