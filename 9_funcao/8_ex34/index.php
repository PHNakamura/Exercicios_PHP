<?php

function parImpar($x)
{
$msg = "O número digitado $x é: ";

    if($x % 2 == 0)
    {
        echo $msg ."par. <br>";
    }
    else
    {
        echo $msg ."ímpar. <br>";
    }
}

$arr = [1, 3, 4, 10, 12, 15, 20, 22, 16, 8, 33, 34, 40, 46, 51, 53, 58, 63, 66, 67, 70, 77];
parImpar($arr[array_rand($arr)]);
echo "<br>";
parImpar($arr[array_rand($arr)]);
echo "<br>";
parImpar($arr[array_rand($arr)]);
echo "<br>";
parImpar($arr[array_rand($arr)]);
echo "<br>";
parImpar($arr[array_rand($arr)]);
echo "<br>";

