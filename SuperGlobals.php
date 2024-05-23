<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=10;
    function FuncName(){
        
        echo $GLOBALS['x'];
    }
    FuncName();

    /*$GLOBALS
    $_POST
    $_GET
    $_COOKIE
    $_SESSION*/
    
    ?>
</body>
</html>