<?php
    
    if(!isset($_GET['id']))
    {
        header("LOCATION:index.php");
    }else{
        $id=htmlspecialchars($_GET['id']);
    }

    require 'connexion.php';

    $req = $bdd->prepare('SELECT * FROM works WHERE id=?');
    $req->execute([$id]);
    if(!$don=$req->fetch())
    {
        $req->closeCursor();
        header("LOCATION:index.php");
    }

    $req->closeCursor();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    
</head>
<body>


    <div class="slide" id="projectPage">
    <div class="container" id="work" style="text-align: center;">
        
        <div>Titre: <h1><?= $don['title'] ?></h1></div>
        <div><b>Date: </b><?= $don['date'] ?></div>
        <div><b>Techniques: </b><?= $don['technic'] ?></div>
        <div><b>Description: </b><?= nl2br($don['description']) ?></div>
        <div class="wrapper" style="width:80vw; margin:0;" ><a href="upload/<?= $don['image'] ?>" ><img style="width:70%; margin-0;"id="imageWork" src="upload/<?= $don['image'] ?>" alt="image de <?= $don['title'] ?>"></a></div>

        <div class="btn btn-success" style="margin-top: 50px; margin-right:12px;"><a style= "text-decoration:none; color:white;" href="index.php#slide3">Précédent </a></div>

        <div class="btn btn-danger" style="margin-top: 50px;"><a style= "text-decoration:none; color:white;" href="index.php#slide3">Retour </a></div>

        <div class="btn btn-success" style="margin-top: 50px; margin-left:12px;"><a style= "text-decoration:none; color:white;" href="index.php#slide3">Suivant </a></div>
    </div>
</div>
</body>
</html>