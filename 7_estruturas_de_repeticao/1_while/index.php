<?php

// definição do contador
$x = 0;

// inicio ou definição da estrutura
while ($x < 10)
{
    // instrução (corpo do loop)
    echo $x . "<br>";

    // incremento o contador
    $x ++; //$x += 1;
}
echo "Continuando o código (após a execução da instrução While). <br>";

echo "<br><br><br>";
// definição do contador
$y = 0;

// inicio ou definição da estrutura
while ($y <= 10)
{
    // instrução (corpo do loop)
    echo $y . "<br>";

    // incremento o contador
    $y += 2;
}
echo "Continuando o código (após a execução da instrução While). <br>";

echo "<br><br><br>";
// definição do contador
$z = 10;

// inicio ou definição da estrutura
while ($z > 0)
{
    // instrução (corpo do loop)
    echo $z . "<br>";

    // incremento o contador
    $z--;
}
echo "Continuando o código (após a execução da instrução While). <br>";


echo "<br><br><br>";
// definição do contador
$a = 10;

// inicio ou definição da estrutura
while ($a > 0)
{
    // instrução (corpo do loop)
    if($a % 2 != 0)
    {
        echo $a . "<br>";
    }

    // incremento o contador
    $a--;
}
echo "Continuando o código (após a execução da instrução While). <br>";
