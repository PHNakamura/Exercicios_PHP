<?php

class Pessoa{

    function falar(){
        echo "Olá, eu sou um objeto! <br>";
    }

    function somar($a, $b){
        echo $a + $b . "<br>";
    }
}

$matheus = new Pessoa;

$matheus->falar();
$matheus->falar();

$joao = new Pessoa;

$joao->falar();

$joao->somar(2,2);

$matheus->somar(5,5);

$a=1;
$b=2;
$matheus->somar($a,$b);  