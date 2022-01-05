<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Odin Core - A Propos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500&display=swap');
    </style>
</head>
<body class="white">

    <?php
    include('view/header.php');
    ?>
    <section class="burger_container">
        <i class="fas fa-times burger_cross"></i>
        <a href="index.html">A propos</a>
        <a href="faq.html">F.A.Q</a>
        <a href="contact.php">Contact</a>
    </section>

    <section class="background-container">
        <div class="title-logo">
            <h2>ODIN</h2>
            <img src="img/logo.png" alt="Logo Odin Core">
            <h2>CORE</h2>
        </div>
        <div class="studio">
            <h3>Studio de développement</h3>
        </div>
    </section>

    <div class="buffer"></div>

    <section class="project-intro">
        <img src="img/logo_odin_core_black.png" alt="odin_logo">
        <h1>NOS REALISATIONS</h1>
        <p>Nos projets nous ont menés dans des univers et des secteurs très différents dont voici quelques éléments</p>
    </section>

    <div class="buffer"></div>

    <section class="project">

        <div>
            <div>
                <img src="img/givenchy_logo.png" alt="">
                <h1>DAHLIA DIVIN</h1>
                <p>Présentation du parfum Dahlia Divin sous la forme d’un site evenementiel dédié. La difficulté la plus importante a été de gérer un effet de parallax vertical sur ordinateur et horizontal sur mobile et tablette. </p></div>
            <div>
                <h1>Notre solution</h1>
                <p>Technique utilisée: CMS et javascript</p>
                <p>Spécifications: <br>
                -Slider d’images <br>
                -Système de parallax horizontal/ vertical<br>
                -Système d’animation d’éléments web<br>
                -Sécurisation du site</p>
            </div>
        </div>
        <div>
            <img src="img/givenchy_img.png" alt="">
        </div>

    </section>

    <div class="buffer"></div>

<section class="project reverse">

    <div>
        <div>
            <img src="img/studio_canal_logo.png" alt="">
            <h1>STUDIO CANAL</h1>
            <p>Application de vente de Video on Demand Studio Canal. Le but du projet est de permettre aux gens de pouvoir voir les films acheter en blu-ray et dvd sur une appli iPad. Nous avons participé à la création de  l’application et du webservice qui se trouve derrière.

 </p></div>
        <div>
            <h1>Notre solution</h1>
            <p>Technique utilisée: Application Native iOS</p>
            <p>Spécifications: 
            -Slider d’images et de textes<br>
            -Système de recherche<br>
            -Système de video on demand<br>
            -Téléchargement de film<br>
            -Sécurisation des transferts et protection contre piratage.
            </p>
        </div>
    </div>
    <div>
        <img src="img/studio_canal_pres.png" alt="">
    </div>

</section>


<div class="buffer"></div>

<section class="project">

    <div>
        <div>
            <img src="img/hd_vison_logo.png" alt="">
            <h1>HD VISION</h1>
            <p>Application HD Vision permettant au magazine de me endigital publishing tous ses numéros et de les classer.</p></div>
        <div>
            <h1>Notre solution</h1>
            <p>Technique utilisée: Application Native iOS</p>
            <p>Spécifications:<br> 
            -Slider de chapitrage<br> 
            -Système de vision avant/ après par curseur<br> 
            -Système d’implémentation vidéo<br> 
            -Système d’implémentation et mise en page magazine.

            </p>
        </div>
    </div>
    <div>
        <img src="img/hd_vison_pr.png" alt="">
    </div>

</section>


<div class="buffer"></div>

<section class="project reverse">

    <div>
        <div>
            <h1>PARIS VILLE LUMIERE</h1>
            <p>Application permettant aux touristes de se promener et d’admirer Paris au travers d’une collection de photographies d’exception. La disponibilité d’une carte 3D permettant de localiser ces monuments est un grand plus de l’application.</p></div>
        <div>
            <h1>Notre solution</h1>
            <p>Technique utilisée: Application Native iOS</p>
            <p>Spécifications:<br> 
            -Localisation des monuments sur carte 3D<br> 
            -Slider photo<br> 
            -Géolocalisation sur carte 2D<br> 
            -Navigation simplifié par outils d’orientation<br> 
            </p>
        </div>
    </div>
    <div>
        <img src="img/paris_pr.png" alt="">
    </div>

</section>



    <?php
    include('view/footer.php');
    ?>
    
</body>
<script src="js/main.js"></script>
</html>