<?php
// Objetos criados com o DateTime podem ser comparados
// operadores de cmparaçãoa >, <, ==
// precisa instanciar as datas antes
// p/ teste data de hoje = 22 de janeiro de 2024
// p/ comparação de iguldade a data e o horario precisam necessariamente serem iguais

$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();

$dataB->setDate(2026, 01, 22);
$dataC->setDate(2026, 01, 22);

$dataB->setTime(01, 01, 22);
$dataC->setTime(01, 01, 22);

if($dataB > $dataA){
    echo "A data B é maior que a data A. <br> ";
}

if($dataA < $dataB){
    echo "A data A é maior que a data B. <br> ";
}

if($dataB == $dataC){
    echo "As datas A e C são iguais. <br> ";
}
