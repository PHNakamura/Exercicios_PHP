<?php

echo "------------------------------------------------------------------<br>";
function nomeCompleto()
{
    $nome = "Notebook";
    $sobrenome = "Acer";

    $nomecomp = $nome." ".$sobrenome;

    echo $nomecomp;
    echo "<br>";
}

nomeCompleto();


echo "------------------------------------------------------------------<br>";
function nomeCompleto1($nome, $sobrenome)
{
    $nomecomp = strtoupper($nome)." ".strtoupper($sobrenome);

    echo $nomecomp;
    echo "<br>";
    echo strtolower($nomecomp);
    echo "<br>";
}

nomeCompleto1("notebook", "acero");

