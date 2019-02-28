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
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="vie_scolaire.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Vie Scolaire</a></span>
	<span class="sub_menu_li"><a href="dates_importantes.php" class="sub_menu_li">Les Dates Importantes</a></span>
	<span class="sub_menu_li"><a href="reglement_interieur.php" class="sub_menu_li">Réglement Intérieur</a></span>
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
		<h2>Vie Scolaire</h2>
		<img src="img/viescolaire.jpg" style="width: 600px;height: 450px;margin-top: 10px;padding: 30px"><br />
	</div>
</div>
</body>
</html>