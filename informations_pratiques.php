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
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="informations_pratiques.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Informations Pratiques</a></span>
	<span class="sub_menu_li"><a href="desserte.php" class="sub_menu_li">Desserte</a></span>
	<span class="sub_menu_li"><a href="plan_d_acces.php" class="sub_menu_li">Plan d'accès</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		<h2>Informations Pratiques</h2>

		<div style="text-align: left;padding: 20px;font-size: 18px">
			<img src="img/crous.jpg" style="width: 300px:height:200px;">
			<i>Les élèves sont habilités à percevoir des bourses nationales et départementales (bourse d'enseignement supérieur pour les BTS).</i>
			<a href="http://www.etudiant.gouv.fr" target="_blank">Demande de bourse</a><br/><br />

			<strong>- Les cours ont lieu du lundi matin au vendredi soir :</strong><br />
			<li style="margin-left: 50px;">De 8h à 11h45</li>
			<li style="margin-left: 50px;">De 13h à 16h45</li><br />

			<strong>- L'établissement dispose d'une cantine, deux formules sont proposées :</strong><br />
			<li style="margin-left: 50px;">Entrée, plat et dessert - 6,70€</li>
			<li style="margin-left: 50px;">Plat et dessert - 5€</li><br />

			<strong>- Participation annuelle des familles :</strong><br />
			<li style="margin-left: 50px;">Bac pro SN 1000€</li>
			<li style="margin-left: 50px;">Bac STI2D 970€</li>
			<li style="margin-left: 50px;">BTS SN 1062€</li>
			<i>Frais d'inscription: 70€</i><br /><br />
			<img src="img/tel.png" style="height: 18px;width: 18px;"> 04 92 44 65 37<br>
			<img src="img/email.png" style="height: 18px;width: 18px;"> contact@eme-enseignement.fr<br>
			<img src="img/lieu.png" style="height: 18px;width: 18px;"> <a href="https://goo.gl/maps/sa7icFkdV3N2" target="_blank">233, Bd Saint Marcel 13011 Marseille.</a><br><br>
			Ou remplir le <a href="formulaire.php" style="text-decoration:none;">formulaire</a>.<br /><br/>
			<hr>
			<a href="http://www.eme-enseignement.fr/chargement_site/site_renseignements_inscription_2017_2018.pdf" target="_blank"><img src="img/pdf.png" style="width: 50px;height: 50px;"> Renseignement & Pré-inscription</a>
			<hr>
		</div>
	</div>
</div>
</body>
</html>