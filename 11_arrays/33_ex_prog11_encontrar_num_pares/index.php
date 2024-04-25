<?php
// Seção 11: Avançado em arrays
// Exercício de programação 11: Encontrar números pares

// 1- Escreva uma função chamada [encontrarPares] que receba um array de números inteiros como parâmetro.
// 2- A função deve retornar um novo array contendo apenas números pares presentes no array princpal.
// 3- Considere que o array sempre terá pelo menos um elemento.

// Dicas:
// Utilize a função [array_filter] do PHP em conjunto com a uma função anônima para filtrar os números pares.

$arr = range(1,20);

echo "array: [" . implode(", ", $arr) . "] <br>";
echo "<br>";

function encontrarPares($array){
    if(count($array) < 1):
        echo "<br>";
        echo "O array deve conter pelo menos um elemento. <br>";
    else:
        $newArr = [];
        foreach($array as $values):
            if($values % 2 == 0):
                array_push($newArr, $values);
            endif;
        endforeach;
        return $newArr;
    endif;
}

echo implode(", ", encontrarPares($arr)) . "<br>";

print_r(encontrarPares($arr));
