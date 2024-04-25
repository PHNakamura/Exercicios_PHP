<?php 

$a = 15;
$b = 18;
$c = 21;
$maioridade = 18;

$maior = "Ela é MAIOR de idade. <br>";
$menor = "Ela é MENOR de idade. <br>";

echo "A pessoa A tem $a anos. <br>";
if($a >= $maioridade)
{
    echo $maior;
}
else
{
    echo $menor;
}

echo "<br><br>A pessoa B tem $b anos. <br>";
if($b >= $maioridade)
{
    echo $maior;
}
else
{
    echo $menor;
}


echo "<br><br>A pessoa C tem $c anos. <br>";
if($c >= $maioridade)
{
    echo $maior;
}
else
{
    echo $menor;
}