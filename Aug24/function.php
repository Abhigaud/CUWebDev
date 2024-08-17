<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
    // scope --- local , Global, Static
    // another is Super Global
    
        global $name;
        $name = "Ram";
        

        function add(){
            // $name = "RamKrishna";
            // echo "This is my Function";
            global $name;
            echo $name;
        }
        add();
        // echo $name;

        function adds(){
            static $count = 1;
            echo $count;
            $count = $count + 1;
        }

        adds();
        adds();
        adds();
        adds();
        adds();

    ?>
</body>
</html>