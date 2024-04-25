<?php

$arr = range(10, 45);
echo 'array[$arr]: <br>';
print_r($arr);
echo "<br>";
echo "<br>";

$newArr=[];
$soma = 0;
echo 'array[$newArr]: <br>';
foreach($arr as $Key => $valor){
    $newValor = $valor + 6;
    array_push($newArr, $newValor);
    $soma += $newValor;
    if($newValor > 30){
        echo "O valor $newValor é muito alto. <br>";
    } else{
        echo $newValor . "<br>";
    }

}
echo "<br>";
print_r($newArr);
echo "<br>";
echo "<br>";
echo "A soma dos números do novo array é $soma. <br>";
