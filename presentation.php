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
	<link rel="stylesheet" type="text/css" href="css/presentation.css">
</head>
<body style="background-color:#FBFCFA;">
<?php
	include 'includes/menu.php';
?>
<div id="sub_menu_ul">
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="presentation.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Formations</a></span>
	<span class="sub_menu_li"><a href="historique.php" class="sub_menu_li">Historique</a></span>
	<span class="sub_menu_li"><a href="informations_pratiques.php" class="sub_menu_li">Informations Pratiques</a></span>
	<span class="sub_menu_li"><a href="desserte.php" class="sub_menu_li">Desserte</a></span>
	<span class="sub_menu_li"><a href="plan_d_acces.php" class="sub_menu_li">Plan d'accès</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		<img src="img/affiche.jpg" style="width: 750px;height: 600px;margin-top: 10px;"><br />
		<br />
		<div style="border: 1px solid black;padding: 10px;width: 300px;height: 70px;float: left;margin-left: 50px;">
		<a href="http://www.eme-enseignement.fr/chargement_site/site_presentation_formations_2017_2018.pdf"><img src="img/pdf.png" style="width: 50px;height: 50px;"> Présentation des formations</a>
		</div>

		<div style="border: 1px solid black;padding: 10px;width: 300px;height: 70px;float: right;margin-right: 50px;margin-bottom: 25px;">
		<a href="http://www.eme-enseignement.fr/chargement_site/site_renseignements_inscription_2017_2018.pdf"><img src="img/pdf.png" style="width: 50px;height:50px;">Renseignement & Inscription</a>
		</div>
		<hr style="clear: both;">
		<strong style="font-size: 20px;">Formations aux métiers de l'Electronique, de l'Informatique et du Numérique</strong><br />
		<hr >
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<strong style="font-size: 20px;">Ces métiers vous intéressent :</strong>
			<li style="margin-left: 50px;">Vous sortez de seconde ou de troisième générale.</li>
			<li style="margin-left: 50px;">Vous êtes titulaire d'un Bac Professionnel industriel.</li>
			<li style="margin-left: 50px;">Vous êtes titulaire d'un Bac Général ou Technologique.</li><br />
			<strong style="font-size: 20px;">Nous vous proposons plusieurs <a href="formations.php" style="text-decoration:none;">formations</a> :</strong><br /><br />
			<li style="margin-left: 50px;">Bac Pro. SN - Systèmes Numériques</li>
			<li style="margin-left: 50px;">Bac STI2D - Sciences et Technologie de l'Industrie et du Développement Durable</li>
			<li style="margin-left: 50px;">BTS SN - Systèmes Numériques</li><br />
			En offrant plusieurs points d'entrée à ses élèves, l'EME peut proposer à chacun un parcours de formation de technicien du numérique adapté à ses possibilités et à ses ambitions, débouchant sur la vie professionnelle ou la poursuite d'études.<br/><br />
			L'enseignement qui y est dispensé s'adresse en priorité à ceux qui veulent découvrir ou approfondir leurs connaissances techniques et en faire leur métier. Cependant il est aussi ouvert à ceux qui las de l'enseignement général peuvent espérer trouver dans l'enseignement technique un moyen de mieux vivre leur scolarité et de la rentabiliser plus sûrement. <br /> <br />
			A l'EME, les élèves sont encadrés par une équipe pédagogique compétente, attentive et stable dans un environnement technologique adapté et actuel. Chacun a la possibilité d'y réussir s'il en manifeste la volonté.<br /><br />
			<span style='float: right;'>L'école est actuellement dirigée par Madame Danièle Roussillon-Sebahoun.</span><br />
		</div>
	</div>
</div>
</body>
</html>