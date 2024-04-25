<?php
// efeito contrario do extract

$marca = 'BMW';
$motor = "3.0";
$tetosolar = true;
$portas = 4;

$carro = compact('marca', 'motor', 'tetosolar', 'portas');

print_r($carro);

echo "<br>----------------------------------------------------------------------------------<br>";

$carro1 = compact('marca', 'motor', 'tetosolar', 'portas', 'teste'); // gera warning = variável $teste não existe

print_r($carro1);



