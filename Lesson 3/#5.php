<?php

function spaceChange (string $a) {
    return str_replace(' ', '_', $a);
}

echo spaceChange('Написать функцию транслитерации строк.');