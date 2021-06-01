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
            

            
            const navGroup = document.querySelectorAll('#Travaux ul .row li')
            const title = document.querySelector("#titre span")
            
            navGroup.forEach(navi => {
            navi.addEventListener('click',()=>{
                const target = document.querySelector(navi.dataset.id)
                
                const galGroup = document.querySelectorAll(".classgroup")
                galGroup.forEach(group => {
                    group.classList.remove('classopen')
                })
                target.classList.toggle('classopen')
            })
        })

            
            const mobilLink = document.querySelectorAll('.mobil-link')
            
            
            mobilLink.forEach(link=>{
                link.addEventListener('click',()=>{
                    menuTrvx.classList.remove("menuOpen")
                    let galGroup = document.querySelectorAll('.classgroup')
                    let target = document.querySelector(link.dataset.id)
                    galGroup.forEach(groupe => {
                        groupe.classList.remove('classopen')
                       
                    })
                    target.classList.toggle('classopen')
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

    <div class="slide" id="slideGalery">
        <!--Menu responsive travaux -->
        <div class="menuTrvxResp">
            <div class="fermer">
                <div class="barre" id="barre1"></div>
                <div class="barre" id="barre2"></div>
            </div>
           
            <nav id="TravauxResp">
                <ul>
                    <li data-id="#class0" class="col-12 text-center mobil-link" data-title="Travaux récents">Tous les travaux</li>
                    <li data-id="#class1" class="col-12 mobil-link" data-title="Dessin et illustration">Dessin et illustration</li>
                    <li data-id="#class2" class="col-12 mobil-link" data-title="Retouches graphiques">Retouches graphiques</li>
                    <li data-id="#class3" class="col-12 mobil-link" data-title="Dessin vectoriel">Dessin vectoriel</li>
                    <li data-id="#class4" class="col-12 mobil-link" data-title="Mise en page PAO">Mise en page PAO</li>
                    <li data-id="#class5" class="col-12 mobil-link" data-title="Web - WebDesign">Web - WebDesign</li>
                    <li data-id="#class6" class="col-12 mobil-link" data-title="Animation">Animation</li>  
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
                        <li data-id="#class0" class="col-12 text-start p-5"><a href="galerie.php#slide3?cat=tout" class="col-2 g-0 text-center" >Tous les travaux
</a></li>
                        <li data-id="#class1" class="col-2 text-center"><a href="#galerie.php#slide3?cat=tout">Dessin et illustration</a></li>
                        <li data-id="#class2" class="col-2 text-center"><a href="#galerie.php#slide3?cat=retouche">Retouches graphiques  </a></li>
                        <li data-id="#class3" class="col-2 text-center"><a href="#galerie.php#slide3?cat=dessin">Dessin vectoriel</a></li>
                        <li data-id="#class4" class="col-2 text-center"><a href="#galerie.php#slide3?cat=pao">Mise en page PAO</a></li>
                        <li data-id="#class5" class="col-2 text-center"><a href="#galerie.php#slide3?cat=web">Web - WebDesign</a></li>
                        <li data-id="#class6" class="col-2 text-center"><a href="#galerie.php#slide3?cat=anim">Animation</a></li> 
                       
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

        <div id="titre" class="col-12 text-center" style="color:black;font-size : 12pt; background-color: rgba(255, 255, 255, 0.722);">Catégorie choisie: <span>Travaux récents
        </span></div>

        <div  class="container  class-container" >
                <div class="row g-3 classgroup classopen" id="class0" >
                    <?php
                        if(isset($_GET['tout']))
                        {
                             $works = $bdd -> query("SELECT * FROM works  ORDER BY date ");
                        while($donWorks = $works ->fetch()){
                            echo '<div class="col-md-4" >';
                                echo '<a href="project.php?id='.$donWorks["id"].'">';
                                echo '<div class="cadre" style="display: flex; justify-content: center; background-image: url(upload/'.$donWorks["image"].'); background-position: center center; background-size: contain; background-repeat:no-repeat; background-color: rgb(240, 240, 240, 05)">';
                                   
                                echo '</div></a>';
                            echo '</div>';
                        }
                        }
                        
                    ?>
                </div>

                <div class="row g-3 classgroup" id="class1">
                    <?php
                        
                        $works = $bdd -> query ("SELECT * FROM works WHERE category = 'dessinIllu' ORDER BY date ");
                        while($donWorks = $works ->fetch()){
                            
                            echo '<div class="col-md-4" >';
                                echo '<a href="project.php?id='.$donWorks["id"].'">';
                                echo '<div class="cadre" style="display: flex; justify-content: center; background-image: url(upload/'.$donWorks["image"].'); background-position: center center; background-size: contain; background-repeat:no-repeat; background-color: rgb(240, 240, 240, 05)">';
                                   
                                echo '</div></a>';
                            echo '</div>';
                        }
                    ?>
                </div>

                <div class="row g-3 classgroup" id="class2">
                    <?php
                        $works = $bdd -> query("SELECT * FROM works WHERE category = 'retoucheGraph' ORDER BY date ");
                        while($donWorks = $works ->fetch()){
                            echo '<div class="col-md-4" >';
                                echo '<a href="project.php?id='.$donWorks["id"].'">';
                                echo '<div class="cadre" style="display: flex; justify-content: center; background-image: url(upload/'.$donWorks["image"].'); background-position: center center; background-size: contain; background-repeat:no-repeat; background-color: rgb(240, 240, 240, 05)">';
                                   
                                echo '</div></a>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <div class="row g-3 classgroup" id="class3">
                    <?php
                        $works = $bdd -> query("SELECT * FROM works WHERE category = 'dessinVectoriel' ORDER BY date ");
                        while($donWorks = $works ->fetch()){
                            echo '<div class="col-md-4" >';
                                echo '<a href="project.php?id='.$donWorks["id"].'">';
                                echo '<div class="cadre" style="display: flex; justify-content: center; background-image: url(upload/'.$donWorks["image"].'); background-position: center center; background-size: contain; background-repeat:no-repeat; background-color: rgb(240, 240, 240, 05)">';
                                   
                                echo '</div></a>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <div class="row g-3 classgroup" id="class4">
                    <?php
                        $works = $bdd -> query("SELECT * FROM works WHERE category = 'pao' ORDER BY date ");
                        while($donWorks = $works ->fetch()){
                            echo '<div class="col-md-4" >';
                                echo '<a href="project.php?id='.$donWorks["id"].'">';
                                echo '<div class="cadre" style="display: flex; justify-content: center; background-image: url(upload/'.$donWorks["image"].'); background-position: center center; background-size: contain; background-repeat:no-repeat; background-color: rgb(240, 240, 240, 05)">';
                                   
                                echo '</div></a>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <div class="row g-3 classgroup" id="class5">
                    <?php
                        $works = $bdd -> query("SELECT * FROM works WHERE category = 'web' ORDER BY date ");
                        while($donWorks = $works ->fetch()){
                            echo '<div class="col-md-4" >';
                                echo '<a href="project.php?id='.$donWorks["id"].'">';
                                echo '<div class="cadre" style="display: flex; justify-content: center; background-image: url(upload/'.$donWorks["image"].'); background-position: center center; background-size: contain; background-repeat:no-repeat; background-color: rgb(240, 240, 240, 05)">';
                                   
                                echo '</div></a>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <div class="row g-3 galgroup" id="group6">
                    <?php
                        $works = $bdd -> query("SELECT * FROM works WHERE category = 'animation' ORDER BY date ");
                        while($donWorks = $works ->fetch()){
                            echo '<div class="col-md-4" >';
                                echo '<a href="project.php?id='.$donWorks["id"].'">';
                                echo '<div class="cadre" style="display: flex; justify-content: center; background-image: url(upload/'.$donWorks["image"].'); background-position: center center; background-size: contain; background-repeat:no-repeat; background-color: rgb(240, 240, 240, 05)">';
                                   
                                echo '</div></a>';
                            echo '</div>';
                        }
                    ?>
                </div>

                
              </div>
           
        
    </div>
    <a id ="back" href="index.php#slide3"> Retour </a>
    </div>
    
    <footer id="footerGalerie">
        <div class="container">
        <div class="row">
            <div class="log col-md-3">
                <img src="images/logo.png" alt="">
            </div>
            <div class="reseau col-md-3">
                <p>Réseaux sociaux</p>
                <a href="https://www.facebook.com/MaurineDsign"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/?hl=fr"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/maurine-duray-086603207/"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="legislation col-md-6">
               
                <p>Les images non libres de droits utilisées dans ce portfolio ont été utilisées dans le cadre scolaire et non à but commercial. </p>
            </div>
        </div>
        </div>
    
    
    <div class="copyrigth">
        <div class="row g-0">
            <div class="navFoot col-md-6">
                <ul>
                    <li><a href="index.php#slide1">Accueil</a></li>
                    <li><a href="index.php#slide2">À propos</a></li>
                    <li><a href="index.php#slide3">Portfolio</a></li>
                    <li><a href="index.php#slide4">Contact</a></li>
                </ul>
            </div>
            <div class="copy col-md-6">Copyright @ Duray Maurine</div>
        </div>
    </footer>

</body>
</html>