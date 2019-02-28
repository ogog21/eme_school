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
	<span class="sub_menu_li"><a href="eps.php" class="sub_menu_li">E.P.S</a></span>
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="#tournoi_foot.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Tournoi de foot</a></span>
	<span class="sub_menu_li"><a href="association_sportive.php" class="sub_menu_li">Association Sportive</a></span>
	<span class="sub_menu_li"><a href="vie_scolaire.php" class="sub_menu_li">Retour</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		
		<h2>TOURNOI DE FOOT</h2>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			Depuis de nombreuses années, un tournoi interclasses de football à 7 est organisé. Initié par Bernard de TOURNADRE, cette tradition est reprise par Lionel PITAVAL son remplacant depuis la rentrée 2009. <br /><br />
			Archives photos :
			<a href="http://www.eme-enseignement.fr/photos/foot_2016/">2016</a> <a href="http://www.eme-enseignement.fr/photos/foot_2009/">2009</a> <a href="http://www.eme-enseignement.fr/photos/foot_2006/">2006</a> <a href="http://www.eme-enseignement.fr/photos/foot_2005/">2005</a> <a href="http://www.eme-enseignement.fr/photos/foot_2004/">2004</a> <a href="http://www.eme-enseignement.fr/photos/foot_2003/">2003</a> <a href="http://www.eme-enseignement.fr/photos/foot_2002/">2002</a> <a href="http://www.eme-enseignement.fr/photos/foot_2001/">2001</a> <a href="http://www.eme-enseignement.fr/photos/foot_2000/">2000</a> <a href="http://www.eme-enseignement.fr/photos/foot_1999/">1999</a>.
		</div>
	</div>
</div>
</body>
</html>