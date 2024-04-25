<?php

$arr = [
    'porta'=>350, 
    'cabide'=>11,
    'cafeteira'=>200,
    'copo'=>9,
    'toalha'=>10,
    'lâmpada'=>10,
    'coxinha'=>5
];

$resp = [];
foreach($arr as $item => $valor){
    if($valor > 10){
        array_push($resp, $item);
    }
}
echo implode(", ", $resp);

