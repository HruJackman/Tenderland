<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif&display=swap" rel="stylesheet">
    <title>Контактная форма</title>
</head>
<body>
<?php require "blocks/header.php"?>
<center><h3>Контактная форма</h3></center>

<form action="check.php" method="post" class="forma">
    <input type="name" name="name" placeholder="Ваше имя" class="pole" >
    <br>
    <input type="subject" name="subject" placeholder="Тема письма" class="pole" >
    <br>
    <input type="email" name="email" placeholder="Введите ваш email" class="pole">
    <br>
    <textarea name="message" placeholder="Введите ваше сообщение"class="pole"></textarea>
    <br>
    <button type="submit" name="send" class="btn">Отправить</button>
    <?php 
session_start();  
    if (!empty($_SESSION['error'])):?><h3><?php echo $_SESSION['error'];?></h3>
    <?php unset($_SESSION['error']);
    elseif (isset ($_SESSION['error'])):?><h3><?php echo 'Сообщение отправлено'?></h3> 
    <?php unset($_SESSION['error']);?>
    <?php endif ?>