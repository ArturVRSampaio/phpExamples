<?php

class out{
    public function print(string $print):void 
    {
        echo($print);
    }

    public function println(string $print):void 
    {
        echo("$print \n");
    }
}