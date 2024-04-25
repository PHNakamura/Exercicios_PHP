<?php

//parse_url

$url = "https://www.google.com";
$arrayurl = parse_url($url);

print_r($arrayurl);
echo "<br>";

echo $arrayurl["host"];
echo "<br>";

echo "<br>-------------------------------------------------------------------------<br>";
$url2 = "http://www.horadecodar.com.br/?busca=php";
$arrayurl2 = parse_url($url2);

print_r($arrayurl2);
echo "<br>";

echo "<br>-------------------------------------------------------------------------<br>";
$url3 = "http://www.horadecodar.com.br/usuario/matheusbattisti?id=12&nome=Matheus";
$arrayurl3 = parse_url($url3);

print_r($arrayurl3);
echo "<br>";
