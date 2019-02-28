<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=eme_school;charset=utf8','root','password');
?>
<!DOCTYPE html>
<html>
<head>
	<title>EME - Formations</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/formations.css">
</head>
<body>
<?php
	include 'includes/menu.php';
?>
<div id="sub_menu_ul">
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="formations.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Les Cursus</a></span>
	<span class="sub_menu_li"><a href="bacprosen.php" class="sub_menu_li">BAC Pro. SEN</a></span>
	<span class="sub_menu_li"><a href="bacsti2d.php" class="sub_menu_li">BAC STi2D</a></span>
	<span class="sub_menu_li"><a href="btssn.php" class="sub_menu_li">BTS SN</a></span>
	<span class="sub_menu_li"><a href="reussite.php" class="sub_menu_li">Taux de réussite</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		<h2>Les Cursus</h2>
		<img src="img/cursuss.jpg" style="padding: 20px;width: 600px;height: 600px;">
	</div>
</div>
</body>
</html>