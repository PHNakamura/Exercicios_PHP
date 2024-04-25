<?php
// classe DateTime
// Métodos:
// setDate => recebe ano, mês e dia e altera a data
// setTime => recbe hora, minuto e segundo e altera o tempo

$data = new DateTime();

echo '$data = new DateTime: <br>';
print_r($data);
echo "<br>";
echo "----------------------------------------------------------------------<br><br><br>";

$data->setDate(1990, 12, 01);

echo '$data->setDate(1990, 12, 01): <br>';
print_r($data);
echo "<br>";
echo "----------------------------------------------------------------------<br><br><br>";


$data->setTime(05, 12, 10);

echo '$data->setDate(1990, 12, 01): <br>';
print_r($data);
echo "<br>";
echo "----------------------------------------------------------------------<br><br><br>";

echo '$data->format("(l), d/F/Y "): '. "<br>";
echo $data->format('(l), d/F/Y ') . "<br>";
