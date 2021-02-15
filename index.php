<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <?php
        include("./components/links.php");
    ?>
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>
<body>
    <!-- nav -->
    <?php 
        include "./components/nav.php";
    ?>
    <!-- home page -->
    <?php 
        include "./components/home.php";
    ?>


    <!-- footer -->
    <?php 
        include "./components/footer.php";
    ?>
</body>
<?php include("./components/scripts.php") ?>
<script src="./js/scripts.js"></script>
</html>