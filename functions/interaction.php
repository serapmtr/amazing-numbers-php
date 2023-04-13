<?php

namespace Functions\Interaction;

use function Funtions\Helpers\isNatural;
use function Funtions\Helpers\isEven;
use function Functions\Buzz\isBuzz;
use function Functions\Duck\isDuck;

require_once("duck.php");


function getUserInput(): string
{
    $number = readline("Enter a natural number: \n");

    return $number;
}

function displayInformation(int $number)
{
    echo "Properties of $number \n";

    $natural = isNatural($number);

    if ($natural) {
        $even = isEven($number);

        $buzz = isBuzz($number);

        $duck = isDuck($number);


        if ($even) {
            echo "even: true\n";
            echo "odd: false\n";

            if ($buzz == true) {
                echo "buzz: true\n";
            } else {
                echo "buzz: false\n";
            }

            if ($duck == true) {
                echo "duck: true\n";
            } else {
                echo "duck: false\n";
            }
        } else {
            echo "even: false\n";
            echo "odd: true\n";

            if ($buzz == true) {
                echo "buzz: true\n";
            } else {
                echo "buzz: false\n";
            }

            if ($duck == true) {
                echo "duck: true\n";
            } else {
                echo "duck: false\n";
            }
        }
    }
}