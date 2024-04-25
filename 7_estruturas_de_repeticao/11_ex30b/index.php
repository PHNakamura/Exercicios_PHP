<?php

$arr = [];
for($i = 1; $i <= 10; $i++)
{
    array_push($arr, $i);
    echo $i." - ";
    print_r($arr);
    echo "<br>";  
}

echo "<br>";
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";
