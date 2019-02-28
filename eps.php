<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=eme_school;charset=utf8','root','password');
?>
<!DOCTYPE html>
<html>
<head>
	<title>EME - Vie Scolaire</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/vie_scolaire.css">
</head>
<body>
<?php
	include 'includes/menu.php';
?>
<div id="sub_menu_ul">
	<span class="sub_menu_li"><a href="sport_eme.php" class="sub_menu_li">Le Sport à L'E.M.E</a></span>
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="eps.php" class="sub_menu_li" style="background-color: #4169E1;color:white">E.P.S</a></span>
	<span class="sub_menu_li"><a href="tournoi_foot.php" class="sub_menu_li">Tournoi de foot</a></span>
	<span class="sub_menu_li"><a href="association_sportive.php" class="sub_menu_li">Association Sportive</a></span>
	<span class="sub_menu_li"><a href="vie_scolaire.php" class="sub_menu_li">Retour</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		
		<h2>L'E.P.S</h2>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			Toutes les classes (exceptées celles de BTS) ont 2 ou 3h heures d’E.P.S par semaine.<br /><br />
			Les cours d’E.P.S ont lieu sur le stade de St Marcel, situé à proximité de l’école. Deux terrains de football, un terrain de hand-ball, un terrain de basket-ball, un terrain de volley-ball, un sautoir en longueur, une aire de lancer et une petite salle (pratique de la gymnastique et de la boxe) sont à la disposition des élèves.<br /><br />
			Pour tous les examens, la note d’ E.P.S est acquise sous forme de contrôle en cours de formation. Cette note sur 20 proposée par le professeur d’E.P.S est entérinée par une commission de l’Inspection Académique. Seul un certificat médical peut dispenser de cette épreuve.
		</div>
	</div>
</div>
</body>
</html>