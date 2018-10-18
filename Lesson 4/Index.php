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
    <style>
        div {
            border: 2px solid royalblue;
            display: flex;
            justify-content: center;
            border-radius: 5px;
        }
    </style>
    <title>Gallery</title>
</head>
<body>

<div>
    <?php
    for ($i = 0; $i < count($small); $i++)  {?>
    <img src="<?=$dirSmall."/".$small[$i]?>" alt="" onclick = 'openImageWindow("<?=$dirBig."/".$big[$i]?>");'>
    <?php } ?>
</div>
<script src="script.js">
</script>
</body>
</html>
