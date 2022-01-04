<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Odin Core - Contact</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500&display=swap');
    </style>
</head>
<body class="contacts-body">
    <?php
    include('view/header.php');
    include('view/bdd.php');
    ?>

    <section class="content">

        <section class="contact-part">
            <div class="contact">
                <h2>Odin Core</h2>
                <div class="mail">
                    <img src="img/logo-mail.png" alt="Logo Mail">
                    <p>bastiensaudemont@gmail.com</p>
                </div>
                <div class="phone">
                    <img src="img/logo-phone.png" alt="Logo Phone">
                    <p>06 07 42 42 42</p>
                </div>
                <div class="social">
                    <div>
                        <a href="https://fr.linkedin.com/company/odincore" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <p>LinkedIn</p>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/odincore/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <p>Facebook</p>
                    </div>
                    <div>
                        <a href="https://twitter.com/odincore?lang=fr" target="_blank"><i class="fab fa-twitter"></i></a>
                        <p>Twitter</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="form-part">
            <form action="" method="POST">
                <h2>Nous contacter</h2>
                <input type="text"  placeholder="Nom" name="nom" required autocomplete="off">
                <input type="email" placeholder="E-mail" name="mail" required autocomplete="off">
                <textarea placeholder="Message" name="message" required autocomplete="off"></textarea>
                <button>Envoyer</button>
            </form>
        </section>
        <?php
           if(isset($_POST['nom'])){
                if($_POST['nom']){
                    $_POST['nom'] = addslashes($_POST['nom']);
                    $_POST['mail'] = addslashes($_POST['mail']);
                    $_POST['message'] = addslashes($_POST['message']);

                    $bdd->exec("INSERT INTO contact (name, mail, message) VALUES ('$_POST[nom]', '$_POST[mail]', '$_POST[message]')");
                }
            }    
        ?>
    </section>


<script src="js/main.js"></script>
</body>
</html>