<?php

$str = "carro - navio - helicóptero - barco - jangada";
$aux = explode(" - ", $str);
print_r($aux);
echo "<br>";

echo "<br>";
echo "<pre>";
print_r($aux);
echo "</pre>";
echo "<br>";

echo "<br>";
foreach($aux as $key => $transporte){
    echo "$key => $transporte <br>";
}
echo "<br>";

echo "<br>";
var_dump($aux);
echo "<br>";
