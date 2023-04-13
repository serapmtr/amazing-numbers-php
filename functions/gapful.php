<?php

namespace Functions\Gapful;

function isGapful($number): bool
{
    $splitted = str_split($number);
    $length = count($splitted);

    if($length >= 3) {
        $concat = (int) ($splitted[0] . $splitted[$length-1]);

        if($number % $concat == 0) {
            return true;
        }
    }
    
    return false;
}