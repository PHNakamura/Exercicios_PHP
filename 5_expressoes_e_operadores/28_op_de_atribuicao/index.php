<?php 

// +=
$a = 0;
echo "Variável \$a = $a<br>";
echo 'Operação: $a += 10<br>';
echo 'Significa: $a = $a + 10<br>';
echo "Calculando: $a + 10<br>";
$a += 10; // $a = $a + 10
echo "Resultado: $a<br>";
echo "<br>";


// -=
$b = 0;
echo "Variável \$b = $b<br>";
echo 'Operação: $b -= 5<br>';
echo 'Significa: $b = $b - 5<br>';
echo "Calculando: $b - 5<br>";
$b -= 5; // $b = $b - 5
echo "Resultado: $b<br>";
echo "<br>";

// *=
$c = 5;
echo "Variável \$c = $c<br>";
echo 'Operação: $c *= 2<br>';
echo 'Significa: $c = $c * 2<br>';
echo "Calculando: $c + 2<br>";
$c *= 2; // $c = $c * 2
echo "Resultado: $c<br>";
echo "<br>";


// /=
$d = 5;
echo "Variável \$d = $d<br>";
echo 'Operação: $d /= 2<br>';
echo 'Significa: $d = $d / 2<br>';
echo "Calculando: $d / 2<br>";
$d /= 2; // $d = $d / 2
echo "Resultado: $d<br>";
echo "<br>";


// %=
$e = 5;
echo "Variável \$e = $e<br>";
echo 'Operação: $e % 2<br>';
echo 'Significa: $e = $e % 2<br>';
echo "Calculando: $e % 2<br>";
$e %= 2; // $e = $e % 2
echo "Resultado: $e<br>";
echo "<br>";


// utilização com variáveis
$f = 10;
$g = 20;
echo '$f + $g ='.$f + $g."<br>";
echo "Variável \$f = $f<br>";
echo "Variável \$g = $g<br>";
echo 'Operação: $f += $g<br>';
echo 'Significa: $f = $f + $g<br>';
echo "Calculando: $f + $g<br>";
$f += $g; // $f = $f + $g
echo "Resultado: $f<br>";
echo "Novo valor de \$f = ".$f."<br>";
echo 'soma ($f + $g) ='.$f + $g."<br>";
echo "<br>";