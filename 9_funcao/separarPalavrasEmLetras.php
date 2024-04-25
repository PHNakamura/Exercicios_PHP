<?php 

$x = "teste";

$y = strlen($x); // conta caracteres

echo $y;

// echo "<br>--------------------------------------------------------<br>";
// $a = "Acer";
// $b = count_chars($a,0);
// echo $b;


echo "<br>--------------------------------------------------------<br>";
$c = "Notebook Acer";
$d = explode(" ", $c);
print_r($d);

echo "<br>--------------------------------------------------------<br>";
$e = "Samsung";
$f = str_split($e);
print_r($f);
// ESTE FUNFOU!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

echo "<br>--------------------------------------------------------<br>";
function palavrasEmLetra($p){
    $arr = [];
    for($a = 0; $a <= strlen($p); $a++){
        array_push($arr, $p);
    }
    return $arr;
}
print_r(palavrasEmLetra("Teste"));
//Não funciona...

echo "<br>--------------------------------------------------------<br>";

?>