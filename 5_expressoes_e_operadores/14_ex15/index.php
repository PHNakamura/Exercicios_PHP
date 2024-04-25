<?php 

$a = 10;
$b = 10;

echo "Variável \$a: $a.<br>";
echo "Variável \$b: $b.<br>";
if($a == $b):
    echo "Os números são iguais.<br>";
else:
    echo "Os números NÃO são iguais.<br>";
endif;

echo "<br>";
$c = "Teste";
$d = "testE";

echo "Variável \$c: $c.<br>";
echo "Variável \$d: $d.<br>";
if($c == $d)
{
    echo "As palavras são coincidentes.<br>";
}
else
{
    echo "As palavras NÃO são coincidentes.<br>";
}


echo "<br>";
echo "Variável \$a: $a.<br>";
echo "Variável \$d: $d.<br>";
if($a == $d)
{
    echo "As variáveis são coincidentes.<br>";
}
else
{
    echo "As variáveis NÃO são coincidentes.<br>";
}
 
$t = ['T','E','S','T','E'];
$k = array_rand($t);
$k1 = array_rand($t);
echo "<br>";
print_r($t);
echo "<br>";
echo $k;
echo "<br>";
echo $k1;
echo "<br>";
echo "$t[$k]";
echo "<br>";
echo "$t[$k1]";
echo "<br>";

if($t[$k] == $t[$k1]):
    echo "As variáveis $t[$k] e $t[$k1] são iguais.<br>";
else:
    echo "As variáveis $t[$k] e $t[$k1] NÃO são iguais.<br>";
endif;
