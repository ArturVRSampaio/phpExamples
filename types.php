<?php

$a = 1234;
echo ("$a ");
echo (gettype($a) . "\n");

$a = "asd";
echo ("$a ");
echo (gettype($a) . "\n");

$a = true;
echo ("$a ");
echo (gettype($a) . "\n");

$a = 12.89;
echo ("$a ");
echo (gettype($a) . "\n");

$a = null;
echo ("$a ");
echo (gettype($a) . "\n");

$a = [];
echo ("[] ");
echo (gettype($a) . "\n");

$a = (object) ['zxc' => 'asd'];
echo ("['zxc' => 'asd'] ");
echo (gettype($a) . "\n");



$asd = [0 => "a", 1=> "b", 2=> "c"];

var_dump($asd);
var_dump($asd[1]);

echo("\n");
echo("|||||||||| \n");
echo("\n");

class example{
    public string $zxc = "asd";
}

$exampleInstance = new example();

var_dump($exampleInstance);

