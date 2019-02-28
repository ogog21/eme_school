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
  <span class="sub_menu_li"><a href="bacsti2d.php" class="sub_menu_li">BAC STi2D</a></span>
  <span class="sub_menu_li" style="background-color: #4169E1;"><a href="btssn.php" class="sub_menu_li" style="background-color: #4169E1;color:white">BTS SN</a></span>
  <span class="sub_menu_li"><a href="reussite.php" class="sub_menu_li">Taux de réussite</a></span>
</div>
<div>
  <br />
  <br />
  <br />
  <div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
    <h2>BTS Systèmes Numériques</h2>
    <h3>Formation scolaire ou par alternance</h3>
    <img src="img/sn.jpg" style="padding: 20px;width: 350px;height: 250px;">
    <div style="text-align: left;padding: 20px;font-size: 18px">
      Issu de la fusion entre le BTS SE et le BTS IRIS, ce nouveau BTS SN répond aux évolutions des secteurs de l'informatique et de l'électronique. Deux options sont proposées :<br><br>
      <strong>- Électronique et Communication (EC)</strong> qui formera des professionnels des composants complexes, de la pré-industrialisation et de la maintenance des dispositifs électroniques.<br>
      <strong>- Informatique et Réseaux (IR)</strong> qui formera des professionnels capables de répondre aux besoins du secteur de l'informatique scientifique, de l'informatique industrielle et de l'informatique du temps réel et de la mobilité.<br><br>
      Accessible avec un Bac Scientifique, un Bac Technologique, un Bac Pro Industriel ou une expérience professionnelle. la mixité des publics nous a conduit à mettre en place un accompagnement personnalisé et de scéances de soutien.<br><br>
      <u>Contenu des deux ans de la formation:</u>
      <li>- Enseignements de tronc commun (706h à 786h)</li>
      <li style="margin-left: 50px;">Anglais (84h)</li>
      <li style="margin-left: 50px;">Mathématiques (130h)</li>
      <li style="margin-left: 50px;">Culture générale et expression française (130h)</li>
      <li style="margin-left: 50px;">Sciences Physiques (62h)</li>
      <li style="margin-left: 50px;">Economie Gestion (40h)</li>
      <li style="margin-left: 50px;">Electronique, connaissances de base composants et principes (80h)</li>
      <li style="margin-left: 50px;">Informatique, algorithmique, langages, réseaux (80h)</li>
      <li style="margin-left: 50px;">Accompagnement personnalisé, méthodologie, soutien (de 80h à 160h)</li>
      <li style="margin-left: 50px;">Gestion de projets (20h)</li><br>

      <li>- Spécialité Electronique et Communication (EC) (670h)</li>
      <li style="margin-left: 50px;">Usage et conception de composants complexes (128h)</li>
      <li style="margin-left: 50px;">Mathématiques (130h)</li>
      <li style="margin-left: 50px;">Pré-industrialisation (92h)</li>
      <li style="margin-left: 50px;">Installation et maintenance des dispositifs électroniques (184h)</li>
      <li style="margin-left: 50px;">Mesures physiques (220h)</li><br>
      
      <li>- Spécialité Electronique et Communication (IR) (670h)</li>
      <li style="margin-left: 50px;">Informatique scientifique et industrielle (66h)</li>
      <li style="margin-left: 50px;">Informatique du temps réel et de la mobilité (82h)</li>
      <li style="margin-left: 50px;">Développement (220h)</li>
      <li style="margin-left: 50px;">Installation et maintenance des dispositifs informatiques (148h)</li>
      <li style="margin-left: 50px;">Mesures physiques (154h))</li><br>

      Le BTS est un diplôme professionnel qui permet à beaucoup de trouver rapidement un premier emploi. Le technicien interviendra pour l’installation, la mise en service et la maintenance des systèmes électroniques.<br><br>

      <u>Notre formation prend appui sur des systèmes appartenant aux domaines :</u>
      <li style="margin-left: 50px;">Télécommunications et réseaux téléphoniques</li>
      <li style="margin-left: 50px;">Informatique, télématique et bureautique</li>
      <li style="margin-left: 50px;">Multimédia : son, image et radiodiffusion</li>
      <li style="margin-left: 50px;">Robotique</li>
      <li style="margin-left: 50px;">Electronique médicale</li><br>

      Les titulaires du BTS peuvent prétendre poursuivre des études supérieures si leur dossier scolaire et leurs résultats au BTS montrent qu’ils en ont le potentiel.<br><br>
      <u>Les possibilités offertes sont les suivantes :</u><br>
      <li style="margin-left: 50px;">Préparation aux grandes écoles</li>
      <li style="margin-left: 50px;">Licence professionnelle</li>
      <li style="margin-left: 50px;">Ecoles d’ingénieurs</li><br>
    </div>
  </div>
</div>
</body>
</html>