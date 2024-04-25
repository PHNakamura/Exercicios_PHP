<?php
// Seção 11: avançado em arrays
// Exercício de programação 9: Soma dos elementos.
// 1- Escreva uma função chamada [somaElementos] que recebe um array de números como parâmetro.
// 2- A função deve retornar soma de todos os elementos do array.
// 3- Considere que o array sempre terá pelo menos um elemento.
// Dicas:
// Utilize a função [array_sum] do PHP para calcular a soma dos elementos do array.

// editor de código da plataforma:
// FAILED ASSERTING THAT NULL MATCHES EXPECTED 15.

$arr = range(0, 10);
// $arr = [];
// $arr = [1];

echo "array: [" . implode(", ", $arr) . "]<br>";
echo "Tem: ".count(($arr)). " elementos. <br>";

function somaElementos($array){
    if(count($array) < 1):
        echo "Não há soma. Array vazio. <br>";
    else:
        echo "<br>";
        echo "A soma de todos os elementos do array é: ";
        // echo array_sum($array);
        return array_sum($array);
        echo "<br>";
    endif;
}
echo somaElementos($arr);
echo "<br>";

echo "<br>";
echo "--------------- ou ---------------------<br>";
echo "<br>";
function sum($a, $b){
    return $a + $b;
}

echo "O valor da soma do array[arr] é: " . array_reduce($arr, 'sum') . "<br>";
