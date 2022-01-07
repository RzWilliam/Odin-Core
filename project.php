<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Odin Core - Projets</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500&display=swap');
    </style>
</head>
<body class="white projets-body">

    <?php
    include('view/header.php');
    include ('view/bdd.php');
    ?>

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

    <?php
    $projects = $bdd->query("SELECT * FROM project ORDER BY id ASC");
    while($project = $projects->fetch()){
        ?>
    <section class="project">
    <div>
        <div>
            <img src="<?php echo $project['img']?>" alt="<?php echo $project['image_title']?>">
            <h2><?php echo $project['brand']?></h1>
            <p><?php echo $project ['description']?></p></div>
        <div>
            <h3>Notre solution</h1>
            <p><?php echo nl2br($project['soluce'])?></p>
        </div>
    </div>
    <div>
    <img src="<?php echo $project['project_image']?>" alt="<?php echo $project['project_image_title']?>">
    </div>

    </section>
    <?php
    }
    include('view/footer.php');
    ?>
    
</body>
<script src="js/main.js"></script>
</html>