<?php

$str = "O rato roeu a roupa do rei de Roma";

$aux = strlen($str);

$a = 0;
for($i = 0; $i < $aux; $i++){
    if($str[$i]==="a"){
        $a += 1;
    }
}
echo "Na frase: $str. <br>";
echo "A quantidade de letras 'a' da frase é: $a. <br>";

