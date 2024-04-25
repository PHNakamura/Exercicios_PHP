<?php
// Seção 9
// Exercício de programação 8: Soma dos dígitos;
// 1- Crie uma função chamada [sumDigits] que recebe um número inteiro como parâmetro;
// 2- A função deve calcular a soma dos digitos desse número;
// 3- Retorne o valor da soma;
// Dicas:
// Utilize a estrutura de repetição [while] para calcular a soma dos digitos.


function sumDigits($n){
    $sum = 0;
    $num = [];
    $aux = str_split($n);

    foreach($aux as $var){
        array_push($num, $var);
        $sum += $var;
    }

    echo "O número informado foi: $n. <br>";
    $vetor = implode(", ", $num);
    echo "A soma dos números [$vetor] é: $sum. <br>";
    return $sum;
}

sumDigits(20);
