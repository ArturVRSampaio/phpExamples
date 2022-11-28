<?php

$b = 4;
$a = 2;
$multi = multiply($a,$b);

echo ("the multi of $a and $b is $multi \n");

function multiply(int $a, int $b): int
{
    $result = $a * $b;
    return $result;
}