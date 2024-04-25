<?php

class Pessoa{
    public $nome;
    public $idade;

    function msg($nome, $idade){
        echo "<br>O nome da pessoa é $nome tem $idade anos. <br>";
    }

    function andar($x){
        echo "Já andou $x km pela manhã. <br>";
    }
}

$adao = new Pessoa;
$adao->nome = "Adão";
$adao->idade = 22;
echo "<br>";
echo $adao->nome;
echo "<br>";
echo $adao->idade;
echo "<br>";
$adao->msg($adao->nome, $adao->idade);
echo "<br>";
echo $adao->andar(5);
echo "<br>";



$x = new Pessoa;
$x->nome = "Abadia";
$x->idade = 50;
echo "<br>";
echo $x->msg($x->nome, $x->idade);
echo "<br>";
echo $x->andar(20);
echo "<br>";