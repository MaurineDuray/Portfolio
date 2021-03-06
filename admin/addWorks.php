<?php
    session_start();
    // si la session n'existe pas, redirection vers formulaire
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:index.php");
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
    <h1 class="mb-3">Ajouter un projet</h1>
      <form action="treatmentAddWorks.php" method="POST" enctype="multipart/form-data">
        <?php
            if(isset($_GET['error']))
            {
                echo "<div class='alert alert-danger'>Veuillez remplir le formulaire correctement (code erreur : ".$_GET['error']." )</div>";
            }

            if(isset($_GET['fileerror']))
            {
                echo "<div class='alert alert-danger'>Le fichier envoyé a eu problème (code erreur : ".$_GET['fileerror']." )</div>";
            }

            if(isset($_GET['upload']))
            {
                echo "<div class='alert alert-danger'>Le transfert du fichier a eu problème</div>";
            }
           
        ?>
        <div class="form-group mb-3">
            <label for="title">Titre: </label>
            <input type="text" id="title" name="title" class="form-control" placeholder="Titre de l'oeuvre" required>
        </div>
        <div class="form-group mb-3">
            <label for="date">Date: </label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="category">Catégorie:</label>
            <select name="category" id="category" class="form-control">
                <option value="dessinIllu">Dessin et illustration</option>
                <option value="retoucheGraph">Retouches graphiques</option>
                <option value="dessinVectoriel">Dessin vectoriel</option>
                <option value="pao">Mise en page - PAO</option>
                <option value="web">Web et web design</option>
                <option value="animation">Animation</option>
                <option value="autres">Divers</option>
            </select>
        </div>
        <div class="form-group  mb-3">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Description"></textarea>
        </div>
        <div class="form-group  mb-3">
            <label for="technic">Techniques:</label>
            <textarea name="technic" id="technic" class="form-control" placeholder="Techniques"></textarea>
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile01" name="image">
            <label class="input-group-text" for="inputGroupFile01">Image</label>
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02" name="pdf">
            <label class="input-group-text" for="inputGroupFile02">PDF</label>
        </div>
        <div class="form-group">
            <input type="submit" value="Ajouter" class="btn btn-success">
        </div>
      </form>
</div>

</body>
</html>