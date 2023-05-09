<?php
include('function/connect_db.php');
$error='';
$login=$_POST['login'];
$password=$_POST['password'];

$count=mysqli_query($connect, "SELECT*FROM `Authenticaition` WHERE `login`='$login' and `password`='$password'");
  if (mysqli_num_rows($count)==0){
      $error='Неверный логин или пароль';
      session_start();
      $_SESSION['error']=$error;
      header("location:auth.php");
  }
else{
  session_start();
  $_SESSION['User']=true; 
  header("location:index.php");
}

