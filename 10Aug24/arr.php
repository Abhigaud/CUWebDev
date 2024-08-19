<?php
// $arr = [1,2,3,4];
$arr = ["A", "B", "C", "D"];

var_dump($arr);
echo "<br>";
print_r($arr);
echo "<br>"; 
echo $arr[0].PHP_EOL;
echo $arr[1].PHP_EOL;
echo $arr[2].PHP_EOL;
echo $arr[3]. "<br>";

echo count($arr)."<br>";
echo "<===========Using For Loop===========>" ."<br>";

for ($count=0; $count < count($arr) ; $count++) { 
    echo $arr[$count]. "<br>";
}

$arr1 = [1, "my String", false, 2.2];
var_dump($arr1);
echo "<br>";

echo "<===========Using For each Loop===========>" ."<br>";
// For each Loop
foreach ($arr1 as $value ) {
    echo $value."<br>";
}

// Empty Array
$arr = [];
var_dump($arr);

if (empty($arr)) {
    echo "Array is Empty" . "<br>";
}else {
    echo "Array is NOT Empty" . "<br>" ;
}

// $myVar = 10;
// print_r($myVar);
// $myVar = [10];
// print_r($myVar);

$myVar1 = 10;
print_r($myVar1);
echo "<br>";
$myVar2 = [10];
print_r($myVar2);
echo "<br>";

$myVar3 = [1, 2, 3];
print_r($myVar3);
echo "<br>";
$myVar3[0] = [10];
print_r($myVar3);
echo "<br>";







?>