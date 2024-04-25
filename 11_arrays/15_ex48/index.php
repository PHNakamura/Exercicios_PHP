<?php

$arr = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];

echo implode(", ", $arr);
echo "<br>";

$remov = array_splice($arr, 2, 2);

echo "<br>";
print_r($arr);
echo "<br>";

echo "<br>";
print_r($remov);
echo "<br>";
echo "<br>";

