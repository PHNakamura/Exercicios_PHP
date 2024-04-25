<?php

$str = "Cadê o meu queijo? Ele estava aqui em cima.";
$len = strlen($str);
echo "O comprimento da minha string é de $len caracteres.<br>";
echo $str."<br>";
$queijo = substr($str, 12, 6);
echo $queijo;
echo "<br>";
$estava = substr($str, 24, 6);
echo $estava;
echo "<br>";