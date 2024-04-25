<?php

$i = 1;
while($i <= 10)
{
    echo "LOOP EXTERNO $i <br>";
    
    //SEGUNDO CONTADOR
    $j = 1;
    while($j <= 5)
    {
        echo "- loop interno $j.<br>";
        $j++;
    }

    $i++;
}

