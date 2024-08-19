<!-- Associate Array -->
<?php
// Index => value

// Index array
$arr = ["Mon", "Tues","Wed", "Thur", "Fri"];
var_dump($arr);
echo "<br>";

echo "<br>";
// Associative Array
// $arr1 =   [0=>"Mon", 1=>"Tues", 2=>"Wed"];
$arr1 =   ["First" => "Mon", "Second" => "Tues", "Third" => "Wed"];
var_dump($arr1);
echo "<br>";
echo "<br>";

$userDetails = ["Ram" => "ram@gmail.com", "Hari" => "hari@gmail.com" ];
var_dump($userDetails);
echo "<br>";
echo $userDetails["Ram"];
echo "<br>";

echo "========================". "<br>";
foreach ($userDetails as $key) {
    echo $key . "<br>";
}

echo "========================<br>";
foreach ($userDetails as $key => $myelement) {
    echo $key. " have mail id as ". $myelement ."<br>";
}

echo "========================<br>";
foreach (array_keys($userDetails) as $key ) {
    echo $key ."<br>";
}













?>