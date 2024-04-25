<?php
// strpos - encontrar a primeira ocorrencia

$str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";
$testeEncontrar = strpos($str, "strpos");
echo $testeEncontrar . "<br>";

echo "<br>-------------------------------------------------------------------<br>";
$testeEncontrar2 = strpos($str, "Java");
echo $testeEncontrar2 . "<br>";

if($testeEncontrar2 === false){
echo "Palavra não encontrada. <br>";
}

echo "<br>-------------------------------------------------------------------<br>";
$testeEncontrar3 = strpos($str, "com");
echo $testeEncontrar3 . "<br>";

echo "<br>-------------------------------------------------------------------<br>";
$testeEncontrar4 = strpos($str, "to");
echo $testeEncontrar4 . "<br>";
