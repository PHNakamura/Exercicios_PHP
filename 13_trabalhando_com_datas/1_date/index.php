<?php
// Parâmetros da função date é sempre em ingles (d=>day; m=>month; y=>year)
// https://www.php.net/manual/pt_BR/datetime.format.php (tabela de formatação das datas)


    $d = date('d/m/y');
    echo $d;
    echo "<br>";
    echo "------------------------------------------------------------<br>";

    $d1 = date('D/M/Y');
    echo $d1;
    echo "<br>";
    echo "------------------------------------------------------------<br>";

    $d2 = date('D, M - Y');
    echo $d2;
    echo "<br>";
    echo "------------------------------------------------------------<br>";

    $d3 = date('d/m/Y');
    echo $d3;
    echo "<br>";
    echo "------------------------------------------------------------<br>";

    $d4 = date('l, M - Y');
    echo $d4;
    echo "<br>";
    echo "------------------------------------------------------------<br>";

    $d5 = date('l, d, F - Y');
    echo $d5;
    echo "<br>";
    echo "------------------------------------------------------------<br>";


