<?php

$arr = [];

for($i = 10; $i <= 20; $i++)
{
    array_push($arr, $i);
}

echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";

for($a = 0; $a <= 10; $a++)
{
    echo "$arr[$a]<br>";
}

echo "<br>";
for($b = 0; $b < count($arr); $b++)
{
    if($arr[$b] % 2 != 0)
    {
        echo "O número $arr[$b] é ímpar.<br>";
    }
}
