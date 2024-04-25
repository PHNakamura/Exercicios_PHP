<?php

$arr =[
    [1, 2, 3],
    [2, 4, 6],
    [1, 3, 5, 7, 9]
];

echo "<br>";
print_r($arr);
echo "<br>";

echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<br>";

echo "<br>---------------------------------------------------------------------------------------------------<br>";

echo "<br>";
var_dump($arr);
echo "<br>";

echo "<pre>";
var_dump($arr);
echo "</pre>";

echo "<br>";

echo "<br>---------------------------------------------------------------------------------------------------<br>";

echo $arr[0][1] . "<br>";   //acessando o primeiro array, e o segundo elemento
echo $arr[1][2] . "<br>";   //acessando o segundo array,  e o último elemento

echo "<br>---------------------------------------------------------------------------------------------------<br>";

echo "Tamanho de \$arr: ". count($arr) . "<br>";
echo 'Tamanho de $arr[0]: '. count($arr[0]) . "<br>";
echo 'Tamanho de $arr[2]: '. count($arr[2]) . "<br>";

