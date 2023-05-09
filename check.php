<?php
print_r($_POST);
$error='';
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$subject=$_POST['subject'];


if (empty(trim($name))){
    $error='Введите имя';
}
if (empty(trim($subject))){
    $error='Введите тему';
}
if (empty(trim($email))){
    $error='Введите email';
}
if (empty(trim($message))){
    $error='Введите сообщение';
}

session_start();
$_SESSION['error']=$error;
header('location:about.php');
if (empty($_SESSION['error'])){

}