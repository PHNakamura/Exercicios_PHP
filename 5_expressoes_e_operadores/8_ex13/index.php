<?php 

$a = 10;
$b = 20;
echo "A variável \$a tem o valor de: $a<br>";
echo "A variável \$b tem o valor de: $b<br>";

$op1 = $a % $b;
$op1a = $a / $b;
echo "<br>O resultado (resto) da operação \$a % \$b (módulo) é: $op1 <br> ";
echo "O resultado da operação \$a / \$b (divisão) é: $op1a <br> ";

$op2 = $b % $a;
$op2a = $b / $a;
echo "<br>O resultado (resto) da operação \$b % \$a (módulo) é: $op2 <br> ";
echo "O resultado da operação \$b / \$a (divisão) é: $op2a <br> ";
echo "<br>";

?>