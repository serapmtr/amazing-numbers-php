<?php

namespace Functions\Interaction;

function getUserInput(): string
{
    $number = readline("Enter a natural number: \n");

    return $number;
}