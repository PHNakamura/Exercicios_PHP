<?php
// ATENÇÃO: o período deverá sempre estar em INGLÊS e entre aspas
// função strtotime recebe uma string e transforma em data (str)
// database => unix timestamp
// gera um número(representa um período) que será usado para calcular uma data, um tempo.
// este número gerado a cada atualziação(f5) será atualizado porque o cálculo considera os segundos. Assim o número será sempre diferente.

$cincoDias = strtotime('5 days');

echo "hoje é: " . date('d/M/Y') . "<br>";         // data atual
echo '$cincoDias: ' . $cincoDias;
echo "<br>";
echo date('d (l) /F/Y', $cincoDias) ."<br>";       // data futura
echo "-----------------------------------------------------<br>";

$dezDias = strtotime('10 days');

echo "hoje é: " . date('d/M/Y') . "<br>";       // data atual
echo '$dezDias: ' . $dezDias;
echo "<br>";
echo date('d/F/Y', $dezDias) ."<br>";       // data futura
echo "-----------------------------------------------------<br>";


$umaSemana = strtotime('1 week');

echo "hoje é: " . date('d/M/Y') . "<br>";       // data atual
echo '$umaSemana: ' . $umaSemana;
echo "<br>";
echo date('d/F/Y', $umaSemana) ."<br>";       // data futura
echo "-----------------------------------------------------<br>";


$doisMeses = strtotime('2 months');

echo "hoje é: " . date('d/M/Y') . "<br>";       // data atual
echo '$doisMeses: '. $doisMeses;
echo "<br>";
echo date('d/F/Y', $doisMeses) ."<br>";       // data futura
echo "-----------------------------------------------------<br>";


$doisAnos = strtotime('2 years');

echo "hoje é: " . date('d/M/Y') . "<br>";       // data atual
echo '$doisMeses: '. $doisAnos;
echo "<br>";
echo date('l, d/F/Y', $doisAnos) ."<br>";       // data futura
echo "-----------------------------------------------------<br>";


