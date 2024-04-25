<?php

function itensCompras(){
    $arr = ['guaraná', 'café', 'suco de uva', 'arroz', 'feijão', 'azeite', 'trigo', 'amido', 'sal', 'açúcar', 'vinagre', 'frutas', 'verduras', 'carnes'];

    $aux = implode(", ", $arr);

    return $aux;
}

echo itensCompras();


echo "<br>-----------------------------------------------------------------<br>";
$lista = ['arroz', 'trigo', 'cerveja', 'sal', 'vinagre'];

function listaParaString($array){
    $str = "Você comprou estes itens: ";
    for($i = 0; $i < count($array); $i++){
        if($i + 1 == count($array)){
            $str .= "$array[$i].";  // (.=) concatenador de atribuição
        } else {
            $str .= "$array[$i], ";
        }
    }
    return $str;
}

echo listaParaString($lista);
echo "<br>";