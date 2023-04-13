<?php

namespace Functions\Duck;

function isDuck($number): bool
{
    $splitted = str_split($number);

    foreach ($splitted as $split) {
        if ($split ==  "0") {
            return true;
        }
    }

    return false;
}