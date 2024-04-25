<?php

function soma($a, $b, $c){
    print_r(func_get_args());

    echo "<br>------------------------------------------------<br>";
    echo implode(", ", (func_get_args()));

    echo "<br>------------------------------------------------<br>";

    echo func_num_args() . "<br>";

    return $a + $b + $c;
}

soma(2,4,6);