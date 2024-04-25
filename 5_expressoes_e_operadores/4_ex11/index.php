<?php 

$a = "5"; //auto cast
$b = 12;

if(is_int($a)):
    echo "<br>A variável \$a, cujo valor é $a é INTEIRO.<br>";
elseif(is_float($a)):
    echo "<br>A variável \$a, cujo valor é $a é FLOAT.<br>";
elseif(is_bool($a)):
    echo "<br>A variável \$a, cujo valor é $a é BOOLEANA.<br>";
elseif(is_null($a)):
    echo "<br>A variável \$a, cujo valor é $a é NULA.<br>";
else:
    echo "<br>A variável \$a, cujo valor é $a é STRING.<br>";
endif;

echo "<br>A variável \$b, cujo valor é $b, é uma variável do tipo: <br>";
echo gettype($b);
echo "<br>";

echo "<br>";
$res = $a * $b;
echo "O resultado da multiplicação entre $a e $b é: <br>";
echo $res;
echo "<br>E este resultado ($res) é do tipo:<br>";
echo gettype($res);
echo "<br>";

echo "<br>";
echo "<br>";
echo gettype([])."<br>";
echo gettype(12.12)."<br>";
echo gettype(null)."<br>";
echo gettype(true)."<br>";
echo gettype(10)."<br>";

?>