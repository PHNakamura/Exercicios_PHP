<?php 

$a = "Acer";
$b = 10;
$c = null;
$d = 
[
    'velocidade' => 100,
    'marca' => 'Ferrari',
    'desc_1' => 'teto solar',
    'desc_2' => 'motor 2.0',
    'desc_3' => 'porta malas grande',
    'desc_4' => 'piloto automático' 
];

echo "<br>";
echo "<br>A variável \$a é: $a.<br>";
echo "<br>A variável \$b é: $b.<br>";
if(is_null($c))
{
    echo "<br>A variável \$c é: NULA (null).<br>";
}

echo "<br>";
echo "<br>";
print_r($d);
echo "<br>";

//echo "<br>";
echo "<pre>";
echo '[array $d]:'."<br>";
print_r($d);
echo "</pre>";
echo "<br>";
?>