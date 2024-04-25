<?php

function pessoa($n, $ln, $i)
{
    $full = $n." ".$ln;
    echo "<br>";
    echo "Olá eu sou $full e tenho $i anos.";
    echo "<br>";
}

$name = 
[
    "Baleia",
    "Caio",
    "Maria",
    "Juca",
    "Glenda"
];

$n1 = $name[array_rand($name)];
$n2 = $name[array_rand($name)];
$n3 = $name[array_rand($name)];
$n4 = $name[array_rand($name)];
$n5 = $name[array_rand($name)];

echo "$n1 <br>";
echo "$n2 <br>";
echo "$n3 <br>";
echo "$n4 <br>";
echo "$n5 <br>";

echo "<br><br><br>";

$sobreNome =
[
    "Chaves",
    "Duarte",
    "Pereira",
    "Couto",
];

$s1 = $sobreNome[array_rand($sobreNome)];
$s2 = $sobreNome[array_rand($sobreNome)];
$s3 = $sobreNome[array_rand($sobreNome)];
$s4 = $sobreNome[array_rand($sobreNome)];
$s5 = $sobreNome[array_rand($sobreNome)];

echo "$s1 <br>";
echo "$s2 <br>";
echo "$s3 <br>";
echo "$s4 <br>";
echo "$s5 <br>";

echo "<br><br><br>";

$idade = [20, 30, 25, 10, 90];

$i1 = $idade[array_rand($idade)];
$i2 = $idade[array_rand($idade)];
$i3 = $idade[array_rand($idade)];
$i4 = $idade[array_rand($idade)];
$i5 = $idade[array_rand($idade)];

echo "$i1 <br>";
echo "$i2 <br>";
echo "$i3 <br>";
echo "$i4 <br>";
echo "$i5 <br>";


echo "<br><br><br>";
echo "--------------------------------------------------------<br>";
pessoa($n1, $s1, $i1);
pessoa($n2, $s2, $i2);
pessoa($n3, $s3, $i3);
pessoa($n4, $s4, $i4);
pessoa($n5, $s5, $i5);