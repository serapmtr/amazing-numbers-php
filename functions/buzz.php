<?php
use function Funtions\Helpers\isEndsWithSeven;
use function Funtions\Helpers\isEven;

function isBuzz(int $number): bool
{
    if($number % 7 == 0 && isEndsWithSeven($number)) {
        echo "It is a Buzz number.\n";
        echo "Explanation:\n";
        echo $number . " is divisible by 7 and ends with 7. \n";
        return true;
    }


    if($number % 7 == 0 ) {
        echo "It is a Buzz number.\n";
        echo "Explanation:\n";
        echo $number . " is divisible by 7.\n";
        return true;
    }

    if(isEndsWithSeven($number)) {
        echo "It is a Buzz number.\n";
        echo "Explanation:\n";
        echo $number . " ends with 7.\n";
        return true;
    }

    echo "It is not a Buzz number.\n";
    echo "Explanation:\n";
    echo $number . " is neither divisible 7 nor does it end with 7.\n";
    return false;
}