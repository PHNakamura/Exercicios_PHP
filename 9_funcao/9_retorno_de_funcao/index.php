<?php

// function soma($n1, $n2)
// {
//     echo $n1 + $n2;
// }
// soma(4, 4);

function soma($n1, $n2)
{
    return $n1 + $n2;
}

echo soma(4, 4) . "<br>";

$x = soma(2, 4);

echo $x . "<br>";

$y = soma ($x, 19);

echo $y . "<br>";

echo "<br>-------------------------------------------------------------<br>";
function testeRetorno()
{
    return "Testando";
}

$z = testeRetorno();
echo $z;