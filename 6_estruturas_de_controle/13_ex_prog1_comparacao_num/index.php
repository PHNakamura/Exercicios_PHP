<?php 

// Seção 6. Exercício de programação 1. Comparação de números.
// 1- Escreva uma função chamada [compararNumeros] que receba dois números inteiros como parâmetros.
// 2- A função deve comparar dois números e retornar uma string indicando qual número é maior ou se são iguais.
// 3- Considere as seguines condições:
//     - Se o primeiro número for maior que o segundo número, retorne a sring "O primeiro número é maior".
//     - Se o segundo número for maior que o primeiro, retorne a string "O segundo número é maior".
//     - Se os números forem iguais, retorne a string "os números são iguais".

$arr1 = [1, 2, 3 ,4 ,5];
$key1 = array_rand($arr1);
$x = $arr1[$key1];

$arr2 = [4, 5, -6 ,-7, 8];
$key2 = array_rand($arr2);
$y = $arr2[$key2];


function compararNumeros($x, $y)
{
    if($x > $y)
    {
        echo "O primeiro número é maior<br>";
    }
    else if ($x < $y)
    {
        echo "O segundo número é maior<br>";
    }
    else{
        echo "Os números são iguais<br>";
    }
}

echo "\$x[$x]<br>";
echo "\$y[$y]<br>";
compararNumeros($x, $y);

