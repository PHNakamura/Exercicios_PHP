<?php

$x = 0;

echo "<br>1)<br>";
while ($x < 10)
{
    echo "O valor da variável \$x é $x <br>";

    $x++;
}

$y = 0;
echo "<br>2)<br>";
while ($y < 10)
{
    echo "O valor da variável \$y é $y <br>";

    if($y === 5)
    {
        echo "Condição de parada (\$y === 5). <br>";
        echo "Terminando o loop.<br>";
        break;
    }
    $y++;
}
echo "Saiu do loop while. <br>";