<?php

$number = 0;

do  {
    if ($number == 0)   {
        echo $number." – это ноль<br>";
    }else if ($number % 2 == 0)  {
        echo $number." - четное число<br>";
    }else   {
        echo $number." - нечетное число<br>";
    }
    $number++;
}while ($number <= 10);