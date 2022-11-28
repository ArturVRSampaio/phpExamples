<?php

$a = 123;
$b = 123;
$sum = sum($a,$b);

echo ("the sum of $a and $b is $sum \n");

function sum(int $a, int $b): int
{
    $result = $a + $b;
    return $result;
}