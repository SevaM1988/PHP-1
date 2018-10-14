<?php

function plus (int $a, int $b)  {
    return $a + $b;
}

echo 'a + b = '.plus(1, 5).";<br>";

function minus (int $a, int $b) {
    return $a - $b;
}

echo 'a - b = '.minus(5, 1).";<br>";

function multiply (int $a, int $b)  {
    return $a * $b;
}

echo 'a * b = '.multiply(1, 5).";<br>";

function divide (int $a, int $b)    {
    return $a / $b;
}

echo 'a / b = '.divide(5, 1);