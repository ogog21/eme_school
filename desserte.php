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
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="desserte.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Desserte</a></span>
	<span class="sub_menu_li"><a href="plan_d_acces.php" class="sub_menu_li">Plan d'accès</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		<h2>Desserte</h2>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<strong><u>Avec le bus 15 ou 40 :</u></strong> Arrêt sur le boulevard de St Marcel à la hauteur du portail d'entrée.
		</div>
		<img src="img/bus.jpg" style="width: 550px;height: 300px;margin-top: 10px;"><br />

		<div style="text-align: left;padding: 20px;font-size: 18px">
			<strong><u>Avec le train :</u></strong> Gare de Saint Marcel, 2 minutes à pied de l'école.
		</div>
		<img src="img/train.jpg" style="width: 550px;height: 300px;"><br />
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<strong><u>Par autoroute EST</u></strong><br /><br />
			<li style="margin-left: 50px;">En venant de Marseille : sortie La Valentine</li>
			<li style="margin-left: 50px;">En venant d'Aubagne : sortie La Penne sur Huveaune.</li><br />
		</div>
	</div>
</div>
</body>
</html>