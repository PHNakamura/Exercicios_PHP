<?php 

$a = "Teste";
$b = 12.8;
$c = 10;

if (is_float($a))
{
    echo "O número $a é float (if 1) <br>";
}

if (is_float($b))
{
    echo "O número $b é float (if 2) <br>";
}

if (is_float($c))
{
    echo "O número $c é float (if 3) <br>";
}

if (is_float(10.10))
{
    echo "O número digitado é float (if 4) <br>";
}

if (!is_float("Acer"))
{
    echo "O número digitado NÃO é float (if 5) <br>";
}

if (is_float("12.34"))
{
    echo "O número digitado é float (if 6) <br>";
}
