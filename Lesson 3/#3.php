<?php

$city = [
    'Московская область' => [
        'Москва',
        'Зеленоград',
        'Клин'
    ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт'
    ],
    'Рязанская область' => [
        'Касимов',
        'Рязань',
        'Скопин',
        'Шацк'
    ]
];

foreach ($city as $state => $stateName) {
    echo $state.":<br>";
    foreach ($stateName as $cities) {
        if ($cities == end($stateName)) {
            echo $cities.";<br><br>";
            break;
        }
        echo $cities.", ";
    }
}