<?php

$j = 0; //não precisa
$t = "Teste";

// CONTADOR; CONDIÇÃO ; INCREMENTO||DECREMENTO 
for($i = 0; $i < 10; $i++)
{
    echo "Testando o FOR ($i). <br>";

    if($i == 3)
    {
        echo $t."<br>";
    }

    if($i == 5)
    {
        echo 'condição ($i == 5)'." >>> ";
        echo "Saindo (do loop for) ... <br>";
        break; // vai pular a próxima instrução
    }

    if($i == 8)
    {
        echo $t."<br>";
    }
}


