<?php
$arr = [1,2,3,4,5,6];
print_r($arr);
echo "<br>";

unset($arr[5]);
print_r($arr);
echo "<br>";

$arr[] = 7;
print_r($arr);
echo "<br>";
$arr[45] = 45;
print_r($arr);
echo "<br>";
$arr[] = 46;
print_r($arr);
echo "<br>";




?>