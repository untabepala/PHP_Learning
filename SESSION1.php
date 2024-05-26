<?php
session_start();
?>


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
echo $_SESSION['username'];
?>