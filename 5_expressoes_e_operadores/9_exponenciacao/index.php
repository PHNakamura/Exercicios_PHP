<?php 
$a = 5;
$b = 2;
$x = $a ** $b;

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r($arr);
$key1 = array_rand($arr);
$key2 = array_rand($arr);
$op = $arr[$key1]**$arr[$key2];
echo "<br>\$arr[\$key1]: $arr[$key1]<br>";
echo "\$arr[\$key2]: $arr[$key2]<br>";
echo "$arr[$key1]**$arr[$key2]<br>";
echo "Random: $op <br>";

echo "<br>As variáveis $x <br>";

echo "<br>Os número: ". 5 ** 2 ."<br>";

?>