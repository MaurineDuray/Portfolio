<?php
    require "connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duray Maurine Portfolio</title>
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

           

            /* menu travaux*/

            const fermer =document.querySelector(".fermer")
            const menuTrvx = document.querySelector(".menuTrvxResp")
            const menuTri = document.querySelector(".menutrier")
            menuTri.addEventListener("click",()=>{
                menuTrvx.classList.add("menuOpen")
            })
            fermer.addEventListener("click",()=>{
                menuTrvx.classList.remove("menuOpen")
            })

            
            const items = document.querySelectorAll(".item")
            
            items.forEach(item => {
                item.addEventListener('click',()=>{
                    menuTrvx.classList.remove("menuOpen")
                })
            })
            

        })
    </script>
</head>
<body>

<nav id="principal">
            <div class="logo"><a href="index.html"><img src="images/logoMenu.png" alt=""></a></div>
            <ul>
                    <li><a href="index.php"><div class="haut-titre">Welcome</div><div class="sous-titre">ACCUEIL</div></a></li>
                    <li><a href="#index.phpslide2"><div class="haut-titre">About me</div><div class="sous-titre">À PROPOS</div></a></li>
                    
                    <li><a href="#index.phpslide3"><div class="haut-titre">See my work</div><div class="sous-titre">PORTFOLIO</div></a></li>
                    <li><a href="#index.phpslide4"><div class="haut-titre">Get in touch</div><div class="sous-titre">CONTACT</div></a></li>
                
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

<div class="slide" id="slide3">
        <!--Menu responsive travaux -->
        <div class="menuTrvxResp">
            <div class="fermer">
                <div class="barre" id="barre1"></div>
                <div class="barre" id="barre2"></div>
            </div>
            <div class="fleurslide3"><img src="images/fleurVerte.png" alt=""></div>
            <nav id="TravauxResp">
                <ul>
                    <li class="col-md-2 "><a class="item" href="#slide3">Dessin et illustration</a></li>
                    <li class="col-md-2 "><a class="item" href="#slide3">Retouches graphiques  </a></li>
                    <li class="col-md-2 "><a class="item" href="#slide3">Dessin vectoriel</a></li>
                    <li class="col-md-2 "><a class="item" href="#slide3">Mise en page PAO</a></li>
                    <li class="col-md-2 "><a class="item" href="#slide3">Web - WebDesign</a></li>
                    <li class="col-md-2 "><a class="item" href="#slide3">Animation</a></li>  
                </ul>
            </nav>
        </div>
        <!-- fin menu travaux-->

        <div class="fleurslide3"><img src="images/fleurVerte.png" alt=""></div>
        <div class="container galerie">
        <h2>PORTFOLIO</h2>
        <h4>See my work</h4>
        <div class="menuTravx">
            <nav id="Travaux">
                <ul>
                    <div class="row g-0 justify-content-evently">
                        <li class="col-2 md-0"><a href="#slide3">Dessin et illustration</a></li>
                        <li class="col-2"><a href="#slide3">Retouches graphiques  </a></li>
                        <li class="col-2"><a href="#slide3">Dessin vectoriel</a></li>
                        <li class="col-2"><a href="#slide3">Mise en page PAO</a></li>
                        <li class="col-2"><a href="#slide3">Web - WebDesign</a></li>
                        <li class="col-2"><a href="#slide3">Animation</a></li>  
                    </div>  
                
                </ul>
            </nav>
            <div class="menutrier">
                    
                    <div class="ligne">
                        <div class="point"></div>
                        <div class="point"></div>
                        <div class="point"></div>
                    </div>
                    <div class="ligne">
                        <div class="point"></div>
                        <div class="point"></div>
                        <div class="point"></div>
                    </div>
                    <div class="ligne">
                        <div class="point"></div>
                        <div class="point"></div>
                        <div class="point"></div>
                    </div>
                    <p>Trier</p>
                </div>
        </div>
            <div class="container overflow-hidden">
                <div class="row g-3">

                <?php
                        $works = $bdd -> query("SELECT * FROM works ");
                        while($donWorks = $works ->fetch()){
                            echo '<div class="col-md-4" >';
                            echo '<div class="cadre" style="display: flex;
                            justify-content: center; background-image: url(upload/'.$donWorks['image'].'); background-position: center center; background-size: contain; background-repeat:no-repeat; background-color: rgb(240, 240, 240)">';  
                                echo '</div>';
                            echo '</div>';

  
                        }
                    ?>
                    
                </div>
                 <a id="retourGalerie" style="padding-bottom: 20px" href="index.php#slide3">Retour</a>
              </div>
           
       
    </div> 
       
    </div>
</body>
</html>