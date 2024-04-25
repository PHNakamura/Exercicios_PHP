<?php 

if(5 == "5")
{
    echo "0) 5 é igual a '5'<br>";
}

//Operador identico a
if(5 === "5")
{
    echo "<br>1) 5 é igual a '5'<br>";
}

//Operador identico a
if(5 === 5)
{
    echo "<br>2) 5 é igual a 5<br>";
}

//Operador identico a
if(5 === "Teste")
{
    echo "<br>3) 5 é igual a 'Teste'<br>";
}

$a = 4;
$b = 4;

if($a === $b):
    echo '<br>4) $a é igual a $b.<br>';
endif;

$c = "4";
if($a === $c):
    echo '<br>5) $a é igual a $b.<br>';
endif;
