<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif&display=swap" rel="stylesheet">
    <title>Авторизация</title>
</head>
<body>
<?php require "blocks/header.php"?>
<h3><div align="center">Авторизация</div></h3>
<form action="verify.php" method="post" class="forma">
<input type="login" name="login" placeholder="Введите логин" class="pole">
<br>
<input type="password" name="password" placeholder="Введите пароль" class="pole" >
<br>
<button type="submit" name="send" class="btn">Войти</button> 
<br>
</form>
<?php session_start();?>
<?php if (!empty($_SESSION['error'])):?><h3><?php echo $_SESSION['error']; endif?></h3>
    <?php unset($_SESSION['error']);?>
<?php if (isset($_SESSION['reg'])):?>
    <h3><div align="center">Вы зарегистрированы</div></h3>
<? endif ?>
<?php session_unset();?>          
</body>
</html>