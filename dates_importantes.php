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
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="dates_importantes.php" class="sub_menu_li"  style="background-color: #4169E1;color:white">Les Dates Importantes</a></span>
	<span class="sub_menu_li"><a href="#" class="sub_menu_li">J.P.O</a></span>
	<span class="sub_menu_li"><a href="#rentree" class="sub_menu_li">Rentrée</a></span>
	<span class="sub_menu_li"><a href="#tournoi_foot" class="sub_menu_li">Tournoi de Foot</a></span>
	<span class="sub_menu_li"><a href="#vacances" class="sub_menu_li">Les Vacances</a></span>
	<span class="sub_menu_li"><a href="#reunion" class="sub_menu_li">Réunions Parents Profs</a></span>
	<span class="sub_menu_li"><a href="#stages" class="sub_menu_li">Les Stages</a></span>
	<span class="sub_menu_li"><a href="#planings" class="sub_menu_li">Planning Stages</a></span>
	<span class="sub_menu_li"><a href="vie_scolaire.php" class="sub_menu_li">Retour</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		<h2>Les Dates Importantes</h2>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<h3>Journées portes ouvertes : Samedi 2 février et samedi 30 mars de 9h à 13h.</h3>
			L'école vous sera ouverte, à cette occasion vous pourrez :<br/>
			<li style="margin-left: 50px;">Dialoguer avec les élèves et les professeurs.</li>
			<li style="margin-left: 50px;">Vous rendre compte de l'environnement technologique dans lequel évoluent nos élèves.</li>
		</div>
		<img src="img/dominos_hommes002.jpg" style="width: 550px;height: 200px;margin-top: 10px;" id="rentree"><br />
		<hr>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<h2>RENTRÉE SCOLAIRE 2018</h2>
			<li style="margin-left: 50px;">Ouverture de l'établissement : lundi 27 août à 8h</li>
			<li style="margin-left: 50px;">Rentrée des professeurs : vendredi 31 août à 9h</li>
		</div>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<h3>Rentrée des élèves, lundi 3 Septembre :</h3>
			<li style="margin-left: 50px;">BTS SN (TS1 et TS2) : 08h00</li>
			<li style="margin-left: 50px;">Secondes Professionnelles Bac pro SN (2SN1 et 2SN2) : 08h00</li>
			<li style="margin-left: 50px;">Premières et Terminales Bac Pro SN (1SN1, 1SN2, TSN1 et TSN2) : 10h00</li>
			<li style="margin-left: 50px;">Premières et Terminales STI2D (1STI2D et TSTI2D) : 13h00</li><br />
			<h3 id="tournoi_foot">Journée d'intégration, vendredi 7 Septembre à 08h00.<br />
			Début des cours, mardi 4 Septembre à 08h00.</h3>
		</div>
		<hr>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<h2>TOURNOI DE FOOT</h2>
			<li style="margin-left: 50px;">Vendredi 19 Octobre.</li>
			<li style="margin-left: 50px;" id="vacances">En compétition pour la coupe !</li>
			<li style="margin-left: 50px;">Une équipe par classe, une pour les profs et peut-être une pour les anciens.</li><br/>
		</div>
		<hr>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<h2>VACANCES SCOLAIRES 2017/2018</h2>
			<p><strong>Vacances de la Toussaint</strong><br />
			Du samedi 20 octobre au lundi 5 novembre<p>
			<p><strong>Vacances de Noël</strong><br>
			Du samedi 22 décembre au lundi 7 janvier</p>
			<p><strong>Vacances d'hiver</strong><br>
			Du samedi 9 février au lundi 25 février</p>
			<p><strong>Vacances de Printemps</strong><br>
			Du mercredi 6 avril au lundi 23 avril</p>
			<p><strong id="reunion">Vacances d'été</strong><br>
			A partir du samedi 6 juillet</p>
		</div>
		<hr>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<h2>LES RENCONTRES PARENTS PROFESSEURS</h2>
			<strong>2SN1, 2SN2, 1SN1, 1SN2, TSN1 et TSN2</strong>
			<li style="margin-left: 50px;">Lundi 10 Septembre à 17h00 : Présentation</li>
			<li style="margin-left: 50px;">Mardi 16 Octobre à 17h00 : 1er Bilan</li>
			<li style="margin-left: 50px;">Mardi 18 Décembre à 17h00 : 2ème Bilan</li>
			<li style="margin-left: 50px;">Jeudi 4 Avril à 17h00 : 3ème Bilan</li><br>
			<strong>1ère et Tnle STI2D</strong>
			<li style="margin-left: 50px;">Mardi 11 Septembre à 17h00 : Présentation</li>
			<li style="margin-left: 50px;">Lundi 15 Octobre à 17h00 : 1er Bilan</li>
			<li style="margin-left: 50px;">Mardi 18 Décembre à 17h00 : 2ème Bilan</li>
			<li style="margin-left: 50px;">Jeudi 4 Avril à 17h00 : 3ème Bilan</li><br>
			<strong id="stages">BTS SN (TS1 1 & TS2)</strong>
			<li style="margin-left: 50px;">Mardi 15 Janvier à 17h00 : Bilan</li><br>
		</div>
		<hr>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<h2>LES STAGES EN ENTREPRISE</h2>
			<strong>Seconde Bac Pro SN (2SN1 et SN2)</strong>
			<li style="margin-left: 50px;">Deux stages de 3 semaines.</li>
			<strong>Première Bac Pro SN (1SN1 et 1SN21)</strong>
			<li style="margin-left: 50px;">Deux stages de 4 semaines.</li>
			<strong>Terminale Bac Pro SN (TSN1 et TSN2)</strong>
			<li style="margin-left: 50px;">Deux stages de 4 semaines..</li>
			<strong>Première année BTS SN (TS1)</strong>
			<li style="margin-left: 50px;">Un stage de 6 semaines.</li>
			<strong id="planings">Planning des stages :</strong>
			<a href="http://www.eme-enseignement.fr/chargement_site/planning_stages_18_19.pdf" target="_blank"> Fichier .PDF à télécharger : <img src="img/pdf.png" style="width: 25px;height: 25px"></a>
		</div>
		<hr>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<strong>Planning BTS SN par alternance promo 2018-2020 :</strong><br>
			<a href="http://www.eme-enseignement.fr/chargement_site/planning_alternance_ts1_18_20.pdf" target="_blank"> Fichier .PDF à télécharger : <img src="img/pdf.png" style="width: 25px;height: 25px"></a>
		</div>
		<hr>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<strong>Planning BTS SN par alternance promo 2017-2019 :</strong><br>
			<a href="http://www.eme-enseignement.fr/chargement_site/planning_alternance_ts2_18_19.pdf" target="_blank"> Fichier .PDF à télécharger : <img src="img/pdf.png" style="width: 25px;height: 25px"></a>
		</div>
		<hr>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<strong>Planning de l'année :</strong><br>
			<a href="http://www.eme-enseignement.fr/chargement_site/planning_annee_18_19.pdf" target="_blank"> Fichier .PDF à télécharger : <img src="img/pdf.png" style="width: 25px;height: 25px"></a>
		</div>
	</div>
</div>
</body>
</html>