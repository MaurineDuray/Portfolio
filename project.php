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

    <div class="demipage">
        
    </div>

    <div class="slide " id="projectPage">
        <div class="row">
            <div class="projetGauche container col-md-7">
                <a href="upload/<?= $don['image'] ?>" ><img class=" col-12"style="width:80%; margin-0;"id="imageWork" src="upload/<?= $don['image'] ?>" alt="image de <?= $don['title'] ?>"></a><br>
                <p>Cliquez sur la photo pour l'agrandir</p>
            </div>
            <div class="projetDroite container col-md-5" id="work" style="text-align: left;">
                <div class="container-fluid">
                    <div>Titre: <h3><?= $don['title'] ?></h3></div>
                    <div class="line"></div>
                    <div><b>Date: </b><br><p><?= $don['date'] ?></p></div>
                    <div class="line"></div>
                    <div><b>Techniques: </b><br><p><?= $don['technic'] ?></p></div>
                    <div class="line"></div>
                    <div><b>Description: </b><br><p><?= nl2br($don['description']) ?></p></div>
                    
            </div>
                    
                    <?php
                    if(!empty($don['file']))
                    {
                        echo ' <span class="label-artwork">Document: </span>';
                        echo "<a href='upload/".$don['file']."'>Cliquez pour ouvrir le document</a>";
                    }
                ?><br>
                    
                    
                    

                </div>
                <a style= "text-decoration:none; color:white;" href="index.php#slide3"><div id="retour" class="btn btn-dark col-2 offset-9" style="margin-top: 40px;">Retour</div> </a>
        </div>
    </div>
</body>
</html>