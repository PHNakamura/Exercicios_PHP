<?php

$matheus = [
    'nome' => 'Matheus',
    'idade' => 29,
    'prof' => 'programador'
];

$alexia = [
    'nome' => 'Aléxia',
    'idade' => 25,
    'prof' => 'Eng. Civil'
];

echo 'array[$matheus]: (print_r)<br>';
print_r($matheus);
echo "<br>";

echo "<br>----------------------------------------------------------------------------------------<br>";
echo 'array[$alexia]: (print_r)<br>';
print_r($alexia);
echo "<br>";


echo "<br>----------------------------------------------------------------------------------------<br>";
echo 'array[$matheus]: (foreach)<br>';
foreach($matheus as $caracteristicas => $descricao){
    echo "$caracteristicas => $descricao <br>";
}
echo "<br>";

echo "<br>----------------------------------------------------------------------------------------<br>";
echo 'array[$alexia]: (foreach)<br>';
foreach($alexia as $caracteristicas => $descricao){
    echo "$caracteristicas => $descricao <br>";
}
echo "<br>";

echo "<br>----------------------------------------------------------------------------------------<br>";
echo 'array[$alexia]: (foreach - somente os valores)<br>';
foreach($matheus as $descricao){
    echo "$descricao <br>";
}
echo "<br>";

