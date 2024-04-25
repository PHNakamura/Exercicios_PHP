<?php 

$x = 10;
echo "$x global <br>";

function teste()
{
    $x = 5;
    echo "$x local (função teste()) <br>";
}
echo "<br>";
teste();

function testando()
{
    $x = 12;
    echo "$x local 2 (função testando()) <br>";
}
echo "<br>";
testando();

echo "<br>";
teste();
testando();
echo "$x global <br>";

//alterando a variável global
$x = "TESTE (alterando para STRING o valor da variável global) - ";
echo "<br>";
teste();
testando();
echo "$x global <br>";
?>