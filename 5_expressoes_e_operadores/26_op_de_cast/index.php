<?php 

$a = (int) "12";

echo "\$a = $a<br>";
echo "<br>(\$a + 10)"." => ".$a + 10 ."<br>";


if($a === 12)
{
    echo "<br><br>\$a($a)<br>";
    echo 'Na comparação: ($a === 12)<br>';
    echo "A é identico a 12<br>";
    echo "gettype \$a: ".gettype($a)."<br>";
}


$b = (float) "3.14843824";
if($b === 3.14843824)
{
    echo "<br><br>\$b($b)<br>";
    echo 'Na comparação: ($b === 3.14843824)<br>';
    echo "B é identico a 3.14<br>";
    echo "gettype \$b: ".gettype($b)."<br>";
}


$c = (string) 34;
if($c === "34")
{
    echo "<br><br>\$c($c)<br>";
    echo 'Na comparação: ($c === "34")<br>';
    echo "B é identico a '34'<br>";
    echo "gettype \$c: ".gettype($c)."<br>";
}