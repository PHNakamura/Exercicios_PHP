<?php 

// Verificação de Acesso
// 1- Escreva uma função chamada [verificarAcesso] que recebe dois parametros: um número inteiro representando a idade de uma pessoa e um booleano indicando se a pessoa possui autorização de acesso;
// 2- A função deve retornar uma string indicando se a pessoa pode ou não ter acesso a um determinado local;
// 3- Considere as seguintes condições:
//     - Se a idade for maior ou igual a 18 anos e autorização for verdadeira, retorne a string "Acesso autorizado.";
//     - Se a idade for menor que 18 anos, retorne a string "Acesso negado. Idade mínima requerida: 18 anos";
//     - Se a idade for maior ou igual a 18 anos, mas a autorização for falsa, retorne a string "Acesso negado. Autorizaação necessária."


function verificarAcesso($x, $y)
{
    if($x >= 18 && $y == true)
    {
        echo "Acesso utorizado<br>";
    }
    else if($x < 18)
    {
        echo "Acesso Negado.<br> Idade mínima requerida: 18 anos. <br>";
    }
    else if ($x >= 18 && $y == false)
    {
        echo "Acesso Negado.<br> Autorização necessária. <br>";
    }
}

echo "<br><br>1)<br>";
verificarAcesso(18, true);
echo "<br><br>2)<br>";
verificarAcesso(15,true);
echo "<br><br>3)<br>";
verificarAcesso(20, false);
echo "<br><br>4)<br>";
verificarAcesso(null, null);
