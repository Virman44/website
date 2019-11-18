<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Авторизация</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Неверное имя пользователя или пароль. Пожалуйста, проверьте их и повторите попытку.</h3>
<br/>Нажмите, чтобы <a href='login.php'>авторизоваться</a></div>";
 }
    }else{
?>
<div class="form">
<h1>Вход на сайт</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Имя пользователя" required />
<input type="password" name="password" placeholder="Пароль" required />
<input name="submit" type="submit" value="Войти" />
</form>
<p>Нет аккаунта? <a href='registration.php'>Создайте новый</a></p>
</div>
<?php } ?>
</body>
</html>