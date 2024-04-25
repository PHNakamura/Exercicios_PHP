<?php
// Verificando se chave existe - ARRAY_KEY_EXISTS ou ISSET

$arr = [
    'nome' => 'Matheus',
    'idade' => 29
];

echo "<br> testando array_key_exists: <br>";

if(array_key_exists('nome', $arr)){
    echo "A chave exite! <br>";
} else{
    echo "A chave NÃO existe! <br>";
}

if(array_key_exists('profissão', $arr)){
    echo "A chave existe <br>";
} else{
    echo "A chave NÃO existe <br>";
}


echo "<br>---------------------------------------------------------------------------------------------------<br>";

echo "<br> testando isset: <br>";

if(isset($arr['nome'])){
    echo "A chave exite! <br>";
} else{
    echo "A chave NÃO existe! <br>";
}

if(isset($arr['teste'])){
    echo "A chave exite! <br>";
} else{
    echo "A chave NÃO existe! <br>";
}

echo "<br>-------------------------------------<br>";

if(isset($x)){
    echo "A variável exite! <br>";
} else{
    echo "A variável NÃO existe! <br>";
}

$y = 5;
if(isset($y)){
    echo "A variável exite! <br>";
} else{
    echo "A variável NÃO existe! <br>";
}

