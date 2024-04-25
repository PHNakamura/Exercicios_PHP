<?php
//Funciona somente para array pronto (já existente. Ele não cria um novo array)
$arr = ['Matheus', 'João', 'Pedro', 'Maria', 'José'];
$n = 10;

foreach($arr as $nome)
{
    echo "O nome do índice atual é $nome. <br>";
    if ($nome == "Matheus")
    {
        echo "Opa! ".$n."<br>";
    }
}

