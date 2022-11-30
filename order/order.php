<?php



$array_numerico = [4, 1, 5, 7, 8, 0, 2, 12, 456, 78, 90, 500, 344, 255, 0];


echo ("\n");
echo ("inicio\n");
for ($i=0; $i < count($array_numerico) ; $i++) {
    echo $array_numerico[$i] .  " ";
}

for ($y = 0; $y <count($array_numerico) ; $y++){
    for ($i=0; $i < count($array_numerico) -1; $i++){

        $posAtual= $i;
        $posProx = $i+1;

        if ($array_numerico[$posAtual] > $array_numerico[$posProx]){
            $intemediaria = $array_numerico[$posAtual];
            $array_numerico[$posAtual] = $array_numerico[$posProx];
            $array_numerico[$posProx] = $intemediaria;
        }
    }
}



echo ("\n");
echo ("result final\n");
for ($i=0; $i < count($array_numerico) ; $i++) {
    echo $array_numerico[$i] .  " ";
}
echo ("\n");

