<?php 

class Pessoa
{
    function falar()
    {
        echo "<br>Olá pessoal! <br>";
    }
}

$matheus = new Pessoa();

$matheus->nome = "MATHEUS";

echo $matheus->nome;

echo "<br>";

$matheus->falar();

?>