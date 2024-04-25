<?php

// 1- Crie uma função chamada [sumEvenNumbers] que recebe um número inteiro positivo como parametro.
// 2- A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.
// 3- Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.
// DICAS: 
//- Inicialize a variável de soma com zero antes do início do loop.
//- Utilize um loop [for] para percorrer os números de 1 até o número fornecido, inclusive.
//- Dentro do loop, verifique se o número é par utilizando o operador % (módulo). Se o resto da divisão por 2 for zero, significa que o número é par.
//- se o número for par, adicione-o à variável soma.
//- Ao final do loop, retorne o valor da variável de soma.  

$arr = [];
for($i = 0; $i <= 20; $i++){
    array_push($arr, $i);
}

var_dump($arr);
echo "<br>";
echo "<br>-----------------------------------------------------------------------<br>";

function sumEvenNumbers($array) {
    $somaPar = 0;
    $vetor = [];
    foreach($array as $values){
        if(($values % 2 == 0)){ 
            array_push($vetor, $values);
            $somaPar += $values;
        }
    }

    // echo "<br>";
    // print_r($vetor);
    // echo "<br>";
    // echo "<br>";

    return $somaPar;
}   


$res = sumEvenNumbers($arr);
echo $res;
echo "<br>";



