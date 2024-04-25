<?php 
$n = 1;

if(5 > 2)
{
    echo "Entrou no  if $n<br>";
}
else
{
    echo "Entrou no else $n<br>";
}


if("teste" === 5)
{
    $n += 1;
    echo "Entrou no  if $n<br>";
}
else
{
    $n += 1;
    echo "Entrou no else $n<br>";
}


//Variáveis
$a = 10;
$b = 20;

if($a > $b)
{
}
else
{
    $n += 1;
    echo "Entrou no else $n<br>";
}


$msg = "Entrou no else";

if($a > $b)
{
}
else
{
    $n += 1;
    echo $msg." ".$n."<br>";
}