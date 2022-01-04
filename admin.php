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
    </section>
    
    <section class="card-section">   
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
    <?php
    include('view/footer.php');
        } else{

        }
    } else{
    ?>
    <section>
        Salut
    </section>
    <?php
    }
    ?>
    
</body>
</html>