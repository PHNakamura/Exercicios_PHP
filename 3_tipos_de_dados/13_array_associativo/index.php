<?php 

$arr = ['nome' => 'Shark', 'patas' => 4, 'cor' => 'marrom'];

echo "<br>";
echo '[array $arr]:';
print_r($arr);
echo "<br>";

echo "<br>";
echo $arr['nome']."<br>";
echo $arr['patas']."<br>";
echo $arr['cor']."<br>";

echo "<br>";
echo "Cachorro: $arr[nome], qde de patas $arr[patas] e cor $arr[cor].";
echo "<br>";

$arrAssoc = ['chave' => 'valor', 'bool' => true];

echo "<br>";
print_r($arrAssoc);
echo "<br>";

echo "<pre>";
echo '[$arrAssoc]:'."<br>";
print_r($arrAssoc);
echo "</pre>";
echo "<br>";


?>