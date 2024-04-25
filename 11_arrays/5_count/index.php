<?php
// Número de elementos de um array - COUNT

$arr = [1, 2, 3];

echo count($arr) . "<br>";

$arr2 = range(1, 10);
echo count($arr2) . "<br>";

$arr3 =[
    'transporte' => "carro",
    'marca' => 'BMW',
    'cor' => 'azul'
];
echo count($arr3) . "<br>";
