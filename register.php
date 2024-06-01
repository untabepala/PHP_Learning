<?php
include_once'dbc.php';
$fname=$_POST['firstName'];
$lname=$_POST['lastName'];
$email=$_POST['email'];
$pass=$_POST['password'];

$sql="INSERT INTO users (firstName,lastName,email,password) VALUES ('$fname','$lname','$email','$pass');";
$result=mysqli_query($connect,$sql);
header("Location:index.php?signup=success");
?>