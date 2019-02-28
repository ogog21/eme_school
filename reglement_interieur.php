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
	<span class="sub_menu_li"><a href="vie_scolaire.php" class="sub_menu_li">Vie Scolaire</a></span>
	<span class="sub_menu_li"><a href="dates_importantes.php" class="sub_menu_li">Les Dates Importantes</a></span>
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="reglement_interieur.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Réglement Intérieur</a></span>
	<span class="sub_menu_li"><a href="visite_medicale.php" class="sub_menu_li">Visite Médicale</a></span>
	<span class="sub_menu_li"><a href="fournitures_scolaires.php" class="sub_menu_li">Fournitures Scolaires</a></span>
	<span class="sub_menu_li"><a href="sport_eme.php" class="sub_menu_li">Le Sport à L'E.M.E</a></span>
	<span class="sub_menu_li"><a href="projets_techniques.php" class="sub_menu_li">Les Projets Techniques</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		<h2>Réglement Interieur</h2>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			En début d'année scolaire, le réglement intérieur de l'établissement est donné aux élèves en deux exemplaires, il est lu et commenté en classe, il est ensuite signé par chaque élève et ses représentants légaux. Un exemplaire signé est rendu à l'administration de l'établissement. <br/><br/>
			<hr>
			<u>Réglement interieur disponible en PDF :</u><br/>
			<li style="margin-left: 50px;"><a href="http://www.eme-enseignement.fr/chargement_site/reglement_2016.pdf" target="_blank" style="text-decoration:none;">Réglement Interieur -> <img src="img/pdf.png" style="width: 25px;height: 25px"></a></li>
			<hr>
		</div>
	</div>
</div>
</div>
</body>
</html>