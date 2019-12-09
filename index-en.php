<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Photography and science</title>
<link rel="stylesheet" href="css/styleindex1.css" />
</head>
<body background="images/fon1.jpg">
   <div id="wrapper">   <!--Оболочка-->
     <div id="header"> 
     <h3 id="hello"; align="center">Welcome <?php echo $_SESSION['username']; ?>!</h3>
       <h1 align="center">Photography and science</h1>      
     </div>
     <div id="content"> 
       <h3 align="center">On the site:</h3> 	 	   <!--меню-->
	  <p align = "center"> <a href="index1-en.php"> Photo history </a> </p>
<p align = "center"> <a href="index2-en.php"> Physical and chemical principles of the photographing process</a> </p>
<p align = "center"> <a href="index3-en.php"> Macro and micro photography in scientific research </a> </p>
<p align = "center"> <a href="index4-en.php"> Ways to improve image quality </a> </p>
<p align = "center"> <a href="index5-en.php"> Interesting facts about photography </a> </p>
<p align = "center"> <a href="index6-en.php"> How to make a pinhole camera at home</a> </p>
		<p align="center"> <a href="index7-en.php">Literature</a></p>
</div> 
  <div class="clear"></div>
  <div id="footer">
     <p align="center"><a href="logout-en.php">Exit</a>
     	<p id="pfooter"; align="center"><a href="index.php">Версия на русском</a>

     </div> <!--Запрет наплывания-->
  
</body>
</html>