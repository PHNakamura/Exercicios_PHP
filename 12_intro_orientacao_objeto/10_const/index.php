<?php
// constante - CONST
// geralmente são escritas tudo em letras maiusculas
// seu valor não pode ser alterado
// Não se usa o cifrão $
// para acessar se usa  ::  (sempre colado as palavras - se separar da erro)
// somente para variáveis que se usa o sinal de seta ->
// caso precise referenciar ao próprio objeto, dentro de um metodo se utiliza da palavra reservada self:: 


use PSpell\Config;

class Humano {
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostrarCosntante(){
        echo self::BRACOS ."<br>";
    }
}

$Matheus = new Humano;

echo $Matheus::OLHOS . "<br>";
echo $Matheus::BRACOS . "<br>";
echo $Matheus::PERNAS . "<br>";
echo "<br>";

echo "<br>";
$Matheus->mostrarCosntante();

