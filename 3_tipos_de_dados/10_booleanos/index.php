<?php 
echo true; // imprime 1 na tela
echo "<br>";
echo false; // não imprimi nada

if(true)
{
    echo "<br>(Condição: se verdadeiro)<br>";
    echo "É verdadeiro! <br>";
}

if(!5 < 2)
{
    echo "<br>(Condição: 5 não é menor que 2)<br>";
    echo "Também é verdadeiro <br>";
}

$podeEntrar = true;
if($podeEntrar)
{
    echo "<br>(Condição: Se variável \$podeEntrar for verdadeira)<br>";
    echo "O usuário pode entrar.<br>";
}
