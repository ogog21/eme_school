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
  <span class="sub_menu_li" style="background-color: #4169E1;"><a href="bacprosen.php" class="sub_menu_li" style="background-color: #4169E1;color:white">BAC Pro. SEN</a></span>
  <span class="sub_menu_li"><a href="bacsti2d.php" class="sub_menu_li">BAC STi2D</a></span>
  <span class="sub_menu_li"><a href="btssn.php" class="sub_menu_li">BTS SN</a></span>
  <span class="sub_menu_li"><a href="reussite.php" class="sub_menu_li">Taux de réussite</a></span>
</div>
<div>
  <br />
  <br />
  <br />
  <div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
    <h2>Bac Pro. Systèmes Numériques</h2>
    <img src="img/sen06_03.jpg" style="padding: 20px;width: 350px;height: 250px;">
    <div style="text-align: left;padding: 20px;font-size: 18px">
      Le/la titulaire du baccalauréat professionnel SYSTÈMES NUMÉRIQUES SN)est un(e) technicien(ne) capable d'intervenir sur les équipements et les installations exploités et organisés sous forme de systèmes interconnectés, communicants et convergents, de technologie numérique, des secteurs grands publics, professionnels et industriels.<br>
      Il/elle intervient sur le réseau d'énergie dans la limite de ses compétences et participe au service client en complémentarité des services commerciaux.<br> Le baccalauréat professionnel SN aborde, dans ses trois options, l'ensemble des compétences professionnelles permettant au technicien d'exercer les activités liées à la préparation, l'installation, la réalisation, la mise en service et la maintenance préventive, corrective et curative (diagnostic, dépannage et réparation).<br><br>
      <div style="text-align: center;"><img src="img/bacpro_spe.png" style="height: 400px;width: 400px;"></div><br>
      Les specialités disponibles à l'EME sont : Alarme Sécurité Incendie, Audiovisuel, Reseau <strong>A Modifié</strong><br><br>
      Les élèves pourront approfondir l'un de ces trois champs d'applications, l'EME leur propose de choisir parmi les deux suivants :<br><br>
      <li style="margin-left: 50px;">AUDIOVISUELS, RÉSEAU ET ÉQUIPEMENT DOMESTIQUES - ARED: Audiovisuel multimédia, électrodomestique, domotique liée au confort et à la gestion des énergies, éclairage et sonorisation. ...</li>
      <li style="margin-left: 50px;">RÉSEAUX INFORMATIQUES ET SYSTÈMES COMMUNICANTS - RISC: Télécommunications et réseaux, électronique industrielle et embarquée _exemples : Objets autonomes et communicants, Géolocalisation, systèmes de téléphonie mobile, identifications, contrôle d'accès...)</li><br>
      Les titulaires du BAC Pro SN peuvent après examen de leur dossier être admis en première année de <strong><a href="btssn.php" style="text-decoration:none;">BTS SN</a></strong>.
    </div>
  </div>
</div>
</body>
</html>