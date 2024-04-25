<?php
// strrpos - encontrar a última(revered) ocorrência

$str = "Testando encontrado palavra teste, em uma string que tem teste";

$palavra = strrpos("$str", "teste"); //strRpos

echo strlen($str)."<br>";

echo $palavra."<br>";

//difernça
$palavra2 = strpos("$str", "teste"); //strpos

echo $palavra2."<br>";

echo "<br>";
if(strrpos($str, "java") === false){
    echo "A palavra java não foi encontrada.<br>";
}

$p = substr($str, strpos($str, "teste"), 5);

echo $p. "<br>";
