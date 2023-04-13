<?php

namespace Functions\Interaction;

use function Funtions\Helpers\isNatural;
use function Funtions\Helpers\isEven;
use function Functions\Buzz\isBuzz;
use function Functions\Duck\isDuck;
use function Functions\Palindromic\isPalindromic;

require_once("duck.php");
require_once("palindromic.php");

function welcome()
{
    echo "Welcome to Amazing Numbers!\n\n";
    echo "Supported requests: \n";
    echo "- enter a natural number to know its properties;\n";
    echo "- enter 0 to exit.\n\n";
}

function getUserInput(): string
{
    $number = readline("\nEnter a request: >  ");

    return $number;
}

function displayInformation()
{
    welcome();
    for(;;) {
        $number = getUserInput();
        if($number == "0") {
            echo "\nGoodbye!";
            break;
        }

        $natural = isNatural($number);
       
    
       
    
        if ($natural) {
            echo "\nProperties of $number \n";
            $even = isEven($number);
    
            $buzz = isBuzz($number);
    
            $duck = isDuck($number);

            $palindromic = isPalindromic($number);
    
    
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
            }
        }
    }
    
}