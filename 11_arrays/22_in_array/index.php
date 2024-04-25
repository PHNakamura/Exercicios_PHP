<?php
// buscando no array / verificando se o item está dentro do array - IN_ARRAY

$arr =['banana', 'maçã', 'batata', 'pêra', 'mamão'];

if(in_array('batata', $arr)){
    echo "Há o item batata no array <br>";
} else {
    echo "Não há batata no array <br>";
}
echo "<br>";
echo "<br>------------------------------------------------------------------------------<br>";

$x = 'pera';
$y = "pêra";
echo " variável \$x = $x <br>";
echo " variável \$y = $y <br>";
echo "<br>";
if(in_array($x || $y, $arr)){
    echo "Há o item $x no array <br>";
} else {
    echo "Não há $x no array <br>";
}

echo "<br>------------------------------------------------------------------------------<br>";

$z = 'dinossauro';
echo " variável \$z = $z <br>";
if(in_array($z, $arr)){
    echo "Há o item $z no array <br>";
} else {
    echo "Não há $z no array <br>";
}
