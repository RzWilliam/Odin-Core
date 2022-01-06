<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="img/logo.png">
    <title>Connexion</title>
</head>
<body class="white">
    <?php
    include('view/header.php');
    ?>

    <section class="login-background-container">
        <div class="text">
            <h1>Connexion</h1>
            <form method="POST" class="formconnexion">
		    <input type="text" name="pseudo" placeholder="Pseudo" autocomplete="off" required="required" class="pseudo">
			<br>
			<input type="password" name="mdp" placeholder="Mot de passe" autocomplete="off" required="required" class="password">
			<br>
			<input type="submit" name="submit" value="Se connecter" class="submit">
		</form>
        

    <?php 
    include('view/bdd.php');
    
    if(isset($_POST['pseudo'])){

        $_POST['pseudo'] = addslashes($_POST['pseudo']);
        $_POST['mdp'] = addslashes($_POST['mdp']);
        $pseudo = $_POST['pseudo'];

        //  Récupération de l'utilisateur et de son pass hashé
        $req = $bdd->prepare("SELECT id, mdp, role FROM admin WHERE pseudo = :pseudo");
        $req->execute(array(
            'pseudo' => $pseudo));
        $resultat = $req->fetch(); /*Cela retourne ici, le mot de passe haché (un exemple) présent dans la base de donnée*/

        $pseudo = $_POST['pseudo'];
        $verif = $bdd->prepare("SELECT * FROM admin WHERE pseudo=?");
        $verif->execute([$pseudo]); 
        $utilisateur = $verif->fetch(); /*ça verifie que le pseudo rentrer correspond à l'utilisateur*/
        
        if($utilisateur){
            $checkpassword = password_verify($_POST['mdp'], $resultat['mdp']); 	
        }

        if (isset($checkpassword)) {
            if($checkpassword){
                if(isset($_SESSION['id'])){
                    session_destroy();
                }
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['role'] = $resultat['role'];
                echo '<script type="text/javascript">document.location.replace("admin.php")</script>';
            }else {
            echo '<p class="wrong">Mauvais identifiant ou mot de passe !</p>';
        }
        }
        else {
            echo '<p class="wrong">Mauvais identifiant ou mot de passe !</p>';
        }
    }
    
    ?>
        </div>   
    </section>    
</body>
<script src="js/main.js"></script>
</html>