<?php

function quadra($x)
{
    $msg = "O quadrado do número $x é: ";
    if(is_numeric($x))
    {
        $op = $x ** 2;
        $resp = $msg. " ". $op;
        return $resp;
    }
    else
    {
        return "Digite um número.";
    }
}

echo quadra(2);
echo "<br>";
echo quadra(5);
echo "<br>";
echo quadra(7);
echo "<br>";
echo quadra("asd");
echo "<br>";
echo quadra(NULL);
echo "<br>";
echo quadra(true);
echo "<br>";