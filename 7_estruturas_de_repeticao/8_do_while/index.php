<?php
$t = "Teste";
$j = 0;
do
{
    echo "Testando o incremento no do while $j<br>";

    if($j == 2)
    {
        //echo "<br>";
        echo $t;
        echo $j;
        echo "<br>";
    }

    $j++;
} while($j < 10);

echo "<br>";
echo "-----------------------------------------------------------";
echo "<br>";
$i = 10;
do
{
    echo "Testando o decremento no do while $i <br>";
    if ($i == 5)
    {
        //echo "<br>";
        echo $t;
        echo $i;
        echo "<br>";
    }
    $i--;
} while($i > 0);
