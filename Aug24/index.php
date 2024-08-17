<html>
<head>
    <title>test page</title>
</head>
<body>
    This is simple HTML output

    <!-- This is HTML Comment -->
    <br>

    <?php
        echo "This is from PHP Code";
        print "This is from print function";
    ?>
    
    <br>
    
    <?php
        echo "This is from second PHP Code";
        echo "<h1>This is from second PHP Code</h1>";
        // Single line comment
        /*
        multi 
        line
        comment  
        */
    ?>

    <?="Hello from Shortcut"?>

    <!-- <p style = "color:#ff0000;"> -->
    <p <?='style = "color:#ff0000;"' ?>>
    This is a Paragraph
    </p>
</body>
</html>