<?php 

$a = true;
$b = false;

if(is_bool($a))
{
    echo "<br> 'True' está contida na variável \$a e é considerada booleana. <br>";
}

if(is_bool($b))
{
    echo "<br> 'False' está contida na variável \$b e é considerada booleana. <br>";
}

if(is_bool(0)) // O número 0 não é booleano
{
    echo "<br>É um booleano 1. <br>";
}

if(is_bool(!0)) // O número 'não' 0 é booleano porque nesta situação subentende-se comparação (se ñ for 0 é 1)
{
    echo "<br>É um booleano 1a. <br>";
}

if(is_bool(1)) // o número 1 não é booleano
{
    echo "<br>É um booleano 2. <br>";
}

if(is_bool(!1)) // O número 'não' 1 é booleano porque nesta situação subentende-se comparação (se ñ for 1 é 0)
{
    echo "<br>É um booleano 2a. <br>";
}

if(is_bool(true))
{
    echo "<br>'true' é considerado um booleano 3. <br>";
}

if(is_bool(false))
{
    echo "<br>'false' é considerado um booleano 4. <br>";
}

if(0 == false) //O 0 só é considerado booleano quando comparado com algo 
{
    echo "<br>0 é considerado falso. <br>";
}

if(0.0 == false) //O 0 só é considerado booleano quando comparado com algo 
{
    echo "<br>0.0 é considerado falso. <br>";
}

if(1 == true) //O 1 só é considerado booleano quando comparado com algo 
{
    echo "<br>1 é considerado verdadeiro. <br>";
}
?>