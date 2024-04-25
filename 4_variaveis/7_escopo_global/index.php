<?php 

$teste = "asd";

echo "$teste (variável GLOBAL 1). <br>";

if(5>2)
{
    $teste = "qwe";
    echo "<br>$teste (dentro do IF - alterado o valor aqui). <br>";
}
echo "<br>$teste (após o if e fora dele - variável GLOBAL 2). <br>";


function funcao()
{
    echo "$teste (variável LOCAL - funcao()) <br>"; 
}
funcao();


function funcao1()
{
    $teste = "zxc";
    echo "$teste (variável LOCAL - funcao()) <br>"; 
}
echo "<br>";
funcao1();


function testandoGlobal()
{
    global $teste;
    echo "$teste (variável GLOBAL - testandoGlobal()) <br>"; 
}
echo "<br>";
testandoGlobal();


function testandoGlobal1()
{
    global $teste;
    $teste = 2;
    echo "$teste (alterando a variável GLOBAL dentro da função - testandoGlobal()) <br>"; 
}
echo "<br>";
testandoGlobal1();

echo "<br>";
echo "$teste (variável GLOBAL - chamando fora das funções).<br>";
?>