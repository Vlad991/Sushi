<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>404</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="img/header/logo.svg">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/personal_account.css">

    <meta name="theme-color" content="#fafafa">
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
    include('./location.php');
    ?>

    <?php include('./personal_data.php'); ?>

    <!-- Footer -->
    <?php include('./footer.php'); ?>

</div>


<script src="js/main.js"></script>
</body>

</html>
