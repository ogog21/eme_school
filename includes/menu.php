<div style="background-color:white;position: fixed;width: 100%;height:110px;top:0px;display: inline;left: 0px;"></div>
<div id="header_img">
	<a href="index.php"><img src="img/logo.jpg" id='logo'></a>
	<div><img src="img/defil.gif" id="gif"></div>
	<a href="https://www.ecoledirecte.com/login" target="_blank"><img src="img/ecole_directe.png" id="ecole_directe"></a>
	<a href="http://fr-fr.facebook.com/pages/EME-Ecole-Modèle-dElectronique-Officiel/250672701618104?sk=wall" target="_blank"><img src="img/fb.png" id='fb'></a>
	<a href="https://www.certificat-voltaire.fr" target="_blank"><img src="img/voltaire.png" id='voltaire'></a>
</div>
<div id="menu_ul">
	<span class="menu_li"><a href="index.php" class="menu_li">Accueil</a></span>
	<span class="menu_li"><a href="presentation.php" class="menu_li">Présentation</a></span>
	<span class="menu_li"><a href="formations.php" class="menu_li">Formations</a></span>
	<span class="menu_li"><a href="vie_scolaire.php" class="menu_li">Vie Scolaire</a></span>
	<span class="menu_li"><a href="activites_extra_scolaires.php"  class="menu_li">Activités Extra-Scolaires</a></span>
	<span style="float:right" class="menu_li"><?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])){?><a href="deconnexion.php" class="menu_li">Bonjour <strong style="color:red"><?= $_SESSION['identifiant'];?></strong> -> [Se Déconnecter]</a><?php }else{ ?><a href="login.php" class="menu_li"><img src="img/sing_in.png" id="sing_in">S'identifier</a><?php } ?></span>
</div>
<a href="mailto:contact@emenseignement.fr" id='contact'><img src="img/contact.png" style="width: 15px;height: 15px;"> Envoyer eMail</a>