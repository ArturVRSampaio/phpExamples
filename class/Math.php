<?php

class math{
    
    public function simpleSum(float $a, float $b): float
    {
        $result = $a + $b;
        return $result;
    }
    
    public function simpleMulti(float $a, float $b):float
    {
        $result = $a * $b;
        return $result;
    }

    public function recursiveMulti(float $a, float $b): float
    {
        if ($b >1){
            $result = $a + $this->recursiveMulti($a, $b-1);
            return $result;
        }
        return $a;
    }
}