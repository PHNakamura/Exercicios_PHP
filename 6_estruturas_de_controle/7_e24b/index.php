<?php 

$a = 10;
$limite = 80;


if($a > $limite)
{
    echo "O peso ($a kg) ultrapassa o limite de $limite kg. <br>";
}
else
{
    echo "O peso ($a kg) ainda está dentro do limite ($limite kg) estipulado. <br>";
}


echo "<br><br><br>";
$arr = array(100, 20, 50, 80, 85, 10, 99.1, 10.05, 1.53, 200, 235, 1000.5);
$key = array_rand($arr);
echo "key: $key<br>";
$rand = $arr[$key];
echo "random: $rand <br>";

if($rand > $limite)
{
    echo "Peso $rand kg ultrapassa o limite de $limite kg. <br>";
}
else
{
    echo "O peso ($rand kg) ainda está dentro do limite ($limite) kg tolerado. <br>";
}
