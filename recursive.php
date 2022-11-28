<?php


$a = 2;
$b = 4;

$multi = multi($a, $b);

echo ("the multi of $a and $b is $multi \n");


function multi(int $a, int $b){
    if ($b >1){
        $result = $a + multi($a, $b-1);
        return $result;
    }
    return $a;
}