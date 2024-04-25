<?php 

$a = [1,2,3];
$b = [4, 5, 6];

#echo "<br>";
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<br>";

echo "Array \$a, posição [0]: $a[0]";
echo "<br>";

echo "Array \$a, posição [1]: $a[1]";
echo "<br>";

echo "Array \$a, poisção [2]: $a[2]";
echo "<br>";

echo "<br>";
echo 'Array $b:';
echo "<br>";
print_r($b);
echo "<br>";

echo $b[0];
echo "<br>";

echo $b[1];
echo "<br>";

echo $b[2];
echo "<br>";

echo "<br>";

$arr = ["Notebook", "Acer", "processador Intel Core i5", 'memória ram 4gb DDR3 L'];

print '[array $arr]: ';
echo "<br>";
#echo "<pre>";
var_dump($arr);
#echo "</pre>";
echo "<br>";

echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";

echo $arr[0];
echo "<br>";

echo $arr[1];
echo "<br>";

echo $arr[2];
echo "<br>";

echo $arr[3];
echo "<br>";

echo "Equipamento: ".$arr[0].'('.$arr[1].', '.$arr[2].', '.$arr[3].')';
echo "<br>";

?>