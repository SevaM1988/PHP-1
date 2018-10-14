<?php

$h = date('H') + 3; // выбор часа с учетом часового пояса Москвы (+3)
$m = date('i'); // выбор минут

if ($h == 1 || $h == 21) {
    $hours = " час";
} elseif ($h >= 2 && $h <= 4) {
    $hours = " часа";
} else {
    $hours = " часов";
};

if (($m < 20) || ($m > 10)) {
    $minutes = " минут.";
} elseif (($m % 10) === 1) {
    $minutes = " минута.";
} elseif ((($m % 10) >= 2) && (($m % 10) <= 4)) {
    $minutes = " минуты.";
} else {
    $minutes = " минут.";
}

echo $h . $hours . " " . $m . $minutes;