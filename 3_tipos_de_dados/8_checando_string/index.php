<?php

$str = "Acer";
$num = 12;

if (is_string($str))
{
    echo "<br>A variável \$str que contém ($str) é uma string <br>";
}

if(is_string($num))
{
    echo "<br>A variável \$num que contem ($num) é uma string <br>";
}

if(is_string("abacaxi"))
{
    echo "<br>A informação digitada (hard code) é uma string <br>";
}