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
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="visite_medicale.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Visite Médicale</a></span>
	<span class="sub_menu_li"><a href="fournitures_scolaires.php" class="sub_menu_li">Fournitures Scolaires</a></span>
	<span class="sub_menu_li"><a href="sport_eme.php" class="sub_menu_li">Le Sport à L'E.M.E</a></span>
	<span class="sub_menu_li"><a href="projets_techniques.php" class="sub_menu_li">Les Projets Techniques</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		<h2>Visite Médicale</h2>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			Le code du travail interdit aux mineurs d'effectuer des travaux dangereux. Dans le cadre des formations professionnelles et technologiques, une procédure de dérogation rend possible l'affectation des mineurs de plus de 15 ans à des travaux réglementés. L'obtention de cette dérogation est soumise à la délivrance d'un avis médical préalable, rempli par un médecin agréé, il doit être renouvelé chaque année. <br/><br/>
			<u>Lettre explicative destinée aux parents :</u><br/>
			<li style="margin-left: 50px;"><a href="http://www.eme-enseignement.fr/chargement_site/lettre_aux_parents_visite_médicale.pdf" target="_blank" style="text-decoration:none;">Fichier PDF à télécharger -> <img src="img/pdf.png" style="width: 25px;height: 25px"></a></li>
			<u>Listes des médecins agréés dans les Bouches-du-Rhône : </u><br/>
			<li style="margin-left: 50px;"><a href="http://www.eme-enseignement.fr/chargement_site/liste_medecins_generalistes_BDR_maj_07_15.pdf" target="_blank" style="text-decoration:none;">Fichier PDF à télécharger -> <img src="img/pdf.png" style="width: 25px;height: 25px"></a></li>
			<u>Modèle d'avis médical : </u><br/>
			<li style="margin-left: 50px;"><a href="http://www.eme-enseignement.fr/chargement_site/avis_medical_travaux_reglementes_eme.pdf" target="_blank" style="text-decoration:none;">Fichier PDF à télécharger -> <img src="img/pdf.png" style="width: 25px;height: 25px"></a></li>
			<u>Fiche de renseignements à fournir complétée au médecin:</u><br/>
			<li style="margin-left: 50px;"><a href="http://www.eme-enseignement.fr/chargement_site/fiche_de_renseignements_sante_eme.pdf" target="_blank" style="text-decoration:none;">Fichier PDF à télécharger -> <img src="img/pdf.png" style="width: 25px;height: 25px"></a></li>
			<u>Liste des travaux concernés à fournir au médecin: </u>
			<li style="margin-left: 50px;"><a href="http://www.eme-enseignement.fr/chargement_site/tableau_equipement_outillage_pour_le_medecin.pdf" target="_blank" style="text-decoration:none;">Fichier PDF à télécharger -> <img src="img/pdf.png" style="width: 25px;height: 25px"></a></li>
		</div>
	</div>
</div>
</body>
</html>