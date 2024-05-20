<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //while
    $x=0;
    while ($x<=10){
        echo "Hi<br>";
        $x++;
    }

    //Do-while
    $x=0;
    do{
        echo "hi<br>";
        $x++;
    }while($x<=10);

    //For loop
    for($x=0;$x<10;$x++){
        echo "$x<br>";

    }

    //Foreach Loop
    $names=array('TV','Radio','Phone');
    foreach($names as $loopdata){
    echo "Tab ".$loopdata."<br>";
    }
    ?>
</body>
</html>