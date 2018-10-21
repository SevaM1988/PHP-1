<?php

    $dirBig = "Img/Big";
    $dirSmall = "Img/Small";

    $small = array_slice(scandir($dirSmall),2);
    $big = array_slice(scandir($dirBig), 2);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style></style>
    <title>Gallery</title>
</head>
<body>

<div id="gallery">
    <?php
    for ($i = 0; $i < count($small); $i++)  {?>
    <img src="<?=$dirSmall."/".$small[$i]?>" alt="" onclick = 'openImageWindow("<?=$dirBig."/".$big[$i]?>//");'>
    <?php } ?>
</div>

<!--<div id="modal_form">-->
<!--    <span id="modal_close">X</span>-->
<!--    --><?php
//    for ($i = 0; $i < count($small); $i++)  {?>
<!--        <a href="#" id="go"><img src="--><?//=$dirSmall."/".$small[$i]?><!--" alt=""></a>-->
<!--    --><?php //} ?>
<!--</div>-->
<!--<div id="overlay"></div>-->

<script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script src="modalWindow.js"></script>-->
</body>
</html>
