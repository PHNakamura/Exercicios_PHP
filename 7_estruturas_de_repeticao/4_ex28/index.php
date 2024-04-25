<?php

$x = 4;

while ($x <= 30)
{
    echo "$x <br>";
    if ($x === 24)
    {
        echo "Saindo... <br>";
        break;
    }
    $x += 2;
}
echo "<br>Fora do loop while <br>";
