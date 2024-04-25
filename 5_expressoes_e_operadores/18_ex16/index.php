<?php 

$a = 5;
$b = 3;

if($a == $b):
    echo "A variável \$a ($a) é IGUAL a variável \$b ($b).<br>";
endif;
if($a != $b):
    echo "A variável \$a ($a) é DIFERENTE a variável \$b ($b).<br>";
endif;
if($a === $b):
    echo "A variável \$a ($a) é IDÊNTICA a variável \$b ($b).<br>";
endif;
if($a !== $b):
    echo "A variável \$a ($a) NÃO É IDÊNTICA a variável \$b ($b).<br>";
endif;
