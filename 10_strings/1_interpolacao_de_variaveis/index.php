<?php

// O ideal é manter apenas uma das sintaxes. Não misturar.

$nome = "Abreu";
$idade = 29;
$profissao = "programador";

echo "Eu sou o $nome, tenho $idade anos e atuo como $profissao. <br>";
echo "<br>";
echo "Eu sou o {$nome}, tenho {$idade} anos e atuo como {$profissao}. <br>";
