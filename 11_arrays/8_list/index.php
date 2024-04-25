<?php
// Criando várias variáveis - LIST

$pessoa = ['Arno', '29', 'programador', 'verde'];

print_r($pessoa);
echo "<br>";

list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

echo $nome;
echo "<br>";
echo $idade;
echo "<br>";
echo $profissao;
echo "<br>";
echo $corDosOlhos;
echo "<br>";
