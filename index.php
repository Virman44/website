<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>Фотография и наука</title>
<link rel="stylesheet" href="css/styleindex1.css" />
</head>
<body background="images/fon1.jpg">
   <div id="wrapper">   <!--Оболочка-->
     <div id="header"> 
     <h3 id="hello"; align="center">Добро пожаловать <?php echo $_SESSION['username']; ?>!</h3>
       <h1 align="center">Фотография и наука</h1>      
     </div>
     <div id="content"> 
       <h3 align="center">На сайте:</h3> 	 	   <!--меню-->
	   <p align="center"> <a href="index1.php">История создания фотоизображения</a> </p>
		<p align="center"> <a href="index2.php">Физические и химические основы процесса фотографирования</a></p>
		<p align="center"> <a href="index3.php">Макро- и микросъемка в научных исследованиях</a></p>
        <p align="center"> <a href="index4.php">Пути повышения качества изображения</a></p>
		<p align="center"> <a href="index5.php">Интересные факты о фотографии</a></p>
		<p align="center"> <a href="index6.php">Как сделать камеру-обскура в домашних условиях</a></p>
		<p align="center"> <a href="index7.php">Литература</a></p>
</div> 
  <div class="clear"></div>
  <div id="footer">
     <p align="center"><a href="logout.php">Выйти</a>
     	<p id="pfooter"; align="center"><a href="index-en.php">English version</a>

     </div> <!--Запрет наплывания-->
  
</body>
</html>