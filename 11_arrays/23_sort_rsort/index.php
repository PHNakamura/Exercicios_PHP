<?php
// Ordenação crescente do array - SORT
// Ordenação reversa (decrescente) do array - RSORT
// observações minhas:
// Não dá para se utilizar o mesmo array. Precisa troar o nome do array e se for o caso usar os mesmos elementos
// Como essa função altera a estrurura do array original não é possível guardar numa nova variável.

echo "-------------------------------------------------------------------------------------------------<br>";
echo "--------------------------------- Usando INTEGER -----------------------------------------<br>";
echo "-------------------------------------------------------------------------------------------------<br>";

$arr = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

echo "<br>";
echo 'array[$arr]: (original)<br>';
print_r($arr);
echo "<br>";
echo "-------------------------------------------------------------------------------------------------<br>";
echo "<br>";

$arr2 = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4]; // precisa trocar o nome do array (mesmo q valores iguais).

//$arrSort = sort($arr2); // Assim não funciona
sort($arr2); // esta função altera a estrtura do array original
echo "<br>";
echo 'array[$arr2]: <br>';
print_r($arr2);
echo "<br>";
echo "-------------------------------------------------------------------------------------------------<br>";
echo "<br>";

$arr3 = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

rsort($arr3);
echo "<br>";
echo 'array[$arr3]: <br>';
print_r($arr3);
echo "<br>";
echo "-------------------------------------------------------------------------------------------------<br>";
echo "<br>";

echo "-------------------------------------------------------------------------------------------------<br>";
echo "--------------------------------- Usando STRING -----------------------------------------<br>";
echo "-------------------------------------------------------------------------------------------------<br>";

$arrStr = ['Maria', 'José', 'Abgail', 'João', 'Abadia', 'Zacarias', 'Bernadete', 'Chico'];

echo "<br>";
echo 'array[$arrStr]: (original)<br>';
print_r($arrStr);
echo "<br>";
echo "-------------------------------------------------------------------------------------------------<br>";
echo "<br>";


$arrStr2 = ['Maria', 'José', 'Abgail', 'João', 'Abadia', 'Zacarias', 'Bernadete', 'Chico'];

sort($arrStr2);
echo "<br>";
echo 'array[$arrStr2]: <br>';
print_r($arrStr2);
echo "<br>";
echo "-------------------------------------------------------------------------------------------------<br>";
echo "<br>";

$arrStr3 = ['Maria', 'José', 'Abgail', 'João', 'Abadia', 'Zacarias', 'Bernadete', 'Chico'];
rsort($arrStr3);
echo "<br>";
echo 'array[$arrStr3]: <br>';
print_r($arrStr3);
echo "<br>";
echo "-------------------------------------------------------------------------------------------------<br>";
echo "<br>";
