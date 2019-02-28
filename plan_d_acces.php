<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=eme_school;charset=utf8','root','password');
?>
<!DOCTYPE html>
<html>
<head>
	<title>EME - Présentation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/presentation.css">
</head>
<body>
<?php
	include 'includes/menu.php';
?>
<div id="sub_menu_ul">
	<span class="sub_menu_li"><a href="presentation.php" class="sub_menu_li">Formations</a></span>
	<span class="sub_menu_li"><a href="historique.php" class="sub_menu_li">Historique</a></span>
	<span class="sub_menu_li"><a href="informations_pratiques.php" class="sub_menu_li">Informations Pratiques</a></span>
	<span class="sub_menu_li"><a href="desserte.php" class="sub_menu_li">Desserte</a></span>
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="plan_d_acces.php" class="sub_menu_li"  style="background-color: #4169E1;color:white">Plan d'accès</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		<h2>Plan d'Accès</h2>

		<div style="text-align: left;padding: 20px;font-size: 18px">
			<u>Entrée des élèves :</u> 233, Bd de St-Marcel, 13011 Marseille<br />
			<u>Entée secrétariat :</u> 58 rue des crottes, 13011 Marseille<br />
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.3066986440563!2d5.466631850968654!3d43.28689847903321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bea56b0ec6b9%3A0x9d84bac3ee229429!2s58+Rue+des+Crottes%2C+13011+Marseille!5e0!3m2!1sfr!2sfr!4v1551221372604" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<img src="img/fondacces.jpg" style="width: 650px;height: 450px;"><br />
	</div>
</div>
</body>
</html>