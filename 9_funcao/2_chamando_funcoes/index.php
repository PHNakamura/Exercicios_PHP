<?php

//definindo a função
function soma()
{
    echo 4 + 2 . "<br>";
}

// chamando / invocando a função
soma();
soma();

echo "<br>---------------------------------------------------------------------<br>";
function soma1()
{
    $a = 5;
    $b = 4;
    echo $a + $b . "<br>";
}

soma1();

echo "<br>---------------------------------------------------------------------<br>";
function soma2($c, $d)
{
    echo $c + $d . "<br>";
}

soma2(2, 3);

echo "<br>---------------------------------------------------------------------<br>";
//função do PHP
echo strtoupper("testando função");
echo "<br>";
$msg = "notebook acer";
echo strtoupper($msg);
echo "<br>";
$msg1 = "TESTANDO O CÓDIGO";
echo strtolower($msg1);