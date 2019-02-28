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
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="historique.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Historique</a></span>
	<span class="sub_menu_li"><a href="informations_pratiques.php" class="sub_menu_li">Informations Pratiques</a></span>
	<span class="sub_menu_li"><a href="desserte.php" class="sub_menu_li">Desserte</a></span>
	<span class="sub_menu_li"><a href="plan_d_acces.php" class="sub_menu_li">Plan d'accès</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		<h2>Historique</h2>
		<img src="img/filles_tsf.gif" style="width: 350px;height: 300px;margin-top: 10px;"><br />

		<div style="text-align: left;padding: 20px;font-size: 18px">
			Créée en 1910, l' école modèle de TSF préparait au brevet de radiotélégraphiste 1ère et 2ème classe. Ces opérateurs, qui manipulaient en MORSE, assuraient un service dans la marine marchande et les transmissions militaires.<br /><br />
			Les premiers résultats, consécutifs à l'installation des classes de Brevet d'Enseignement Professionnel, permirent la signature d'un Contrat d'Association avec l'État puis l'ouverture de la filière Baccalauréat technologique. L'utilisation et le développement de l'électronique dans le secteur industriel a nécessité la mise en place de formations de techniciens: BTS et Bac Pro.
		</div>
		<img src="img/garcons_tsf.gif" style="width: 350px;height: 300px;"><br />
		<div style="text-align: left;padding: 20px;font-size: 18px">
			En 1971, l'école devient l'École Modèle d'Électronique pour dispenser un enseignement ouvrant aux métiers de l'électronique, elle est alors dirigée par Monsieur Serge Sebahoun. <br /> <br />
			<span style='float: right;'>L'école est actuellement dirigée par Madame Danièle Roussillon-Sebahoun.</span><br />
		</div>
	</div>
</div>
</body>
</html>