<?php
    session_start();
    // si la session n'existe pas, redirection vers formulaire
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:index.php");
    }
    // connexion à la BDD
    require "../connexion.php";


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
        <div class="col-12">
            <a href="dashboard.php" class="btn btn-secondary my-1">Retour</a><br>
            <a href="addWorks.php" class="btn btn-success my-1">Ajouter un projet</a>
        </div>
    </div>
</div>
<div class="container">
        <?php
            if(isset($_GET['add']))
            {
                echo "<div class='alert alert-success'>Votre oeuvre a bien été enregistrée</div>"; 
            }
            if(isset($_GET['delete']))
            {
                echo "<div class='alert alert-danger'>L'oeuvre id : ".$_GET['id']." a bien été supprimée</div>"; 
            }
            if(isset($_GET['update']))
            {
                echo "<div class='alert alert-warning'>L'oeuvre id : ".$_GET['id']." a bien été modifiée</div>"; 
            }
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class='text-center'>Id</th>
                    <th class='text-center'>Titre</th>
                    <th class='text-center'>Date</th>
                    <th class='text-center'>Catégorie</th>
                    <th class="text-center">Description</th>
                    <th class='text-center'>Techniques</th>
                    <th class='text-center'>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $req = $bdd->query("SELECT * FROM works");
                    while($don = $req->fetch())
                    {
                        echo "<tr>";
                            echo "<td class='text-center'>".$don['id']."</td>";
                            echo "<td class='text-center'>".$don['title']."</td>";
                            echo "<td class='text-center'>".$don['date']."</td>";
                            echo "<td class='text-center'>".$don['category']."</td>";
                            echo "<td class='text-center'>".$don['description']."</td>";
                            echo "<td class='text-center'>".$don['technic']."</td>";
                            
                            echo "<td class='text-center'>";
                                
                                echo "<a href='updateWorks.php?id=".$don['id']."' class='btn btn-warning mx-2'>Modifier</a>";
                                echo "<br>";
                                echo "<a href='deleteWorks.php?id=".$don['id']."' class='btn btn-danger mx-2'>Supprimer</a>";
                            echo "</td>";
                        echo "</tr>";
                    }
                    $req->closeCursor();
                ?>
            </tbody>
        </table>
</div>

</body>
</html>