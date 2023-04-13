<?php
use function Functions\Interaction\getUserInput;
use function Funtions\Helpers\isEven;
use function Funtions\Helpers\isNatural;

require_once("functions/helpers.php");
require_once("functions/buzz.php");
require_once("functions/interaction.php");

$number = getUserInput();

$natural = isNatural($number);

if ($natural) {
    isEven($number);

    isBuzz($number);
}