<?php

use Random\Randomizer;

$a = 10;
$b = 20;
$c = -30;
$d = 40.2;
$e = ['$a'=>$a,'$b'=>$b,'$c'=>$c,'$d'=>$d];
//$e = [$a,$b,$c,$d];

echo "<pre>";
echo "[array \$e]:<br>";
print_r($e);
echo "</pre>";
echo "<br>";

$x = $a - $b / $c * $d;
echo '<br>x = $a - $b / $c * $d';
echo "<br>x = $x <br>";

$y = $d - $c / $b * $a;
echo '<br>y = $d - $c / $b * $a';
echo "<br>y = $y <br>";

//por minha conta daqui paa baixo
//Essa função array_rand passa o valor (posicional) aleatório de uma chave(key)
//Ai se chama o array passando a chave aleatória para se obter o valor
echo "<br>";
$key1 = array_rand($e);
$key2 = array_rand($e);
$key3 = array_rand($e);
$key4 = array_rand($e);
$conta = $e[$key1] - $e[$key2] / $e[$key3] * $e[$key4];

echo "<br>";
echo "\$aux1 = $e[$key1] <br>";
echo "\$aux2 = $e[$key2] <br>";
echo "\$aux3 = $e[$key3] <br>";
echo "\$aux4 = $e[$key4] <br>";
echo "<br>";


echo "<br>";
echo 'X = $aux1 - $aux2 / $aux3 * $aux4;<br>';
echo "X = $e[$key1] - $e[$key2] / $e[$key3] * $e[$key4];<br>";
echo $conta;
echo "<br>";

?>