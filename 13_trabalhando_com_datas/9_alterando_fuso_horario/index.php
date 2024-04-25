<?php
// cuidado para projetos internacionais (por promover altereção dos fuso horarios)

$data = new DateTime();

echo '$data = new DateTime(); <br>';
echo '$data: <br>';
print_r($data);
echo "<br>";
echo "<br>";
echo "<br>";

//alterando o fuso horario

date_default_timezone_set('America/Sao_paulo');

$dataA = new DateTime();

echo 'date_default_timezone_set("America/Sao_paulo") <br>';
echo '$dataA = new DateTime() <br>';
echo '$dataA: <br>';
print_r($dataA);
echo "<br>";
echo "<br>";
echo "<br>";
