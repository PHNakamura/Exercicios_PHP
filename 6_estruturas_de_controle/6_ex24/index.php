<?php 

$a = 1;
$b = 2.2;
$c = "Texto";
$d = true;
$e = [];

if(is_int($a))
{
    echo "Sim a variável \$a($a) é do tipo inteiro<br>";
}
elseif(is_float($a))
{
    echo "Sim a variável \$a($a) é do tipo float / double<br>";
}
elseif(is_string($a))
{
    echo "Sim a variável \$a($a) é do tipo string<br>";
}
elseif(is_bool($a))
{
    echo "Sim a variável \$a($a) é do tipo booleana<br>";
}
else
{
    echo "Gettype: ".gettype($a)."<br>";
}


if(is_int($b))
{
    echo "Sim a variável \$b($b) é do tipo inteiro<br>";
}
elseif(is_float($b))
{
    echo "Sim a variável \$b($b) é do tipo float / double<br>";
}
elseif(is_string($b))
{
    echo "Sim a variável \$b($b) é do tipo string<br>";
}
elseif(is_bool($b))
{
    echo "Sim a variável \$b($b) é do tipo booleana<br>";
}
else
{
    echo "Gettype: ".gettype($b)."<br>";
}


if(is_int($c))
{
    echo "Sim a variável \$c($c) é do tipo inteiro<br>";
}
elseif(is_float($c))
{
    echo "Sim a variável \$c($c) é do tipo float / double<br>";
}
elseif(is_string($c))
{
    echo "Sim a variável \$c($c) é do tipo string<br>";
}
elseif(is_bool($c))
{
    echo "Sim a variável \$c($c) é do tipo booleana<br>";
}
else
{
    echo "Gettype: ".gettype($c)."<br>";
}


if(is_int($d))
{
    echo "Sim a variável \$d($d) é do tipo inteiro<br>";
}
elseif(is_float($d))
{
    echo "Sim a variável \$d($d) é do tipo float / double<br>";
}
elseif(is_string($d))
{
    echo "Sim a variável \$d($d) é do tipo string<br>";
}
elseif(is_bool($d))
{
    echo "Sim a variável \$d($d) é do tipo booleana<br>";
}
else
{
    echo "Gettype: ".gettype($d)."<br>";
}


if(is_int($e))
{
    echo "Sim a variável \$e($e) é do tipo inteiro<br>";
}
elseif(is_float($e))
{
    echo "Sim a variável \$e($e) é do tipo float / double<br>";
}
elseif(is_string($e))
{
    echo "Sim a variável \$e($e) é do tipo string<br>";
}
elseif(is_bool($e))
{
    echo "Sim a variável \$e($e) é do tipo booleana<br>";
}
else
{
    echo "Gettype: ".gettype($e)."<br>";
}