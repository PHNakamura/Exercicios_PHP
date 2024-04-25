<?php

// ucfirst - primeira letra da string em maiúscula;
// ucwords - primeira letra de cada palavra em maiúscula;

$frase = "testando o case de uma palavra. <br>";
$frase2 = "Testando o case de uma palavra. <br>";
$frase3 = "testando o case de uma palavra. <br>";
$frase4 = "TESTANDO o case de uma palavra. <br>";

echo ucfirst($frase);
echo ucfirst($frase2);
echo ucfirst($frase3);
echo ucfirst($frase4);

echo "<br>----------------------------------------------------------------------<br>";
echo ucwords($frase);
echo ucwords($frase2);
echo ucwords($frase3);
echo ucwords($frase4);

echo "<br>----------------------------------------------------------------------<br>";
echo strtolower($frase);
echo strtolower($frase4);
echo "<br>";
echo strtoupper($frase);
echo strtoupper($frase4);
