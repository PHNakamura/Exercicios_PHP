<?php
// função DIFF
// diferença entre datas
// instanciar as duas datas

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2001, 10, 15);

echo '$dataA: <br>';
print_r($dataA);
echo "<br>";
echo "<br>";

echo '$dataB: <br>';
print_r($dataB);
echo "<br>";
echo "<br>";


$diferenca = $dataA->diff($dataB);

echo '$diferenca: <br>';
print_r($diferenca);
echo "<br>";
echo "<br>";

echo '$diferenca->format("%a days"): <br>';
echo $diferenca->format("%a days");
echo "<br>";
echo "<br>";
