<?php
// ordenação de arrays associativos
// Ordem CRESCENTE pelos valores - ASORT
// Ordem DECRESCENTE pelos valores - ArSORT
// Ordem CRESCENTE pelas chaves - KSORT
// Ordem DECRESCENTE pelas chaves - KRSORT


$arr =[
    'Matheus' => 28,
    'Ana' => 50,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12,
    'Zeca' => 24,
    'Aaron' => 100  
];

echo 'array[$arr]: (original)<br>';
print_r($arr);
echo "<br>------------------------------------------------------------------------------------------------<br><br>";


asort($arr);

echo 'array[$arr]: (asort)<br>';
print_r($arr);
echo "<br>------------------------------------------------------------------------------------------------<br><br>";


arsort($arr);

echo 'array[$arr]: (arsort)<br>';
print_r($arr);
echo "<br>------------------------------------------------------------------------------------------------<br><br>";


echo "<br>------------------------------------------------------------------------------------------------<br>";
echo "------------------------------------------------------------------------------------------------<br>";
echo "------------------------------------------------------------------------------------------------<br><br>";

ksort($arr);

echo 'array[$arr]: (ksort)<br>';
print_r($arr);
echo "<br>------------------------------------------------------------------------------------------------<br><br>";

krsort($arr);

echo 'array[$arr]: (krsort)<br>';
print_r($arr);
echo "<br>------------------------------------------------------------------------------------------------<br><br>";


