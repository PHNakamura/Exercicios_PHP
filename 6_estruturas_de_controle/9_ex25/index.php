<?php 

$arr = [10, 20, 50, 80, "teste", "Acer", "PHP", 5.8, 99.1, true, false, NULL, 03, "Intel", "Udemy"];

$key = array_rand($arr);

$x = $arr[$key];

echo "dados do array [\$arr]:<br>";
echo "A variável escolhida randomicamente é: $x <br>";
echo "O tipo desta variável é: ".gettype($x)."<br>";
echo "<br><br><br>";

if(is_numeric($x))
{
    $y = $x * 2;
    echo "A variável \$x($x) é um número.<br>";
    if($y > 100)
    {
        echo "O valor resultante da nova variável é $y <br>";
        echo "Este número é maior que 100<br>";
    }
    else
    {
        echo "O número é menor que 100. Portanto não há criação de uma nova variável. <br>";
    }
}
else
{
    echo "A variável informada não é numérica. <br>";
    echo "Ela é do tipo ". gettype($x)."<br>";
}
