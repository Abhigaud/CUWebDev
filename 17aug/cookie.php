<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>

<body>
    $value = $_COOKIE['user'];
    echo $value; 
<?php

?>

<h1>Welcome guest user in Web Development Page</h1>
<?php
    $cookie_name = "user";
    $cookie_value = "PHP Developer";



    setcookie($cookie_name, $cookie_value, time()+30);

?>


</body>
</html>