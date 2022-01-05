<?php
include('view/bdd.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="img/logo.png">
    <title><?php if(isset($_SESSION['pseudo'])){if($_SESSION['pseudo'] == 'Bastien'){echo 'Admin';}else{echo '404';}}else{echo '404';} ?></title>
</head>
<body class="white">
    <?php
    include('view/header.php');
    if(isset($_SESSION['pseudo'])){
        if($_SESSION['pseudo'] == "Bastien"){

         ?>
    <section class="admin-true-background-container">
            <div class="text">
                <h1>Admin</h1>
            </div>
            <section class="choice">
                <div class="select contact active" data-content='contact'>
                    Contact
                </div>
                <div class="select project hide" data-content="project">
                    Projets
                </div>
            </section>   
    </section>
    
    <section class="selected contact-section show" data-content="contact">   
    <?php 
    $request = $bdd->query('SELECT * FROM contact ORDER BY id DESC');
    while ($listemessage = $request->fetch()){
        $id= $listemessage['id'];
    ?>
    <div class="card-container">
        <img src="img/new-drakkar.png" alt="Drakkar" class="drakkar">
        <div class="card">
            <div class="filter">
                <h3><?php echo $listemessage['name']?></h3>
                <h4><?php echo $listemessage['mail']?></h4>
                <p><?php echo $listemessage['message']?></p>
                <form method="POST" class="delete" action="<?php echo '?id='.$listemessage['id'].''?>">
                    <input type="submit" name="delete" class="deletemessage" value="X">
                </form>
            </div>
        </div>
    </div>
    
    <?php 
    }  
    if(isset($_POST['delete'])){
        if($_POST['delete'])
        $bdd->exec("DELETE FROM contact WHERE id = '$_GET[id]'");
        echo '<script type="text/javascript">document.location.replace("admin.php")</script>';
    }  
    ?>
    </section>
    <section class="selected project-section hide" data-content="project">
        <h2>Ajouter un projet :</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" name="brand" placeholder="Nom de la marque" autocomplete="off" required>
            <br>
            <label for="image">Logo :</label>
            <br>
            <input type="file" name="image" required accept="image/png, image/jpg, image/jpeg" class="file">
            <br>
            <input type="text" placeholder="Nom Logo" name="image_title" required>
            <br>
            <textarea name="description" id="" cols="30" rows="10" autocomplete="off" required placeholder="Description"></textarea>
            <br>
            <textarea name="soluce" id="" cols="30" rows="10" autocomplete="off" required placeholder="Solutions apportées (saut à la ligne pris en compte)"></textarea>
            <br>
            <label for="project_image">Image mise en avant :</label>
            <br>
            <input type="file" name="project_image" required accept="image/png, image/jpg, image/jpeg" class="file">
            <br>
            <input type="text" placeholder="Nom Image" name="project_image_title" required>
            <br>
            <input type="submit" placeholder="Soummette" name="submit" class="submitproject">
        </form>
    </section>
    <?php
    include('view/footer.php');
        } else{?>
        <section class="admin-false-background-container">
            <div class="text">
                <h1>Introuvable</h1>
            </div>
        </section>
        <?php
        }
    } else{
    ?>
    <section class="admin-false-background-container">
        <div class="text">
            <h1>Introuvable</h1>
        </div>
    </section>
    <?php
    }
    ?>
    
</body>
<script src="js/main.js"></script>
</html>