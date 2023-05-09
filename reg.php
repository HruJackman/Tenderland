<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif&display=swap" rel="stylesheet">
    <title>Регистрация</title>
</head>
<body>
<?php require "blocks/header.php"?>
<h3><div align="center">Регистрация</div></h3>
<form action="new_user.php" method="post" class="forma">
<input type="login" name="login" placeholder="Введите логин" class="pole">
<br>
<input type="password" name="password" placeholder="Введите пароль" class="pole" >
<br>
<button type="submit" name="send" class="btn">Зарегистрироваться</button> 
<br>
</form>
<?php if (isset($_SESSION['reg'])):?>
    <h3><div align="center">Попробуйте еще раз</div></h3>
<?php endif ?>
<?php session_unset();?>      
</body>
</html>