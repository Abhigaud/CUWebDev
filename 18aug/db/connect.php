<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connect</title>
</head>

<body>
    <?php
    $hostname = 'localhost';
    $db_name = "cu_db";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($hostname, $username, $password, $db_name );

    // Check connection
    if(!$conn){

    }
    echo "Connected Succesfuly";

    

    mysqli_close($conn);

    ?>
</body>
</html>