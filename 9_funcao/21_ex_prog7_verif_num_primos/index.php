<?php
// Seção 9;
// Exercício de programação 7: Verificador de números primos;
// 1- Crie uma função chamada [isPrime] que receba um número inteiro positivo como parâmetro;
// 2- A função deve verificar se o número fornecido é um número primo;
// 3- Um número primo é aquele que é divisível por 1 e por ele mesmo;
// 4- Caso o número fornecido seja menor que 2, retorne [false];
// 5- Caso contrário, percorra os números de 2 até raiz quadrada do número fornecido e verifique se algum deles é um divisor do número. Se encontrar um divisor, retorne [false]. Caso contrário, retorne [true].
// Dicas:
// Utilize a estrutura de repetição [for] para percorrer os números e a operação [%] para verificar se há divisão exata.


function isPrime($num){
    $count = 0;
    $arr = [];
    if($num === 1 || $num === 0){
        echo "O número $num não é primo. <br>";
        return false;
    }
    for($n = 1; $n <= $num; $n++){
        if($num % $n == 0){
            array_push($arr, $n);
            $count++;
        }
    }
    if($count === 2){
        echo "O número $num é primo.<br>";
        return true;
    }
    else{
        echo "O número $num NÃO é primo e possui $count divisores.<br>";
        echo "Os divisores são: ".implode(", ", $arr)."<br>";
        return false;
    }
}


isPrime(0);

