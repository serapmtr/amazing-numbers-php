<?php

namespace Functions\Palindromic;

function isPalindromic($number)
{
    $splitted = str_split($number);

    $length = count($splitted);
    $j = 0;

    for($i = 0; $i < $length; $i++) {
        if($splitted[$i] == $splitted[$length-1-$i]) {
            $j ++;
        }
    }


    if($j == $length) {
        return true;
    }

    return false;
}