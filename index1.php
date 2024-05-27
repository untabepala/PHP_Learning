<?php
session_start();
?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    /*<?php
    echo "Hello world";
    echo 150;
    echo 42+6;

    print"From Nayani";
    ?>*/

    <form method="POST">
   
        <input type="hidden" name="name" value="DTK">
        <input type="text" name="userInput">
        <input type="password" name="password">
        <input type="submit" name="submit" value="Click Here">

    </form>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
   <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="SESSION1.php">User</a></li>
   </ul> 



<?php


$_SESSION['username'] = 'dtkholdings';
echo $_SESSION['username']; // Corrected usage of array index

if (!isset($_SESSION['username'])) { // Corrected the isset condition
    echo "You are not logged in...";
} else {
    echo "You are logged in...";
}
?>
</body>
</html>
