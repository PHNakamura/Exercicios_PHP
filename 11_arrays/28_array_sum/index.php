<?php
// Somand arrays - ARRAY_SUM

$arr = [2, 4, 34, 34.1, 324, 12, 1];

$soma = array_sum($arr);

print_r($arr);
echo "<br>";
echo $soma;
echo "<br>--------------------------------------------------------------------------------------------------<br>";

$arr2 = [2, 4, 34, 34.1, 324, 12, 1, 'TESTE'];

$soma2 = array_sum($arr2);

print_r($arr2);
echo "<br>";
echo $soma2;
echo "<br>--------------------------------------------------------------------------------------------------<br>";
