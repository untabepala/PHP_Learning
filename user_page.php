<?php include_once 'dbc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="userid">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    $data=5;
    //create template
    $sql="SELECT*FROM users WHERE id=?;";
    
    //create prepared statement
    $stmt=mysqli_stmt_init($connect);
    //prepare the prepare statement
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "SQL statement failed!.";
    }else{
        //bind the parameters to the placeholders
        mysqli_stmt_bind_param($stmt,"s",$data);
    }

    //run paraameters inside database
    mysqli_stmt_execute($stmt);

    while($row=mysqli_fetch_assoc($result)){
        echo $row['firstName']."<br>";
    }
    ?>
</body>
</html>