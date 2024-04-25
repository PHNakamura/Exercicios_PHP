<?php 

if (is_int(5))  //True
{
    echo "O número é inteiro <br>";
}

echo "<br>";
if (is_int("Não é inteiro"))  //False
{
    echo "O número NÃO é inteiro <br>";
}

echo "<br>";
if (!is_int("Não é inteiro"))  //True
{
    echo "O número NÃO é inteiro <br>";
}

echo "<br>";
$a = 10;
if (is_int($a))  //True
{
    echo "O número $a é inteiro <br>";
}
?>