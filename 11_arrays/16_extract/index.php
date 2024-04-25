<?php

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
];
echo "<pre>";
echo "array[arr]: <br>";
print_r($arr);
echo "</pre><br>";

extract($arr);

echo $cor ."<br>";
echo $forma ."<br>";
echo $material ."<br>";

echo "<br>------------------------------------------------------------------------------------------<br>";
echo "Variável definida antes da execução do extract. <br>";
$nome = 'Fibonacci';
echo $nome ."<br>";

$arr1 = [
    'nome' => 'João',
    'idade' => 29
];

echo "<pre>";
echo "array[arr1]: <br>";
print_r($arr1);
echo "</pre><br>";

extract($arr1);

echo "<br>Após execução do extract. <br>";
echo $nome ."<br>";
echo $idade ."<br>";
echo "ATENÇÃO: O valor da vaiável é sobrescrita <br>";
