<?php
include('function/connect_db.php');
$login=$_POST['login'];
$password=$_POST['password'];

$query=mysqli_query($connect,"INSERT INTO `Authenticaition` (Login, Password ) VALUES ('$login', '$password')");
if ($query){
    session_start();
    $_SESSION['reg']=true; 
    header('location:auth.php');
}
else{
    session_start();
    $_SESSION['reg']=false;
    header('location:reg.php');
}