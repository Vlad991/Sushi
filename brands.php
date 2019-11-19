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
    $location2 = "Производители";
    $location3 = null;
    include('./location.php');
    ?>

    <div class="container__brands brands container__fixed container__fixed_adaptive" style="height: 1000px">
        <div class="container__heading">Производители</div>
    </div>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<!--  jQuery  -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
</body>

</html>
