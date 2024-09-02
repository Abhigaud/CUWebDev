<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Page</title>
</head>

<body>
    <h2>2</h2>


<?php
    session_start();
    $displayName = $_GET['displayName'];
    $key = "displayName";
    $value = $displayName;

    $_SESSION[$key] = $value;
?>
<h1>Welcome <?=$displayName ?> in Web Development on Second Page</h1>

<form action="third.php" method="get">
    <fieldset>
        <legend>Enquiry Form</legend>
        <p>
            <label for="city"> City: </label>
            <input type="text" id="city" name= "city" placeholder="Enter City name">
        </p>
    </fieldset>

    <p><input type="submit">  <input type="reset"></p>
</form> 
</body>
</html>