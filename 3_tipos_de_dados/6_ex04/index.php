<?php

echo "<br>";
echo 1.1;
echo "<br>";

echo "<br>";
echo 1.2;
echo "<br>";

echo "<br>";
echo 1.3;
echo "<br>";

echo "<br>";
$a = -4.4;
$b = 4;
$c = "XYZ";

if (is_float($a))
{
    echo "<br> A variável \$a que contém o número $a é float <br>";
}
else
{
    echo "<br> A variável \$a que contém o número $a NÃO é Float <br>";
}

if (is_float($b))
{
    echo "<br> A variável \$b que contém o número $b é float <br>";
}
else
{
    echo "<br> A variável \$b que contém o número $b NÃO é Float <br>";
}

if (is_float($c))
{
    echo "<br> A variável \$c que contém o número $c é float <br>";
}
else
{
    echo "<br> A variável \$c que contém o número $c NÃO é Float <br>";
}
