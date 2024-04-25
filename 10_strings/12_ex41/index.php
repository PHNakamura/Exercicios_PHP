<?php

$frase = "este ítem está em promoção.";

$aux = explode(" ",$frase);

$word = end($aux);

$key = array_search("promoção.", $aux);
if($key !== false){
    unset($aux[$key]);
}
array_push($aux, strtoupper($word));

echo $frase;
echo "<br>";
echo "<br>";
echo ucfirst(implode(" ",$aux));
echo "<br>";
echo "<br>";

// resolução do curso

$str = "este ítem está em ";
$promo = "promoção.";

echo ucfirst($str).strtoupper($promo)."<br>";