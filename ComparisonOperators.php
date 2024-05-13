<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $myvar1=5;
    $myvar2=10;
    if($myvar1==$myvar2){
        echo"correct<br>";
    }else{
        echo"wrong<br>";
    }

    $myvar3=10;
    $myvar4="10";
    if($myvar3==$myvar4){
        echo"correct==<br>";
    }else{
        echo"wrong==<br>";
    }

    $myvar3=10;
    $myvar4="10";
    if($myvar3===$myvar4){
        echo"correct===<br>";
    }else{
        echo"wrong===<br>";
    }


    $myvar3=5;
    $myvar4=10;
    echo($myvar3<=>$myvar4);
    echo"<br>";
    
    $myvar3=10;
    $myvar4=10;
    echo($myvar3<=>$myvar4);
    echo"<br>";

    $myvar3=50;
    $myvar4=10;
    echo($myvar3<=>$myvar4);
    echo"<br>";


    




    ?>
</body>
</html>