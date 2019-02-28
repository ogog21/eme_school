<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=eme_school;charset=utf8','root','password');
?>
<!DOCTYPE html>
<html>
<head>
	<title>EME - Activités Extra-Scolaires</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/extra_scolaires.css">
</head>
<body>
<?php
	include 'includes/menu.php';
?>
<div id="sub_menu_ul">
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="activites_extra_scolaires.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Activités Extra-Scolaires</a></span>
	<span class="sub_menu_li"><a href="anciens_eleves.php" class="sub_menu_li">Anciens Elèves</a></span>
	<span class="sub_menu_li"><a href="club_robotique.php" class="sub_menu_li">Club de Robotique</a></span>
	<span class="sub_menu_li"><a href="shell_eco_marathon.php" class="sub_menu_li">Shell Eco Marathon</a></span>
	<span class="sub_menu_li"><a href="operation_humanitaire.php" class="sub_menu_li">Opération Humanitaire</a></span>
	<span class="sub_menu_li"><a href="exemple_a_suivre.php" class="sub_menu_li">Un exmple à suivre</a></span>
	<span class="sub_menu_li"><a href="le_frioul.php" class="sub_menu_li">Le Frioul</a></span>
	<span class="sub_menu_li"><a href="tennis_petanque.php" class="sub_menu_li">Tennis, pétanque</a></span>
	<span class="sub_menu_li"><a href="paintball.php" class="sub_menu_li">Paintball</a></span>
	<span class="sub_menu_li"><a href="moto_cross.php" class="sub_menu_li">Moto Cross</a></span>
	<span class="sub_menu_li"><a href="canoe.php" class="sub_menu_li">Canoé</a></span>
	<span class="sub_menu_li"><a href="accrobranche.php" class="sub_menu_li">Accrobranche</a></span>
	<span class="sub_menu_li"><a href="kart.php" class="sub_menu_li">Kart</a></span>
	<span class="sub_menu_li"><a href="printemps_lyceens.php" class="sub_menu_li">Printemps des Lycéens</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		<h2>Activités Extra-Scolaires</h2>
		<img src="img/intro.jpg" style="padding: 20px;width: 600px;height: 500px;">
	</div>
</div>
</body>
</html>