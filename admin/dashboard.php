<?php
    session_start();
    // si la session n'existe pas, redirection vers formulaire
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:index.php");
    }

    if(isset($_GET['deco']))
    {
        session_destroy();
        header("LOCATION:index.php");
    }


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Administration</title>
</head>
<body>
    <div class="fleur">
        <img src="../images/fleurVerte.png" alt="">
    </div>
<div class="container-fluid" id="dashboard">
    <h1>Administration</h1>
    <h3>Bonjour <i><?php echo $_SESSION['login'] ?></i></h3>
    <a href="dashboard.php?deco=ok" class="btn btn-danger my-1">Déconnexion</a>
    <a href="../index.php" class="btn btn-success my-1">Retour au site</a>
    <div class="row">
        <div class="col-12">
            <a href="message.php">Boîte de réception</a><br>
            <a href="works.php">Gestion des travaux</a><br>
            <a href="admin.php">Gestion des administrateurs</a><br>
            <a href="skills.php">Gestion des compétences</a>
        </div>
    </div>

</div>
    

</body>
</html>