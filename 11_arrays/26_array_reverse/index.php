<?php
// Invertendo arrays - ARRAY_REVERSE

$arr =[1, 2, 3, 4, 5];

$arrReverse = array_reverse($arr);

echo 'array[$arr]: (original) <br>';
print_r($arr);
echo "<br>";
echo 'implode array[$arr]: '. implode(", ", $arr);
echo "<br>----------------------------------------------------------------------------------------------------<br>";
echo "<br>";

echo 'array[$arrReverse]: (array_reverse) <br>';
print_r($arrReverse);
echo "<br>";
echo 'implode array[$arrReverse]: '. implode(", ", $arrReverse);
echo "<br>----------------------------------------------------------------------------------------------------<br>";
echo "<br>";

$arr2 = ['João', 30, [1, 2, 3], true, null, 'abacaxi'];

$arr2Reverse = array_reverse($arr2);

echo 'array[$arr2]: (original) <br>';
print_r($arr2);
echo "<br>";
echo 'implode array[$arr2]: Deu erro WARNING porque contem um outro array dentro do array';//. implode(", ", $arr2);
echo "<br>----------------------------------------------------------------------------------------------------<br>";
echo "<br>";

echo 'array[$arr2Reverse]: (array_reverse) <br>';
print_r($arr2Reverse);
echo "<br>";
echo 'implode array[$arr2Reverse]: Deu erro WARNING porque contem um outro array dentro do array';//. implode(", ", $arr2Reverse);
echo "<br>----------------------------------------------------------------------------------------------------<br>";
echo "<br>";

