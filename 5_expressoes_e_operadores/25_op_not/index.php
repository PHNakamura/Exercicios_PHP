<?php 

if(5 > 2) //true
{
    echo "(5 > 2)<br>";
    echo "A operação 1 é verdadeira<br>";
}
else
{
    echo "<br>A operação 1 é falsa<br>";
}

if(!(5 > 2)) //false
{
    echo "<br><br>!(5 > 2)<br>";
    echo "A operação 1a é verdadeira<br>";
}
else
{
    echo "<br>A operação 1a é falsa<br>";
}

if((5 > 20)) //false
{
    echo "<br><br>(5 > 20)<br>";
    echo "A operação 2 é verdadeira<br>";
}
else
{
    echo "<br>A operação 2 é falsa<br>";
}

if(!(5 > 20)) //true
{
    echo "<br><br>!(5 > 20)<br>";
    echo "A operação 2a é verdadeira<br>";
}
else
{
    echo "<br>A operação 2a é falsa<br>";
}

$a = 10;
$b = 20;
echo "<br><br>[\$a]=>$a<br>[\$b]=>$b<br>";
if($a >= $b)
{
    echo "([\$a]=$a >= [\$b]=$b<br>";
    echo "A operação 3 é veradeira<br>";
}
if(!($a >= $b))
{
    echo "(![\$a]=$a >= [\$b]=$b<br>";
    echo "A operação 4 é veradeira<br>";
}
