<?php 

$x = 10;

$y =& $x;
echo "Atribuições iniciais (sem alterações)<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";


//nova atribuição de valores (y)

$y = 15;
echo "<br>Aribuição após referência \$y";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";


//nova atribuição de valores (x)

$x = 20;
echo "<br>Aribuição após referência \$x";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";


//nova atribuição de valores (x) STRING

$x = "Acer";
echo "<br>Aribuição após referência \$x";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";


//nova atribuição de valores (y) STRING

$y = "Intel Core i5";
echo "<br>Aribuição após referência \$x";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
?>