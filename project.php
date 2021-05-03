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
    <script>
        window.addEventListener("load",()=>{

            /*menu principal */
            const burger=document.querySelector(".menuBurger")
            const menu=document.querySelector("#slideMenu")
            console.log("menu")
            burger.addEventListener("click",()=>{
                menu.classList.toggle("menuON");
            })
            const croix = document.querySelector(".croix")
            croix.addEventListener("click",()=>{
                menu.classList.remove("menuON");
            })

            const linksh = document.querySelectorAll(".haut-tit")
            const links = document.querySelectorAll(".sous-tit")
           
            linksh.forEach(link => {
                link.addEventListener('click',()=>{
                    menu.classList.remove("menuON");
                })
            })
            links.forEach(link => {
                link.addEventListener('click',()=>{
                    menu.classList.remove("menuON");
                })
            })
        })
    </script>
</head>
<body>
<nav id="principal">
            <div class="logo"><a href="index.php"><img src="images/logoMenu.png" alt=""></a></div>
            <ul>
                    <li><a href="index.php"><div class="haut-titre">Welcome</div><div class="sous-titre">ACCUEIL</div></a></li>
                    <li><a href="index.php#slide2"><div class="haut-titre">About me</div><div class="sous-titre">À PROPOS</div></a></li>
                    
                    <li><a href="index.php#slide3"><div class="haut-titre">See my work</div><div class="sous-titre">PORTFOLIO</div></a></li>
                    <li><a href="index.php#slide4"><div class="haut-titre">Get in touch</div><div class="sous-titre">CONTACT</div></a></li>
                
            </ul>
            <div class="menuBurger">
                <div class="barre"></div>
                <div class="barre"></div>
                <div class="barre"></div>
            </div>
        
    </nav>
    <div class="slide" id="slideMenu">
        <div class="haut">
            <div class="logoResp"><img src="images/logo.png" alt="logo"></div>
            <div class="croix">
                <div class="barre" id="barre1"></div>
                <div class="barre" id="barre2"></div>
            </div>
        </div>

        <nav id="responsive">
            <ul class="menuResp">
                <li>
                    <a href="index.php"><div class="haut-tit">Welcome</div><div class="sous-tit">ACCUEIL</div></a>
                </li>
                <li>
                    <a href="index.php#slide2"><div class="haut-tit">About me</div><div class="sous-tit">À PROPOS</div></a>
                </li>
                <li>
                    <a href="index.php#slide3"><div class="haut-tit">See my work</div><div class="sous-tit">PORTFOLIO</div></a>
                </li>
                <li>
                    <a href="index.php#slide4"><div class="haut-tit">Get in touch</div><div class="sous-tit">CONTACT</div></a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="slide" id="projectPage">
    <div class="container" id="work" style="text-align: left;">
        
        <div>Titre: <h1><?= $don['title'] ?></h1></div>
        <div><b>Date: </b><?= $don['date'] ?></div>
        <div><b>Techniques: </b><?= $don['technic'] ?></div>
        <div><b>Description: </b><?= nl2br($don['description']) ?></div>
        <div class="wrapper"><a href="upload/<?= $don['image'] ?>" ><img style="width:70%; margin-0;"id="imageWork" src="upload/<?= $don['image'] ?>" alt="image de <?= $don['title'] ?>"></a></div>

        <p id="click">Cliquez sur la photo pour l'agrandir</p>

        <div class="btn btn-danger col-4" style="margin-top: 40px;"><a style= "text-decoration:none; color:white;" href="index.php#slide3">Retour </a></div>

        
    </div>
</div>
</body>
</html>