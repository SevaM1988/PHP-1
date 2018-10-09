<?php
    $h1 = "Почти что заголовок";
    $title = "Скоро тут будет название страницы";
    $date = date("d/m/y");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <style>
        div {
            width: 300px;
            height: 200px;
            margin: 20px auto;
            padding: 25px;
            border: 4px solid darkred;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div>
    <h1><?php echo $h1 ?></h1>
    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi cumque debitis dolor ducimus, ex illum incidunt
        itaque libero perspiciatis placeat praesentium quo rem repellendus soluta totam vel velit veniam. Quas?</span>
    <p><?php echo $date ?></p>
</div>
</body>
</html>
