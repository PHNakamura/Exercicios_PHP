<?php 

if(3 == 3)
{
    echo "Comparação verdadeira 1.<br>";
}

if(5 == 3)
{
    echo "Comparação verdadeira 2.<br>";
}

$a = 12;
$b = 12;
$c = 100;

if($a == $b)
{
    echo "Comparação Verdadeira 3.<br>";
}

if($a == $c)
{
    echo "Comparação verdadeira 4.<br>";
}

$nome = "Acer";
//$nomeDoSistema = "Acer";
$nomeDoSistema = "Ayer";

if($nome == $nomeDoSistema)
{
    echo "O nome coincide 1.<br>";
}
else
{
    echo "O nome NÃO coincide.<br>";
}

// Aqui ele atribui um valor a outro e isso é tomado como true
// Porém é errado. É um erro no código e isso pde gerar erro no sistema
if($nome = $nomeDoSistema)  
{
    echo "O nome coincide 2.<br>";
}
