<?php
// Seção 11: Avançado em arrays
// Exercício de programação 12: Ordenação crescente de números.

// 1- Implemente uma função chamada [ordenarNumeros] que recebe um array de números como parâmetro.
// 2- A função deve ordenar os números em ordem crescente.
// 3- Retorne o array de números ordenados.

// Dicas:
// Utilize a função [sort] para ordernar o array em php.

$arr = range(0, 20);

$shuf = $arr;

shuffle($shuf);

echo implode(", ", $arr);
echo "<br>";

echo implode(", ", $shuf);
echo "<br>";

function ordenarNumeros($array){
    sort($array);
    return $array;
}

print_r(ordenarNumeros($shuf));
echo "<br>";
echo implode(", ", ordenarNumeros($shuf));
