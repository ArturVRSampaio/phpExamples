<?php

$result = "test";

showResult($result);



function showResult(string $result): void
{
    echo ("the result is $result \n");
}