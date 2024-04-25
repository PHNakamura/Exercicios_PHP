<?php
// substr

$str = "Esta é a minha string";

$minha = substr($str, 10, 5);   // string pai, indice inicial, comprimento da palavra

echo $str."<br>";
echo $minha ."<br>";

echo "<br>------------------------------------------------------------------------<br>";
$str2 = "Testando esta string abc";

$novaString = substr($str2, 8); //Omitir comprimento = pega até o fim

echo $novaString ."<br>";

$novaString2 = substr($str2, 8, -3); // comprimento NEGATIVO = remove do ultimo indice

echo $novaString2;
