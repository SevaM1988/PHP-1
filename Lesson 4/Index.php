<?php

    $dirBig = "Img/Big";
    $dirSmall = "Img/Small";

    $small = array_slice(scandir($dirSmall),2);
    $big = array_slice(scandir($dirBig), 2);

    var_dump($small);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <?php
    for ($i = 0; $i < count($small); $i++)  {?>
    <img src="<?= $dirSmall."/".$small[$i] ?>" alt="">
    <?php } ?>
</div>

</body>
</html>
