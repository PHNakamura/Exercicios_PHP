<?php

echo "-----------------------------------------------------------<br>";
function multiplicacao()
{
    $a = 2;
    $b = 3;
    $c = 4;

    $op = $a * $b * $c;

    echo $op."<br>";
}
multiplicacao();


echo "-----------------------------------------------------------<br>";
function multiplic($a, $b, $c)
{
    $op = $a * $b * $c;

    echo $op."<br>";
}
multiplic(1, 2, 3);


echo "-----------------------------------------------------------<br>";
$arr = [];

for($i = 10; $i <= 20; $i++)
{
    array_push($arr, $i);
}

print_r($arr);

echo "<br><br>";

$key1 = array_rand($arr);
$key2 = array_rand($arr);
$key3 = array_rand($arr);

echo "Key1 = $key1 <br>";
echo "Key2 = $key2 <br>";
echo "Key3 = $key3 <br>";

echo "<br><br>";

$a = $arr[$key1];
$b = $arr[$key2];
$c = $arr[$key3];
echo "\$a = $a <br>";
echo "\$b = $b <br>";
echo "\$c = $c <br>";

echo "<br><br>";

function mult($a, $b, $c)
{
    $op = $a * $b * $c;

    echo $op."<br>";
}
mult($a, $b, $c);