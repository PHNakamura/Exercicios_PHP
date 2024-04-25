<?php

$arr = [];
for($a = -10; $a <= 20; $a++)
{
    array_push($arr, $a);
}

var_dump($arr);

$maiorQueSete = [];
foreach($arr as $maior)
{
    if($maior > 7)
    {
        array_push($maiorQueSete, $maior);
    }
}

echo "<br>----------------------------------------------------------------<br>";
echo implode(",", $maiorQueSete);

echo "<br>----------------------------------------------------------------<br>";
echo "<pre>";
print_r($maiorQueSete);
echo "</pre>";
echo "<br>";


echo "<br>----------------------------------------------------------------<br>";
echo "<pre>";

function arrayMaiorQueSete($array)
{
    $vetor = [];
    
    for($i = 0; $i < count($array); $i++)
    {
        if($array[$i] > 7)
        {
            array_push($vetor, $array[$i]);
        }

    }
    echo implode(", ",$vetor);
}

arrayMaiorQueSete($arr);
echo "<br>";