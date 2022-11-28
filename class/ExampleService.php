<?php

include 'Out.php';
include 'Math.php';

class exampleService{

    private float $value1 = 1;
    private float $value2 = 2;

    public function execute(){
        $math = new Math();
        $out = new Out();

        $out->println("value 1 = $this->value1, value2 = $this->value2");

        $result1 = $math->simpleSum($this->value1, $this->value2);
        $out->println("recursive sum = $result1");


        $result2 = $math->simpleMulti($this->value1, $this->value2);
        $out->println("simple multi = $result2");


        $result3 = $math->recursiveMulti($this->value1, $this->value2);
        $out->println("recursive multi = $result3");
    }




}