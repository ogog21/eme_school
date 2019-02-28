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
	<span class="sub_menu_li"><a href="reglement_interieur.php" class="sub_menu_li">Réglement Intérieur</a></span>
	<span class="sub_menu_li"><a href="visite_medicale.php" class="sub_menu_li">Visite Médicale</a></span>
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="fournitures_scolaires.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Fournitures Scolaires</a></span>
	<span class="sub_menu_li"><a href="sport_eme.php" class="sub_menu_li">Le Sport à L'E.M.E</a></span>
	<span class="sub_menu_li"><a href="projets_techniques.php" class="sub_menu_li">Les Projets Techniques</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		
		<h2>Fournitures Scolaires</h2>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<hr>
			EN SECONDE PROFESSIONNELLE SN (2SN1 et 2SN2)
			<li style="margin-left: 50px;"><a href="http://www.eme-enseignement.fr/chargement_site/four_2sn_18_19.pdf" target="_blank" style="text-decoration:none;">Fichier PDF à télécharger -> <img src="img/pdf.png" style="width: 25px;height: 25px"></a></li>
			<hr>
			EN PREMIERE BAC PRO SN (1SN1 et 1SN2)
			<li style="margin-left: 50px;"><a href="http://www.eme-enseignement.fr/chargement_site/four_1sn_18_19.pdf" target="_blank" style="text-decoration:none;">Fichier PDF à télécharger -> <img src="img/pdf.png" style="width: 25px;height: 25px"></a></li>
			<hr>
			EN TERMINALE BAC PRO SN (TSN1 et TSN2)
			<li style="margin-left: 50px;"><a href="http://www.eme-enseignement.fr/chargement_site/four_tsn_18_19.pdf" target="_blank" style="text-decoration:none;">Fichier PDF à télécharger -> <img src="img/pdf.png" style="width: 25px;height: 25px"></a></li>
			<hr>
			EN PREMIERE ET TERMINALE BAC STI2D
			<li style="margin-left: 50px;"><a href="http://www.eme-enseignement.fr/chargement_site/four_sti2d_18_19.pdf" target="_blank" style="text-decoration:none;">Fichier PDF à télécharger -> <img src="img/pdf.png" style="width: 25px;height: 25px"></a></li>
			<hr>
			Pour les autres classes, le matériel sera précisé à la rentrée.
			<hr>
		</div>
	</div>
</div>
</body>
</html>