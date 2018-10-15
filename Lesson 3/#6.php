<?php

$menu = [
    'Menu-1',
    'Menu-2',
    'Menu-3',
    'Menu-4',
    'Menu-5'
];

echo "<ul>";
foreach ($menu as $item)    {
    echo "<li>$item</li>";
}
echo "</ul>";


$subMenu = [
    'Menu-1' => [
        'Submenu-1',
        'Submenu-2',
        'Submenu-3'
    ],
    'Menu-2' => [
        'Submenu-1',
        'Submenu-2',
        'Submenu-3'
    ]
];

echo "<ul>";
foreach ($subMenu as $item => $subM)   {
    echo "<li>$item</li>";
    echo "<ul>";
    foreach ($subM as $item)    {
        echo "<li>$item</li>";
    }
    echo "</ul>";
}
echo "</ul>";