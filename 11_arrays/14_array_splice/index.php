<?php
// resgatar elementos e removendo elementos (de array) - ARRAY_SpLICE

$arr = [1, 2, 3, 4, 5, 6];

echo 'array[arr]: <br>';
print_r($arr);
echo "<br>";

$removido = array_splice($arr, 1, 2);

echo "<br>";
echo 'array[arr] (após instrução array_splice): <br>';
print_r($arr);
echo "<br>";

echo "<br>";
echo 'array[removido] => array_splice($arr, 1, 2); <br>';
print_r($removido);
echo "<br>";

echo '<br>----------------------------------------------------------------------------------------------<br>';

$arr2 = [1, 2, 3, 4, 5, 6];

echo 'array[arr2]: <br>';
print_r($arr2);
echo "<br>";

$removido2 = array_splice($arr2, 3);

echo "<br>";
echo 'array[arr2] (após instrução array_splice): <br>';
print_r($arr2);
echo "<br>";

echo "<br>";
echo 'array[removido2] => array_splice($arr2, 3): <br>';
print_r($removido2);
echo "<br>";

echo '<br>----------------------------------------------------------------------------------------------<br>';

$arr3 = [1, 2, 3, 4, 5, 6];

echo 'array[arr3]: <br>';
print_r($arr3);
echo "<br>";

$removido3 = array_splice($arr3, 1, -1);

echo "<br>";
echo 'array[arr3] (após instrução array_splice): <br>';
print_r($arr3);
echo "<br>";

echo "<br>";
echo 'array[removido3] => array_splice($arr3, 1, -1): <br>';
print_r($removido3);
echo "<br>";

echo '<br>----------------------------------------------------------------------------------------------<br>';