<?php

$conn=mysqli_connect("localhost","root");

if($conn){
    echo"connection successful";
}
else{
    echo"connection not successful";
}
mysqli_select_db($conn,'learnweb');

$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];

$query="INSERT INTO web (username, email, mobile, message) VALUES ('$username','$email','$mobile','$message')";

mysqli_query($conn,$query);

header('location:index.php');
?>