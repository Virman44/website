<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Регистрация</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Регистрация прошла успешно.</h3>
<br/>Нажмите, чтобы <a href='login.php'>авторизоваться</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Регистрация</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Имя пользователя" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Пароль" required />
<input type="submit" name="submit" value="Зарегистрироваться" />
</form>
</div>
<?php } ?>
</body>
</html>