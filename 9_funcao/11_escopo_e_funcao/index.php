<?php

$a = 10;

$b = 15;

function testeEscopo()
{
    $a = 5;

    $a++;

    global $b;
    // $b++;

    //$c = 0; 
    static $c = 0;    //TESTE - PARA VERIFICAR O COMPORTAMENTO DA VARIAVEL QUANDO ELA É DECLARADA STATIC (PARECE O COMPORAMENTO DE UMA VARIVAVEL GLOBAL)
    $c++;

    echo "Escopo LOCAL de \$a($a) <br>";
    echo "<br>";
    echo "Escopo GLOBAL na função de \$b($b) <br>";

    $b++;
    echo "<br>";
    echo "Escopo GLOBAL na função 2 de \$b($b) <br>";

    echo "Escopo STATIC de \$c($c) <br>";

}

echo "Escopo GLOBAL de \$a($a) <br>";
echo "Escopo GLOBAL de \$b($b) <br>";

echo "<br>";
echo "--------------------------------------------------------------------<br>";
testeEscopo();

echo "<br>";
echo "--------------------------------------------------------------------<br>";
echo "Escopo GLOBAL 2 de \$b($b)<br>";

echo "<br>";
echo "--------------------------------------------------------------------<br>";
testeEscopo();

echo "<br>";
echo "--------------------------------------------------------------------<br>";
testeEscopo();