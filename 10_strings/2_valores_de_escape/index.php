<?php
// Valores de escape
// Aspas duplas;
// \n = nova linha;
// \t = tab;
// \\ = barra invertida;
// \$ = sinal de dólar;

header("Content-type: text/plain");
// pular linha
echo "isso aqui vai ficar na primeira linha \n E isso na segunda linha.\n";

echo "\n";
echo "\n--------------------------------------------------------------------------\n";
//tab
echo "Testando o tab \t aqui.\n";

echo "\n";
echo "\n--------------------------------------------------------------------------\n";
// Barra invertida
echo "Barra invertida \\ . \n";

echo "\n";
echo "\n--------------------------------------------------------------------------\n";
// Dólar
echo "Imprimindo o Dólar \$ . \n";
echo "Imprimindo uma variável \$variável. \n";
