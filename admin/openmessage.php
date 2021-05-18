<?php
    session_start();
    // si la session n'existe pas, redirection vers formulaire
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:index.php");
    }

     // tester si il y a le get id dans l'URL
     if(!isset($_GET['id']))
     {
         header("LOCATION:message.php");
     }
     require "../connexion.php";
 
     // récup les données qui corresponde à l'id
     $id = htmlspecialchars($_GET['id']);
 
 
     $req = $bdd->prepare("SELECT * FROM contact WHERE id=?");
     $req->execute([$id]);
     // tester s'il existe dans la bdd
     if(!$don = $req->fetch())
     {
         $req->closeCursor();
         header("LOCATION:contact.php");
     }
     $req->closeCursor();


     

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Administration</title>
</head>
<body>
<div class="container-fluid">
    <h1>Administration de mon portfolio</h1>

    <h3>Bonjour <?php echo $_SESSION['login'] ?></h3>
    <a href="dashboard.php?deco=ok" class="btn btn-danger my-1">Déconnexion</a>
    <div class="row">
        <div class="col-4">
            <a href="message.php" class="btn btn-secondary my-1">Retour</a><br>
        </div>
    </div>
</div>
<div class="container">
     
    <div class="info-message">
     <span class="label-message">Nom: </span>
     <span class="value-message"><?= $don['name'] ?></span>
    </div>

    <div class="info-message">
     <span class="label-message">Email: </span>
     <span class="value-message"><?= $don['email'] ?></span>
    </div>

    <div class="info-message">
     <span class="label-message">Subject: </span>
     <span class="value-message"><?= $don['subject'] ?></span>
    </div>

    <div class="info-message">
     <span class="label-message">Message: </span>
     <span class="value-message"><?= $don['message'] ?></span>
    </div>

   
    <a href="message.php" class="btn btn-success mx-2">Retour</a>
    <a href='https://outlook.live.com/owa/' class='btn btn-warning mx-2'>Répondre</a>
    
    
</div>

</body>
</html>