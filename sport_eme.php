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
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="sport_eme.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Le Sport à L'E.M.E</a></span>
	<span class="sub_menu_li"><a href="eps.php" class="sub_menu_li">E.P.S</a></span>
	<span class="sub_menu_li"><a href="tournoi_foot.php" class="sub_menu_li">Tournoi de foot</a></span>
	<span class="sub_menu_li"><a href="association_sportive.php" class="sub_menu_li">Association Sportive</a></span>
	<span class="sub_menu_li"><a href="vie_scolaire.php" class="sub_menu_li">Retour</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		
		<h2>Le Sport à l'E.M.E</h2>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<hr>
			PREVOIR CANAVAS
			<hr>
		</div>
	</div>
</div>
</body>
</html>