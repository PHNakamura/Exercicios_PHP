<?php 
//em inglês: auto cast

echo '5 / 2<br>';
echo 5 / 2;
echo "<br>";

if(is_int(5) and (is_int(2))):
    echo "<br>O número 5 e o número 2 SÃO inteiros.<br>";
endif;

if(is_float(5/2))
{
    echo '<br>5 / 2 = 2.5';
    echo '<br>O resultado da divisão entre 5 e 2 é float.<br>';
}
else
{
    echo '<br>O resutado da divião é inteiro.<br>';
}

echo "<br>";
echo "<br>";
echo 2 . 3;
if(is_string(2 . 3)):
    echo "<br>É string<br>";
endif;

echo "<br>";
echo "<br>";
$aux = "Notebook";
$aux1 = "Acer";
echo "$aux<br>";
echo "$aux1<br>";
echo $aux . " " . $aux1;
echo "<br>";

?>