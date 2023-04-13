<?php

namespace Functions\Interaction;

use function Funtions\Helpers\isNatural;
use function Funtions\Helpers\isEven;
use function Functions\Buzz\isBuzz;
use function Functions\Duck\isDuck;
use function Functions\Palindromic\isPalindromic;
use function Functions\Gapful\isGapful;

require_once("duck.php");
require_once("palindromic.php");
require_once("gapful.php");

function welcome()
{
    echo "Welcome to Amazing Numbers!\n\n";
    echo "Supported requests: \n";
    echo "- enter a natural number to know its properties;\n";
    echo "- enter two natural numbers to obtain the properties of the list:\n";
    echo "  * the first parameter represents a starting number;\n";
    echo "  * the second parameter shows how many consecutive numbers are to be processed;\n";
    echo "- separate the parameters with one space;\n";
    echo "- enter 0 to exit.\n\n";
}

function getUserInput(): string|array
{
    $input = readline("\nEnter a request: >  ");

    $splitted = explode(" ", $input);

    return $splitted;
}

function listProperties(int $input)
{
    echo "\nProperties of $input \n";
    $even = isEven($input);

    $buzz = isBuzz($input);

    $duck = isDuck($input);

    $palindromic = isPalindromic($input);

    $gapful = isGapful($input);


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

        if ($palindromic == true) {
            echo "palindromic: true\n";
        } else {
            echo "palindromic: false\n";
        }

        if ($gapful == true) {
            echo "gapful: true\n";
        } else {
            echo "gapful: false\n";
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

        if ($palindromic == true) {
            echo "palindromic: true\n";
        } else {
            echo "palindromic: false\n";
        }

        if ($gapful == true) {
            echo "gapful: true\n";
        } else {
            echo "gapful: false\n";
        }
    }
}

function printProperties(int $input, $next)
{

    for ($i = 0; $i < $next; $i++) {
        $result = $input + $i . " is ";
        $even = isEven($input + $i);

        $buzz = isBuzz($input + $i);

        $duck = isDuck($input + $i);

        $palindromic = isPalindromic($input + $i);

        $gapful = isGapful($input + $i);

        if ($even) {
            $result .= "even";
        }
        if (!$even) {
            $result .= "odd";
        }
        if ($buzz) {
            $result .= ", buzz";
        }
        if ($duck) {
            $result .= ", duck";
        }
        if ($palindromic) {
            $result .= ", palindromic";
        }
        if ($gapful) {
            $result .= ", gapful";
        }

        echo $result . "\n";
    }
}

function displayInformation()
{
    welcome();
    for (; ; ) {
        $input = getUserInput();

        if ($input[0] == "0") {
            echo "\nGoodbye!";
            break;
        }
        if ($input[0] == "") {
            welcome();
            $input = getUserInput();
        }

        if($input[0] != "0" || $input[0] != "") {
            echo "The first parameter should be a natural number or zero.\n";
            $input = getUserInput();
        }

        $natural = isNatural($input[0]);

        if ($natural) {
            if (count($input) > 1) {
                printProperties(...$input);
            } else {
                listProperties($input[0]);
            }



        }
    }

}