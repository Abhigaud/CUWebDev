<!-- Sorting in Array -->

<?php
// sorting of Indexed Array : Sorting , reverse sorting

// $arr = [5, 2, 7, 4, 9, 3];
$arr = ["Ram", "Krishna", "Shiva"];
print_r ($arr);
echo "<br>";

sort($arr);
print_r ($arr);
echo "<br>";

rsort($arr);
print_r ($arr);
echo "<br>";


// Sorting of Associative Array (Key, Values)

// $arr1 = ["3" => "Ram","4" => "Krishna", "2" => "Shiva", ];
$arr1 = ["3" => "Divya","4" => "fukra", "2" => "Banny", "5" => "Annu" ];

// asort & arsort
echo "=========== asort ===========<br>";
asort($arr1);
print_r($arr1);
echo "<br>";
echo "=========== arsort ===========<br>";
arsort($arr1);
print_r($arr1);
echo "<br>";


// ksory & krsort
echo "=========== ksort ===========<br>";
ksort($arr1);
print_r($arr1);
echo "<br>";
echo "=========== krsort ===========<br>";
krsort($arr1);
print_r($arr1);
echo "<br>";



// Reverse Sorting of Associative Array (Key, Value)


?>