<?php
// var_dump($_GET);

// $name = $_GET['userName'];
// $city = $_GET['city'];
$name = $_POST['userName'];
$city = $_POST['city'];

// echo "Hello guest";
echo "Hello $name, welcome from $city";

?>