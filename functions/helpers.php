<?php

namespace Funtions\Helpers;


function isNatural(int $number): bool 
{
    if($number >= 0) {
        return true;
    }
    echo "The first parameter should be a natural number or zero.\n";
    return false;
}
function isEven(int $number): bool
{
    if ($number % 2 == 0) {
        // echo "This number is Even.\n";
        return true;
    }
    // echo "This number is Odd.\n";
    return false;
}

function isEndsWithSeven(int $number): bool
{
    $splitted = str_split($number);

    if($splitted[count($splitted)-1] == 7) {
        return true;
    }
    return false;
} 