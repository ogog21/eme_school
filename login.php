<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=eme_school;charset=utf8','root','password');
?>
<!DOCTYPE html>
<html>
<head>
    <title>EME - Authentification</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div id="main">
        <h1>Page de Connexion</h1>
        <hr>
        <form action="" method="POST" id="formulaire">
            <label><p class="champs-nom">Identifiant :</p><input type="text" name="identifiant" class="champs-texte"></label>
            <label><p class="champs-nom">Mot de passe :</p><input type="password" name="motdepasse" class="champs-texte"></label>
            <br />
        <?php
            if(isset($_POST['identifiant'],$_POST['motdepasse'])){
                if(!empty($_POST['identifiant']) AND !empty($_POST['motdepasse'])){

                    $identifiant = htmlspecialchars($_POST['identifiant']);
                    $motdepasse = htmlspecialchars($_POST['motdepasse']);

                    $req = $bdd->prepare("SELECT id,identifiant,motdepasse FROM compte WHERE identifiant = ?");
                    $req->execute(array($identifiant));

                    $compte = $req->fetch();

                    if($compte){

                        $isCorrectPassword = password_verify($motdepasse,$compte['motdepasse']);

                        if($isCorrectPassword){
                            
                            $_SESSION['id'] = $compte['id'];
                            $_SESSION['identifiant'] = $compte['identifiant'];
                            echo '<br>Bienvenue : '.$_SESSION['identifiant'].'<br>';
                            echo "<a href='index.php'>Retourner sur le site</a>";

                        }else{
                            echo 'Mauvais mot de passe ou identifiant.';
                        }
                    }else{
                        echo 'Mauvais mot de passe ou identifiant.';
                    }

                }else{
                    echo 'Remplir tous les champs.';
                }
            }if(isset($_GET['deco'])){
                echo 'Deco';
            }
        ?>
            <input type="submit" value="Connexion" id="connexion">
        </form>
    </div>
</body>
</html>