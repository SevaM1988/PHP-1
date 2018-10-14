<?php

    function power($val, $pow)  {
        return ($pow == 1) ? $val : $val * power($val, $pow - 1);
    }

    echo power(2, 4);