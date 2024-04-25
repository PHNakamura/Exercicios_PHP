<?php 


$a = 10;
$b = 20;
$op1 = $a >= $b;
$op2 = $a <= $b;
echo "\$a($a)<br> \$b($b)<br>";

echo '<br>$op1 = $a >= $b<br>';
echo $op1 ? "A variável \$a($a) é MAIOR ou igual a variável \$b($b)<br>" : "A Variável \$a($a) é MENOR ou igual a variável \$b($b)<br>";

echo '<br>$op2 = $a <= $b<br>';
echo $op2 ? "A variável \$a($a) é MENOR ou igual a variável \$b($b)<br>" : "A Variável \$a($a) é MAIOR ou igual a variável \$b($b)<br>";
