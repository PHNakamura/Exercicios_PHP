<?php
// função mktime(parâmetros)
// Cria uma data a partir dos parâmetros informados na função
// parâmetros (hora, minuto, segundo, mês, dia e ano)

$dataNascimento = mktime(02, 12, 33, 02, 05, 1991);

echo '$dataNascimento: '. $dataNascimento. "<br>";

$dataNascimentoFormatada = date('(l), d/m/Y', $dataNascimento);

echo '$dataNascimentoFormatada: '. $dataNascimentoFormatada;
echo "<br>";
echo "--------------------------------------------------------------------<br>";
echo "<br>";

$dataEspecifica = mktime(1, 20, 11, 04, 28, 2041);

echo '$dataEspecifica: '. $dataEspecifica. "<br>";

$dataEspecificaFormatada = date('(l) d/F/Y', $dataEspecifica);

echo '$dataEspecificaFormatada: '. $dataEspecificaFormatada;
echo "<br>";
echo "--------------------------------------------------------------------<br>";
echo "<br>";


$dataTesteSemTime = mktime(01, 22, 2024); //passado (mes, dia, ano) hoje(22 de jan de 2024)

echo '$dataTesteSemTime: '. $dataTesteSemTime. "<br>";

$dataTesteSemTimeFormatada = date('(l) d/F/Y', $dataTesteSemTime);

echo '$dataEspecificaFormatada: '. $dataTesteSemTimeFormatada;
// funcionou. Precisa testar mais com datas similares a horas p/ ver se ñ haverá conflito
echo "<br>";
echo "--------------------------------------------------------------------<br>";
echo "<br>";
