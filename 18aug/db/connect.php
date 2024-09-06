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
    echo "Connected Succesfuly <br>";

    $sql = "select * from car";
    $result = mysqli_query($conn, $sql);

    echo mysqli_num_rows($result);

    while($row = mysqli_fetch_assoc($result)){
        echo "car id: ".$row['ID']." car name : ".$row['Name']." car color : ".$row['color']."<br>";
    }

    mysqli_close($conn);

    ?>
</body>
</html>