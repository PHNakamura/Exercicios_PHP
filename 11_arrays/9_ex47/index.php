<?php

$carro = [ 'jaguar', '3.0' ,'azul', 18, 'Teto solar', 'automático'];

list($marca, $cilindrada, $cor, $aro, $opcional, $cambio) = $carro;

echo "<pre>";
print_r($carro);
echo "</pre>";

echo "<br>-------------------------------------------------------------------------------------------<br>";
echo "<br>";
echo "marca: $marca <br>";
echo "cilindrada: $cilindrada <br>";
echo "cor: $marca <br>";
echo "aro: $aro <br>";
echo "opcional: $opcional <br>";
echo "câmbio: $cambio <br>";
