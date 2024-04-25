<?php 

function teste()
{
    $a = 0;
    $a ++;

    echo "$a <br>";
}
teste();
teste();
teste();

echo "<br><br>";

function testeStatic()
{
    static $a = 0;
    $a ++;

    echo "$a <br>";
}
print "Testando Escopo de variável ESTÁTICA: <br>";
testeStatic();
testeStatic();
testeStatic();

?>