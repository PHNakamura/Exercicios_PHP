<?php
// classe DateTime
// método format() => formata a data - SEGUE TODOS OS PADRÕES DO DATE(tabela php.net)
// método modify() => altera a data


// Data atual
$data = new DateTime();

echo 'formato (d/m/y): '.$data->format('d/m/y'). "<br>";
echo "<br>-----------------------------------------------------------<br><br>";

echo 'formato (D/M/Y): '.$data->format('D/M/Y'). "<br>";
echo "<br>-----------------------------------------------------------<br><br>";

echo 'formato ((l), d/F/Y): '.$data->format('(l), d/F/Y'). "<br>";
echo "<br>-----------------------------------------------------------<br><br>";


echo "<br>-----------------------------------------------------------<br>";
echo "-----------------------------------------------------------<br><br><br>";


// Modificando (MODIFY)
// Data + 5 dias

$data->modify('+5 days');

echo 'formato (d/m/y): '.$data->format('d/m/y'). "<br>";
echo "<br>-----------------------------------------------------------<br><br>";

// Data (alterada(+5 dias)) + 2 meses

$data->modify('+2 months');

echo 'formato (d/m/y): '.$data->format('d/m/y'). "<br>";
echo "<br>-----------------------------------------------------------<br><br>";

// Data (alterada((+5 dias) + 2 meses)) - 3 anos

$data->modify('-3 years');

echo 'formato (d/m/y): '.$data->format('d/m/y'). "<br>";
echo "<br>-----------------------------------------------------------<br><br>";