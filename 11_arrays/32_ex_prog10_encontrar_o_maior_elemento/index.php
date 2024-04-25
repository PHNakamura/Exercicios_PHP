<?php
// Seção 11: Avançado em arrays
// Exercício de programação 10: Encontrar o maior elemento.

// 1- Escrever uma função chamada [maiorElemento] que recebe um array de números como parâmetro.
// 2- A função deve retornar o maior elemento presente no array.
// 3- Considere que o array sempre terá pelo menos um elemento.

// Dicas:
// Utilize a funçao [MAX] do PHP para encontrar o maior elemento do array.

//$arr = [];
$arr = range(1, -10);
echo "array: [" . implode(", ", $arr) . "] <br>";
echo "<br>";

function maiorElemento($array){
    if(count($array)<1):
        echo "O array deve conter pelo menos um elemento <br>";
    else:
        return max($array);
    endif;
}

echo "<br>O maior número do array é: ". maiorElemento($arr) . "<br>";

