<?php

$arr = [];

print_r($arr);
echo "<br>";

echo "<br>----------------------------------------------------------------------------------------<br>";
// Adicionando valores
$arr[0]=10;
print_r($arr);
echo "<br>";

echo "<br>----------------------------------------------------------------------------------------<br>";
$arr[1]=15;
print_r($arr);
echo "<br>";

echo "<br>----------------------------------------------------------------------------------------<br>";
$arr[5]=5;
print_r($arr);
echo "<br>";

echo "<br>----------------------------------------------------------------------------------------<br>";
// Modifcando valores
$arr[1] += 55;
print_r($arr);
echo "<br>";

echo "<br>----------------------------------------------------------------------------------------<br>";
// Array associativo
$arrAssoc = [];
print_r($arrAssoc);
echo "<br>";

echo "<br>----------------------------------------------------------------------------------------<br>";
$arrAssoc['carro'] = 'BMW';
print_r($arrAssoc);
echo "<br>";

echo "<br>----------------------------------------------------------------------------------------<br>";
$arrAssoc['avião'] = 'Boeing';
print_r($arrAssoc);
echo "<br>";

echo "<br>----------------------------------------------------------------------------------------<br>";
$arrAssoc['carro'] = 'Ferrari'; // Altera o valor pela chave que foi passada. Não altera a chave, apenas o valor
print_r($arrAssoc);
echo "<br>";