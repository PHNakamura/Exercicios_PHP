<?php

$genero = 'canis';
$raca = 'weimaraner';
$porte = 'grande';
$tamanho = '63 cm';
$peso = '37kg';

$pet = compact('genero', 'raca', 'porte', 'tamanho', 'peso');
print_r($pet);
echo "<br><br>";

echo "---------------------------------------------------------------------------------------------------------<br>";
echo "<br><pre>";
echo 'array[$pet]: <br>';
print_r($pet);
echo "</pre><br>";

echo "---------------------------------------------------------------------------------------------------------<br>";
echo 'loop foreach: <br>';
foreach($pet as $chaves => $descricao){
    echo "[$chaves] => $descricao <br>";
}

echo "---------------------------------------------------------------------------------------------------------<br>";
echo 'loop for: <br>';
$key = array_keys($pet);
$val = array_values($pet);
for($i = 0; $i < count($pet); $i++){
    //echo $i." => ".$pet[$i]. "<br>";
    echo $key[$i] . " => ". $val[$i]. "<br>";
}

echo "<br>";
print_r($key);
echo "<br>";
echo "<br>";
print_r($val);
