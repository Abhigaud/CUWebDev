<?php

$arr = [1,2,3,4,5,6];
print_r($arr);
echo "<br>";

$arr[] = 7;
// print_r($arr);
// echo "<br>";

$arr[10] = 8;
print_r($arr);
echo "<br>";

// $arr[] = 9;
$arr[] = "This is my String";
$arr[] = "This is my New String";
print_r($arr);
echo "<br>";

echo count($arr).PHP_EOL;
echo "<br>";

foreach ($arr as $myelement ) {
    echo $myelement.PHP_EOL;
    echo "<br>";
}
echo "<br>";













?>