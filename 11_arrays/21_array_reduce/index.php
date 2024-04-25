<?php

$arr = range(5, 10);

echo 'array[arr]: <br>';
print_r($arr);
echo "<br>";
echo "O array possui ".count($arr)." elementos. <br>";

echo "<br>--------------------------------------------------------------------------------------------<br>";
echo "Usando for: <br>";
$x = 0;
for($i=0; $i < count($arr); $i++){
    $x += $arr[$i];
}
echo "A soma é: $x <br>";

echo "<br>--------------------------------------------------------------------------------------------<br>";
echo "array_reduce com função soma: <br>";

function soma($a, $b){
    echo "a = $a <br>";
    echo "b = $b <br>";
    return $a + $b;
}

$aux = array_reduce($arr, "soma");

echo 'A soma dos elementos do array[$arr] é: <br>';
echo $aux;
echo "<br>";

echo "<br>--------------------------------------------------------------------------------------------<br>";
echo "array_reduce com função subtração: <br>";

function minus($a, $b){
    echo "a = $a <br>";
    echo "b = $b <br>";
    return $a - $b;
}

$aux1 = array_reduce($arr, "minus");

echo 'A subtração dos elementos do array[$arr] é: <br>';
echo $aux1;
echo "<br>";

echo "<br>--------------------------------------------------------------------------------------------<br>";
echo "array_reduce com função multiplicação: <br>";

function times($a, $b){
    echo "a = $a <br>";
    echo "b = $b <br>";
    return $a * $b;
}

$aux2 = array_reduce($arr, "times");

echo 'A multiplicação dos elementos do array[$arr] é: <br>';
echo $aux2;
echo "<br>";

echo "<br>--------------------------------------------------------------------------------------------<br>";
echo "array_reduce com função divisão: <br>";

function split($a, $b){
    if($b == 0){
        echo "Não é possível dividir por zero. <br>";
    } else{ 
        echo "a = $a <br>";
        echo "b = $b <br>";    
        return $a / $b;
    }
}

$aux3 = array_reduce($arr, "split");

echo 'A divisão dos elementos do array[$arr] é: <br>';
echo $aux3;
echo "<br>";