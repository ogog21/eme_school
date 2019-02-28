<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=eme_school;charset=utf8','root','password');
?>
<!DOCTYPE html>
<html>
<head>
	<title>EME - Activités Extra-Scolaires</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/extra_scolaires.css">
</head>
<body>
<?php
	include 'includes/menu.php';
?>
<div id="sub_menu_ul">
	<span class="sub_menu_li" style="background-color: #4169E1;"><a href="anciens_eleves.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Anciens Elèves</a></span>
	<span class="sub_menu_li"><a href="#" class="sub_menu_li">Rencontres Annuelles</a></span>
	<span class="sub_menu_li"><a href="#liste_diffusion" class="sub_menu_li">Liste de Diffusion</a></span>
	<span class="sub_menu_li"><a href="#lettres_anciens" class="sub_menu_li">Lettres aux Anciens</a></span>
	<span class="sub_menu_li"><a href="#journee_info" class="sub_menu_li">Journées d'Informations</a></span>
	<span class="sub_menu_li"><a href="#apres_etude" class="sub_menu_li">Que deviennent les Anciens?</a></span>
	<span class="sub_menu_li"><a href="activites_extra_scolaires.php" class="sub_menu_li">Retour</a></span>
</div>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
		<h2>Anciens Elèves</h2>
		<div style="text-align: left;padding: 20px;font-size: 18px">
			<h2>Rencontres annuelles :</h2>
			Une fois par an, un apéritif organisé par les élèves de BTS est offert à tous les anciens par l'EME. C'est l'occasion pour:<br>
			<li style="margin-left: 50px;">Echanger des souvenirs</li>
			<li style="margin-left: 50px;">Retrouver d'anciens camarades</li>
			<li style="margin-left: 50px;">Donner des conseils aux nouveaux</li>
			<li style="margin-left: 50px;">Créer des nouveaux liens, amicaux ou professionnels</li><br>
			<strong id="liste_diffusion">La dernière rencontre a eu lieu à l'EME :</strong><br>
			<u>Le vendredi 17 juin 2011, à partir de 18h.</u><br><br>
			<strong>Quelques photos souvenirs :</strong> <a href="http://www.eme-enseignement.fr/photos/anciens_apero_2007/" target="_blank" style="text-decoration:none;">2007</a> <a href="http://www.eme-enseignement.fr/photos/anciens_apero_2006/" target="_blank" style="text-decoration:none;">2006</a> <a href="http://www.eme-enseignement.fr/photos/anciens_apero_2005/" target="_blank" style="text-decoration:none;">2005</a> <a href="http://www.eme-enseignement.fr/photos/anciens_apero_2002/" target="_blank" style="text-decoration:none;">2002</a><br><br>

			<hr>
			<h2>Liste de diffusion</h2>
			Cette liste est réservée aux anciens élèves, aux élèves actuels et aux professeurs de l'école, c'est un lieu d'échanges, on y trouvera:<br>
			<li style="margin-left: 50px;">Des offres d'emplois et de stages</li>
			<li style="margin-left: 50px;" id="lettres_anciens">Des CV, des recherches d'emplois et de stages</li>
			<li style="margin-left: 50px;">Des informations professionnelles et de loisirs</li>
			<li style="margin-left: 50px;">Des nouvelles de chacun d'entre nous...</li><br>

			Pour s'y abonner, veuillez cliquer ici -> <a href="formulaire_ancien_eleves.php">S'Inscrire</a><br>
			<hr>

			<h2>Lettre aux Anciens</h2>
			Depuis un grand nombre d'années je m'emploie à maintenir le contact avec vous. C'est un réel plaisir pour moi que de pouvoir suivre vos évolutions de vie et de carrière. De plus, il est important pour l'école d'avoir votre point de vue sur la profession et sur notre enseignement.<br><br>
			Initialement constituée d'anciens élèves de BTS, l'amicale des anciens est bien sûr ouverte à tous les anciens élèves de l'école (BEP, BAC PRO et BAC STI). Vous serez tous bienvenus pour les rencontres, pour les journées d'informations, pour passer nous dire bonjour et même pour nous demander un service.<br><br>
			<li style="margin-left: 50px;">Si vous êtes à la recherche d'un emploi</li>
			<li style="margin-left: 50px;">Si votre entreprise accepte de prendre des stagiaires</li>
			<li style="margin-left: 50px;">Si vous désirez être inscrit au fichier des anciens</li><br>
			<span id="journee_info">Contactez</span> nous, en vous adressant soit à l'Ecole, soit à un de vos anciens Profs ou à moi directement.<br><br>
			Chaque Prof, a une adresse constituée de la façon suivante: <u>prénom.nom@eme-enseignement.fr</u><br><br>
			Daniel CLERC - Chef de travaux<br>
			<hr>
			<h2>Journées d'informations</h2>
			Nos élèves se posent beaucoup de questions sur leur avenir. Leurs interrogations sont tout à fait légitimes. Le contexte économique et social ainsi que leur inexpérience les inquiètent. Aussi pensons-nous que les anciens élèves peuvent les aider à avoir une meilleure vision de la vie professionnelle qui les attend.<br><br>
			Pour cela nous organisons de temps en temps , avec le concours d'anciens élèves, une journée d’information.<br><br>
			<strong>Les thèmes abordés sont les suivants:</strong>
			<li style="margin-left: 50px;">Types d’activités rencontrés dans l'entreprise</li>
			<li style="margin-left: 50px;">Perspectives d’évolution dans l’entreprise</li>
			<li style="margin-left: 50px;">Difficultés rencontrées lors de la première embauche</li>
			<li style="margin-left: 50px;">Trouver un premier emploi, se préparer à un entretien d'embauche</li>
			<li style="margin-left: 50px;">Fréquence des changements d’emploi</li>
			<li style="margin-left: 50px;">Durée des périodes de chômage</li>
			<li style="margin-left: 50px;">Possibilités de poursuite d’études</li>
			<li style="margin-left: 50px;" id="apres_etude">Difficultés rencontrées en université</li>
			<li style="margin-left: 50px;">Réussite d’études supérieures</li><br>
			Un fois encore nous remercions les anciens élèves de l'intérêt qu'ils portent à leurs successeurs et de leur point de vue de professionnels sur notre enseignement.

			<hr>

			<h2>Que deviennent les Anciens?</h2>

			Ces résultats statistiques portent sur un échantillon de 163 anciens élèves de l'EME (un ensemble de 220 ayant été sollicité). Ils sont sortis de l'école entre 1981 et 1996, après avoir suivi la formation de Technicien Supérieur en Électronique. Cet échantillon représente un peu plus de 50% de la totalité des étudiants accueillis sur cette période. Le questionnaire, à la base de ces statistiques, a été rempli entre juin et octobre 1998, et portait sur divers points de la situation professionnelle actuelle ou passée des anciens élèves:<br><br>

			<u>Types de fonctions :</u> <br><img src="img/types_fonctions.png" style="width: 400px;height: 300px"><br><br>

			<u>Types d'activités :</u> <br><img src="img/types_activites.png" style="width: 400px;height: 300px"><br><br>

			<u>Statuts :</u> <br><img src="img/status.png" style="width: 400px;height: 300px"><br><br>

			<u>Types d'entreprises :</u> <br><img src="img/types_entreprises.png" style="width: 400px;height: 300px"><br><br>

			<u>Lieux de travail :</u> <br><img src="img/lieux_travail.png" style="width: 400px;height: 300px"><br><br>

			<u>Diplômes obtenus après le BTS :</u> <br><img src="img/diplome_apres_bts.png" style="width: 400px;height: 300px"><br><br>
		</div>
	</div>
</div>
</body>
</html>