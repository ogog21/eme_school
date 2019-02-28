<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=eme_school;charset=utf8','root','password');
?>
<!DOCTYPE html>
<html>
<head>
	<title>EME - Enseignement</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/accueil.css">
</head>
<body>
<?php
	include 'includes/menu.php';
?>
<div>
	<br />
	<br />
	<br />
	<div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 2%;margin-top:90px;float: left;box-shadow: 1px 1px 10px;">
		<h2>Accueil</h2>
		<img src="img/intro.jpg" style="padding: 20px;width: 700px;height: 600px;">
	</div>
	<div class="coordonnes">
		<h2 style="text-align: center;">Coordonnées</h2>
		<p class="text">
			<img src="img/tel.png" class="ico_coord"> 04 91 44 65 37<br>
			<img src="img/fax.jpg" class="ico_coord"> 04 91 89 23 82<br>
			<img src="img/email.png" class="ico_coord"> <a href="mailto:contact@eme-enseignement.fr" style="text-decoration:none;"><strong>contact@eme-enseignement.fr</strong></a><br>
			<img src="img/lieu.png" class="ico_coord"> <a href="https://goo.gl/maps/sa7icFkdV3N2" target="_blank">233, Bd Saint Marcel 13011 Marseille</a><br><br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.324412229667!2d5.4661320154858855!3d43.28652747913562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bea56868b8e5%3A0xa2253d666f858242!2s233+Boulevard+de+Saint-Marcel%2C+13011+Marseille!5e0!3m2!1sfr!2sfr!4v1551308816037" width="300" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
		</p>
	</div>
</div>
</body>
</html>