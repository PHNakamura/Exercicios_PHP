<?php

$str = "Testando o resto da string, para ver se dá certo";

$resto = strstr($str, "resto");

echo "$resto.<br>";

$s = "string";

$resto2 = strstr($str, $s);

echo "$resto2 <br>";

if(strstr($str, ".NET")){
    echo "Não encontramos a string! <br>";
}

$resto3 = strstr($str, ",");

echo "$resto3.<br>";