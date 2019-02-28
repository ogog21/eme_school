<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=eme_school;charset=utf8','root','password');
?>
<!DOCTYPE html>
<html>
<head>
  <title>EME - Formations</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/formations.css">
</head>
<body>
<?php
  include 'includes/menu.php';
?>
<div id="sub_menu_ul">
  <span class="sub_menu_li"><a href="formations.php" class="sub_menu_li">Les Cursus</a></span>
  <span class="sub_menu_li"><a href="bacprosen.php" class="sub_menu_li">BAC Pro. SEN</a></span>
  <span class="sub_menu_li" style="background-color: #4169E1;"><a href="bacsti2d.php" class="sub_menu_li" style="background-color: #4169E1;color:white">BAC STi2D</a></span>
  <span class="sub_menu_li"><a href="btssn.php" class="sub_menu_li">BTS SN</a></span>
  <span class="sub_menu_li"><a href="reussite.php" class="sub_menu_li">Taux de réussite</a></span>
</div>
<div>
  <br />
  <br />
  <br />
  <div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
    <h2>Bac STi2D</h2>
    <h3>Sciences et Technologie Industrielle et Developpement Durable</h3>
    <img src="img/bacsti2d.png" style="padding: 20px;width: 300px;height: 300px;">
    <div style="text-align: left;padding: 20px;font-size: 18px">
      <strong><a href="http://www.eme-enseignement.fr/chargement_site/sti2d_pres_eme_2011.pdf" target="_blank">Présentation sur le site EDUSCOL.</a></strong><br>
      <strong><li style="margin-left: 50px;"><a href="http://www.eme-enseignement.fr/chargement_site/sti2d_pres_eme_2011.pdf" target="_blank">Diaporama de présentation</a></strong></li><br>
      Bac unique, en phase avec les enjeux de développement durable du XXIème siècle, construit avec un socle d'enseignements généraux, un socle d'enseignements technologiques transversaux permettant une large ouverture d'études supérieures dans tous les domaines scientifiques et technologiques: Ecoles d'ingénieurs, Master, Licence professionnelle.<br><br>
      Quatre approfondissements permettant de personnaliser l'enseignement technologique en fonction des goûts et aptitudes des élèves:<br><br>
      <li style="margin-left: 50px;"><u>SIN :</u> Systèmes d'Information et Numérique. Analyse et création de solutions techniques relatives au traitement des flux d'information (voix données, image).</li>
      <li style="margin-left: 50px;"><u>EE :</u> Énergie et Environnement. Exploration du domaine de l'énergie de sa gestion et de ses impacts sur l'environnement.</li>
      <li style="margin-left: 50px;"><u>ITEC :</u> Innovation Technologique et Eco Conception. Analyse et création de solutions techniques relatives à la structure et à la matière.</li>
      <li style="margin-left: 50px;"><u>AC :</u> Architecture et Construction. Analyse et création de solutions techniques relatives au domaine de la construction dans le respect des contraintes réglementaires, économiques et environnementales.</li><br>
    </div>
  </div>
</div>
</body>
</html>