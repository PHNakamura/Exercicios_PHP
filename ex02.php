<?php

    // Atividade proposta pelo Matheus Batisti (Hora de codar).
    // Exercício 02 - Verificação de acesso.
    // 1- Escreva uma função chamada [verificarAcesso] que receba dois parâmetros: um número inteiro representando a idade de uma pessoa e um booleano indicando se a pessoa possui autorização de acesso.
    // 2- A função deve retornar uma string indicando se a pessoa pode ou não ter acesso a um determinado local;
    // 3- Considere as seguintes condições:
    //      - Se a idade for maior ou igual a 18 anos e autorização for verdadeira, retorne a string "Acesso autorizado";
    //      - Se a idade for menor que 18 anos, retorne a string "Acesso negado. Idade mínima requerida: 18 anos";
    //      - Se a idade for maior ou igual a 18 anos, mas a autorização for falsa, retorne a string "Acesso negado. Autorização necessária".

    function verificar_acesso($x, $y){
        if($x == null && $y == null) {
            echo "ACESSO NEGADO! <br> AS condições não podem ser nulas. <br>";
        } else {
            if($x >= 18 && $y == true){
                echo "Acesso autorizado. <br>";
            } elseif($x < 18){
                echo "Acesso negado. <br> Idade mínima requerida: 18 anos. <br>";
            } elseif($x >= 18 && $y == false){
                echo "Acesso negado. <br> Autorização necessária. <br>";
            } else {
                echo "ACESSO NEGADO! <br>";
            }
        }
    }

    echo "<br> <br> 1) <br>";
    verificar_acesso(18, true);

    echo "<br> <br> 2) <br>";
    verificar_acesso(15, true);

    echo "<br> <br> 3) <br>";
    verificar_acesso(20, false);

    echo "<br> <br> 4) <br>";
    verificar_acesso(null, null);

    echo "<br> <br> 5) <br>";
    verificar_acesso(50, null);

    // ou 
    
    function verificarAcesso($x, $y){
        if($x >= 18 && $y == true){
            echo "Acesso autorizado. <br>";
        } elseif($x < 18){
            echo "Acesso negado. <br> Idade mínima requerida: 18 anos. <br>";
        } elseif($x >= 18 && $y == false){
            echo "Acesso negado. <br> Autorização necessária. <br>";
        }
    }

    echo "<br> <br> 1) <br>";
    verificarAcesso(18, true);

    echo "<br> <br> 2) <br>";
    verificarAcesso(15, true);

    echo "<br> <br> 3) <br>";
    verificarAcesso(20, false);

    echo "<br> <br> 4) <br>";
    verificarAcesso(null, null);
    