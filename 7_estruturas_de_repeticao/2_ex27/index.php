<?php

$arr = ["red",1, 2, 3.3, 4.4, true, false, "PHP", "Udemy", "Teste", "Acer"];
echo "<pre>";
echo "array [\$arr]: <br>";
print_r($arr);
echo "</pre>";
echo "<br>";

echo "<br>";
$cont = 0;

echo "São strings do array [\$arr]: <br>";
while ($cont < count($arr))
{
    if(is_string($arr[$cont]))
    {
        echo "$cont"."- ".$arr[$cont]."<br>";
    }
    $cont++;
}

