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
         header("LOCATION:works.php");
     }
     require "../connexion.php";
 
     // récup les données qui corresponde à l'id
     $id = htmlspecialchars($_GET['id']);
 
 
     $req = $bdd->prepare("SELECT * FROM works WHERE id=?");
     $req->execute([$id]);
     // tester s'il existe dans la bdd
     if(!$don = $req->fetch())
     {
         $req->closeCursor();
         header("LOCATION:works.php");
     }
     $req->closeCursor();


     if(isset($_GET['del']))
     {
         unlink("../upload/".$don['image']);
         if(!empty($don['pdf']))
         {
             unlink("../upload/".$don['file']);
         }
         $delete = $bdd->prepare("DELETE FROM works WHERE id=?");
         $delete->execute([$id]);
         $delete->closeCursor();
         header("LOCATION:works.php?delete=success&id=".$id);
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Administration</title>
</head>
<body>
<div class="container-fluid">
    <h1>Administration de mon portfolio</h1>
    <h3>Bonjour <?php echo $_SESSION['login'] ?></h3>
    <a href="dashboard.php?deco=ok" class="btn btn-danger my-1">Déconnexion</a>
    <div class="row">
        <div class="col-4">
            <a href="works.php" class="btn btn-secondary my-1">Retour</a><br>
        </div>
    </div>
</div>
<div class="container">
     <div class="info-artwork">
        <img src="../upload/<?= $don['image'] ?>" alt="image de <?= $don['title'] ?>">
     </div>
    <div class="info-artwork">
     <span class="label-artwork">Projet: </span>
     <span class="value-artwork"><?= $don['title'] ?></span>
    </div>
    <div class="info-artwork">
     <span class="label-artwork">Année: </span>
     <span class="value-artwork"><?= $don['date'] ?></span>
    </div>

    <div class="info-artwork">
     <span class="label-artwork">Categorie: </span>
     <span class="value-artwork"><?= $don['category'] ?></span>
    </div>

    <div class="info-artwork">
     <span class="label-artwork">Description: </span><br>
     <span class="value-artwork"><?= nl2br($don['description']) ?></span>
    </div>

    <div class="info-artwork">
     <span class="label-artwork">Technique(s): </span><br>
     <span class="value-artwork"><?= nl2br($don['technic']) ?></span>
    </div>
    <?php
        if(!empty($don['file']))
        {
            echo ' <span class="label-artwork">Document: </span>';
            echo "<a href='../upload/".$don['file']."'>Cliquez pour ouvrir le document</a>";
        }
    ?>

    

    <h2>Voulez-vous supprimer "<?= $don['title'] ?>" ?</h2>
    <a href="works.php" class="btn btn-success mx-2">Non</a>
    <a href="deleteWorks.php?id=<?= $don['id'] ?>&del=ok" class="btn btn-danger mx-2">Oui</a>
    
</div>

</body>
</html>