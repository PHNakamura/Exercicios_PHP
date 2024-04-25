<?php

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

//apenas por curiosidade (teste)
$p = "<br>";
echo "Sizeof: ". sizeof($arr);
//echo "<br>";
echo $p;
echo "count: ". count($arr);
echo "<br>";
var_dump($arr);
echo "<br><br>";

$x = 0;
while ($x < count($arr))
{
    $numeroAtual = $arr[$x];

    if($numeroAtual == 30 || $numeroAtual == 40)
    {
        echo "Pulando a execução do loop $x => $numeroAtual.<br>";
        echo "<br>";
        $x++;
        continue;
    }
    echo "Executando o loop $x.<br>";
    echo $numeroAtual."<br>";
    echo "<br>";
    $x++;
}
