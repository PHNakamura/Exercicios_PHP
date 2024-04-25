<?php

function defineCorCarro($cor = "vermelha"){
    return $cor;
}


echo "---------------------------------------------------------------<br>";
$aux = defineCorCarro();
echo "O carro é da cor: $aux.<br>";

echo "<br>---------------------------------------------------------------<br>";
$carroAzul = defineCorCarro("Azul");
echo "O carro é da cor: $carroAzul.<br>";

echo "<br>---------------------------------------------------------------<br>";
$aux = defineCorCarro("Amarelo");
echo "O carro é da cor: $aux.<br>";

echo "<br>---------------------------------------------------------------<br>";
$aux = defineCorCarro("Cinza");
echo "O carro é da cor: $aux.<br>";
