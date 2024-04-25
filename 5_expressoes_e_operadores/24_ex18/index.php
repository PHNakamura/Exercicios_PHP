<?php 

if(12 < 5 || "João" === "João")
{
    echo "Condição 1<br>";
    echo "Dentro do if<br>";
    echo '(12 < 5 || "João" === "João")<br>';
    echo '(12 < 5 ) false   OR   ("João" === "João") true';
    echo "Condição1: TRUE";
}

if(1 < 5 || 1)
{
    echo "<br><br>Condição 2<br>";
    echo "Dentro do if<br>";
    echo '(1 < 5 || 1)<br>';
    echo '(1 < 5 ) true   OR   1 true';
    echo "Condição1: TRUE";
}

if(20 === "20" && 51 >= 31)
{
    echo "<br><br>Condição 3<br>";
    echo "Dentro do if<br>";
    echo '(20 === "20" && 51 >= 31)<br>';
    echo '(20 === "20") false   OR   (51 >= 31) true';
    echo "Condição1: FALSE";
}
else
{
    echo "<br><br>Condição 3<br>";
    echo "Dentro do else<br>";
}
