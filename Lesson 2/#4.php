<?php

    function mathOperation($arg1, $arg2, $operation)    {
        switch ($operation) {
            case 'plus':
                return plus($arg1, $arg2);
                break;
            case 'minus':
                return minus($arg1, $arg2);
                break;
            case 'multiply':
                return multiply($arg1, $arg2);
                break;
            case 'divide':
                return divide($arg1, $arg2);
                break;
        }
};

function plus (int $a, int $b)  {
    return $a + $b;
};

function minus (int $a, int $b) {
    return $a - $b;
};

function multiply (int $a, int $b)  {
    return $a * $b;
};

function divide (int $a, int $b)    {
    return $a / $b;
};


echo 'a + b = '.mathOperation(20, 5, 'plus').";<br>";
echo 'a - b = '.mathOperation(20, 5, 'minus').";<br>";
echo 'a * b = '.mathOperation(20, 5, 'multiply').";<br>";
echo 'a / b = '.mathOperation(20, 5, 'divide');