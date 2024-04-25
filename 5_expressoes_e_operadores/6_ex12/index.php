<?php 

$a = 1;
$b = 2;
$c = 3;
$d = 4;
//$x = [$a, $b, $c, $d];
$x = ['$a'=>$a, '$b'=>$b, '$c'=>$c, '$d'=>$d]; 

echo "\$a = $a<br>";
echo "\$b = $b<br>";
echo "\$c = $c<br>";
echo "\$d = $d<br>";
echo "<br>";
echo "<pre>";
echo "[array \$x]:<br>";
print_r($x);
echo "</pre>";
echo "<br>";

$key1 = array_rand($x);
$key2 = array_rand($x);
$key3 = array_rand($x);
$key4 = array_rand($x);

#echo "\$key1 = $key1<br>";
#echo "\$key2 = $key2<br>";
#echo "\$key3 = $key3<br>";
#echo "\$key4 = $key4<br>";

$op = $x[$key1] - ($x[$key2] / $x[$key3]) * $x[$key4];
echo "<br>O resultado da conta $key1 - ($key2 / $key3) * $key4 é:";     
echo "<br>O resultado da conta $x[$key1] - ($x[$key2] / $x[$key3]) * $x[$key4] é:<br>";
echo "x = $op<br>";

?>