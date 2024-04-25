<?php

function teste($a = "teste"){
    echo "O valor de \$a é $a. <br>";
}
teste();
teste("asd");

echo "<br>------------------------------------------------------<br>";
function testando($a = "x", $b){
    echo "O valor de \$a é $a e de \$b é $b. <br>";
}
//testando(); // FATAL ERROR. Too few arguments.
//testando(1);// FATAL ERROR. Too few arguments.

echo "<br>------------------------------------------------------<br>";
function testando1($b, $a = "x"){   // melhor sempre colocar os valores DEFAULT À DIREITA, e deixar à esquerda para os obrigatórios e que precisam serem passados.
    echo "O valor de \$a é $a e de \$b é $b. <br>";
}

testando1(5);
testando1(5, 10);