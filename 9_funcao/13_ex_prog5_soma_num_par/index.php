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
for($i = 1; $i <= 40; $i++){
    array_push($arr, $i);
}

var_dump($arr);
echo "<br>";
echo "<br>-----------------------------------------------------------------------<br>";

function sumEvenNumbers($array) {
    $somaPar = 0;
    $vetor = [];
    for($n = 0; $n < count($array); $n++){
        if($array[$n] % 2 == 0) {
            array_push($vetor, $array[$n]);
            $somaPar = $somaPar + $array[$n];
        } else {
            echo "O número informado ($array[$n]) não é par...<br>";
        }
    }
    echo "<br>";
    print_r($vetor);
    echo "<br>";
    echo "<br>";
    return $somaPar;
}   


$res = sumEvenNumbers($arr);
echo $res;
echo "<br>";





// global $arr;
//     $soma = 0;
//     if($n % 2 == 0)
//      {
//         array_push($arr, $n);
//     }
//     for($i = 0; $i <= count($arr); $i++)
//     {
//         if($arr[$i] % 2 == 0)
//         {

//             $soma = $soma + $arr[$i];
//             return $soma;
//         }
//         else
//         {
//             echo "Este não é um número par...<br>";
//             echo "Boa sorte da próxima vez!<br>";
//         }
//     }