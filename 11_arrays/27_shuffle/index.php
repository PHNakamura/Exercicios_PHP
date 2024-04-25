<?php
//ordem aleatória - SHUFFLE
// altera a etrutura original do array

$arr = range(1, 20);

$arrAlt = $arr; // fiz por minha conta - para visualizar as alterações

shuffle($arrAlt);

echo 'array[$arr]: (original) <br>';
print_r($arr);
echo "<br>";
echo "<br>";

echo 'array[$arrAlt]: (alterado) <br>';
print_r($arrAlt);
echo "<br>";
echo "<br>";

shuffle($arrAlt);
echo "A cada execução do SHUFFLE o mesmo array é alterado: <br>";
echo 'array[$arrAlt]: (alterado) <br>';
print_r($arrAlt);
echo "<br>";
echo "<br>";

shuffle($arrAlt);
echo "A cada execução do SHUFFLE o mesmo array é alterado: <br>";
echo 'array[$arrAlt]: (alterado) <br>';
print_r($arrAlt);
echo "<br>";
echo "<br>";

echo "teste do SHUFFLE dentro do loop for <br>";
for($i = 0; $i <= 5; $i++):
    shuffle($arrAlt);
    echo "$i - implode array[\$arrAlt]: ";
    echo implode(", ", $arrAlt) . "<br>";
endfor;
