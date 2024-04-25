<?php
// array_keys e array_values

$carro = [
    'marca' => 'BMW',
    'motor' => '2.4',
    'teto_solar' => true,
    'cambio' => 'manual',
    'portas' => 4
];

echo 'array[$carro]: <br>';
print_r($carro);
echo "<br>";

echo "-----------------------------------------------------------------------------------<br>";
echo 'array[$chaves]: <br>';
$chaves = array_values($carro);
print_r($chaves);
echo "<br>";
echo implode(", ", $chaves). "<br>";

echo "-----------------------------------------------------------------------------------<br>";
echo 'array[$keys]: <br>';
$keys = array_keys($carro);
print_r($keys);
echo "<br>";
echo implode(", ", $keys). "<br>";

