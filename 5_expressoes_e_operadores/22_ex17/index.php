<?php 

//Comparação 1
echo "-- Comparação 1 --<br>";
if(15 > 5 && 'João' === 'João')
{
    echo "Entrou no if 1<br>";
    echo 'Comparando: (15 > 5 && "João" === "João")<br>';
    echo "A comparação 1 é verdadeira<br>";
}
else
{
    echo "Entrou no else 1<br>";
    echo 'Comparando: (15 > 5 && "João" === "João")<br>';
    echo "A comparação é falsa<br>";
}


//Comparação 2
$t = "teste";
$a = 5;
$b = 1;

echo "<br><br>-- Comparação 2 --";
echo "<br>\$t($t) <br>\$a($a) <br>\$b($b)<br>";

if($a > $t && $b)
{
    echo "Entrou no if 2<br>";
    echo 'Comparando : ($t > $a && $b)<br>';
    echo "A comparação 2 é verdadeira<br>";
}
else
{
    echo "entrou no else 2<br>";
    echo 'Comparando : ($t > $a && $b)<br>';
    echo "A comparação 2 é falsa<br>";
}

//Comparação 3
echo "<br><br>-- Comparação 3 --";
$c = 2;
$d = 3;
$e = 5;
echo "<br>\$c($c) <br>\$d($d) <br>\$e($e) <br>";
if($c == $d && $e >= $d)
{
    echo "Entrou no if 3<br>";
    echo 'Comparando: ($c == $d && $e >= $d)<br>';
    echo "A comparação é verdadeira<br>";
}
else
{
    echo "Entrou no else 3<br>";
    echo 'Comparando: ($c == $d && $e >= $d)<br>';
    echo "A comparação é falsa <br>";
}


//teste
echo "<br><br> -- Comparação TESTE --<br>";
if (10 > 5 && 1)
{
    echo "A comparação TESTE é verdadeira<br>";
}

echo "<br><br> -- Comparação TESTE --<br>";
if (10 > 5 && 0)
{
    echo "A comparação TESTE é verdadeira<br>";
}
