<?php
// Unindo arrays - ARRAY_MERGE

$a = [1, 2, 3];
$b = [10, 40, 90];
$c = [2.1, 2.2, 3.5];
$d = ['aasd', 'erwerw', 'iiuiuyiy', '', 'xyz', 0,"0"];
$e = [true, null, false,['tryrtg', 987, 'asd321']];

$arrMerge = array_merge($a, $b, $c, $d, $e, ['asdrewrrew', 1235, false, 12.522]);

echo "<br>";
print_r($arrMerge);
echo "<br>";

echo "<br>";
echo "<pre>";
print_r($arrMerge);
echo "</pre>";
echo "<br>";