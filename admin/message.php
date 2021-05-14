<?php
    session_start();
    // si la session n'existe pas, redirection vers formulaire
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:index.php");
    }
    // connexion à la BDD
    // vider SESSION errorAddUser
    unset($_SESSION['errorAddMessage']); // unset détruit une variable
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
    <h4>Boîte de réception</h4>
    <h3>Bonjour <?php echo $_SESSION['login'] ?></h3>
    <a href="dashboard.php?deco=ok" class="btn btn-danger my-1">Déconnexion</a>
    <div class="row">
        <div class="col-12">
            <a href="dashboard.php" class="btn btn-secondary my-1">Retour</a><br>
            
        </div>
    </div>
</div>

<div class="container">
        <?php
            if(isset($_GET['add']))
            {
                echo "<div class='alert alert-success'>Le message a bien été enregistré</div>"; 
            }
            if(isset($_GET['delete']))
            {
                echo "<div class='alert alert-danger'>Le message id : ".$_GET['id']." a bien été supprimé</div>"; 
            }
            if(isset($_GET['update']))
            {
                echo "<div class='alert alert-warning'>Le message id : ".$_GET['id']." a bien été modifié</div>"; 
            }
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class='text-center'>id</th>
                    <th class='text-center'>Nom</th>
                    <th class='text-center'>E-Mail</th>
                    <th class='text-center'>Sujet</th>
                    <th class='text-center'>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $req = $bdd->query("SELECT * FROM contact");
                    while($don = $req->fetch())
                    {
                        echo "<tr>";
                            echo "<td class='text-center'>".$don['id']."</td>";
                            echo "<td class='text-center'>".$don['name']."</td>";
                            echo "<td class='text-center'>".$don['email']."</td>";
                            echo "<td class='text-center'>".$don['subject']."</td>";
                            echo "<td class='text-center'>";
                            
                                echo "<a href='openmessage.php?id=".$don['id']."' class='btn btn-success mx-2'>Ouvrir</a>";
                                echo "<a href='https://outlook.live.com/owa/' class='btn btn-warning mx-2'>Répondre</a>";
                                echo "<a href='deleteMessage.php?id=".$don['id']."' class='btn btn-danger mx-2'>Supprimer</a>";
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