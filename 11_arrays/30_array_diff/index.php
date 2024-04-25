<?php
// Diferença ente arrays - ARRAY_DIFF

$arr1 = [1, 2, 3];
$arr2 = [2, 4, 6];
echo "array[arr1]: <br>";
print_r($arr1);
echo "<br>";
echo implode(", ", $arr1);
echo "<br>";
echo "<br>";

echo "array[arr2]: <br>";
print_r($arr2);
echo "<br>";
echo implode(", ", $arr2);
echo "<br>";
echo "<br>";

echo "Diferença do arr1 para o arr2 <br> (retira os elementos comuns e mostra a diferença do arr1) <br>";
$diff = array_diff($arr1, $arr2);
print_r($diff);
echo "<br>";
echo "<br>";


echo "Diferença do arr2 para o arr1 <br> (retira os elementos comuns e mostra a diferença do arr2) <br>";
$diff2 = array_diff($arr2, $arr1);
print_r($diff2);
echo "<br>";
echo "<br>";


$arr3 = [4];
echo "Diferença do arr1 para o arr2 e para o arr3 <br> (retira os elementos comuns e mostra a diferença do arr1) <br>";
$diff3 = array_diff($arr1, $arr2, $arr3);
print_r($diff3);
echo "<br>";
echo "<br>";


echo "Diferença do arr2 para o arr1 e para o arr3 <br> (retira os elementos comuns e mostra a diferença do arr2) <br>";
$diff4 = array_diff($arr2, $arr1, $arr3);
print_r($diff4  );
echo "<br>";
echo "<br>";
