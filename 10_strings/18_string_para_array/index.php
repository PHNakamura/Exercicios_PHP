<?php

$frase = "Testando o explode. ";
$fraseArray = explode(" ", $frase);
print_r($fraseArray);

echo "<br>--------------------------------------------------------------------------<br>";
$fraseArray = explode(", ", $frase); // separando com virgulas
print_r($fraseArray);   //NÃO DÁ CERTO. vira uma unica frase
echo "<br>";

echo "<br>--------------------------------------------------------------------------<br>";
$fraseB = "Carro, Avião, Barco, Navio";
$fraseArrayB = explode(", ", $fraseB); // separando com virgulas
print_r($fraseArrayB);   // Aparece SEM as virgulas
echo "<br>";

echo "<br>--------------------------------------------------------------------------<br>";
$fraseC = "Carro, Avião, Barco, Navio";
$fraseArrayC = explode(" ", $fraseC); // SEM virgulas
print_r($fraseArrayC);   // Aparece COM as vírgulas
echo "<br>";

echo "<br>--------------------------------------------------------------------------<br>";
for($i = 0; $i < count($fraseArrayB); $i++){
    echo $fraseArrayB[$i]."<br>";
}