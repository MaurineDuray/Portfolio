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
                
                const galGroup = document.querySelectorAll(".galgroup")
                galGroup.forEach(group => {
                    group.classList.remove('galopen')
                })
                target.classList.toggle('galopen')
            })
        })

            
            const mobilLink = document.querySelectorAll('.mobil-link')
            
            
            mobilLink.forEach(link=>{
                link.addEventListener('click',()=>{
                    menuTrvx.classList.remove("menuOpen")
                    let galGroup = document.querySelectorAll('.galgroup')
                    let target = document.querySelector(link.dataset.id)
                    galGroup.forEach(groupe => {
                        groupe.classList.remove('galopen')
                       
                    })
                    target.classList.toggle('galopen')
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
                    <li data-id="#group0" class="col-12 text-center mobil-link" data-title="Travaux récents">Travaux récents</li>
                    <li data-id="#group1" class="col-12 mobil-link" data-title="Dessin et illustration">Dessin et illustration</li>
                    <li data-id="#group2" class="col-12 mobil-link" data-title="Retouches graphiques">Retouches graphiques</li>
                    <li data-id="#group3" class="col-12 mobil-link" data-title="Dessin vectoriel">Dessin vectoriel</li>
                    <li data-id="#group4" class="col-12 mobil-link" data-title="Mise en page PAO">Mise en page PAO</li>
                    <li data-id="#group5" class="col-12 mobil-link" data-title="Web - WebDesign">Web - WebDesign</li>
                    <li data-id="#group6" class="col-12 mobil-link" data-title="Animation">Animation</li>  
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
                        <li data-id="#group0" class="col-12 text-start p-5"><a href="#slide3" class="col-2 g-0 text-center" >Travaux récents
                    </a></li>
                        <li data-id="#group1" class="col-2 text-center"><a href="#slide3">Dessin et illustration</a></li>
                        <li data-id="#group2" class="col-2 text-center"><a href="#slide3">Retouches graphiques  </a></li>
                        <li data-id="#group3" class="col-2 text-center"><a href="#slide3">Dessin vectoriel</a></li>
                        <li data-id="#group4" class="col-2 text-center"><a href="#slide3">Mise en page PAO</a></li>
                        <li data-id="#group5" class="col-2 text-center"><a href="#slide3">Web - WebDesign</a></li>
                        <li data-id="#group6" class="col-2 text-center"><a href="#slide3">Animation</a></li>  
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

        <div id="portfolioGal" class="container overflow-hidden gal-container" >
                <div class="row g-3 galgroup galopen" id="group0" >
                    <?php
                        $works = $bdd -> query("SELECT * FROM works  ORDER BY date ");
                        while($donWorks = $works ->fetch()){
                            echo '<div class="col-md-4" >';
                                echo '<a href="project.php?id='.$donWorks["id"].'">';
                                echo '<div class="cadre" style="display: flex; justify-content: center; background-image: url(upload/'.$donWorks["image"].'); background-position: center center; background-size: contain; background-repeat:no-repeat; background-color: rgb(240, 240, 240, 05)">';
                                   
                                echo '</div></a>';
                            echo '</div>';
                        }
                    ?>
                </div>

                <div class="row g-3 galgroup" id="group1">
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

                <div class="row g-3 galgroup" id="group2">
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
                <div class="row g-3 galgroup" id="group3">
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
                <div class="row g-3 galgroup" id="group4">
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
                <div class="row g-3 galgroup" id="group5">
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
           <a href="index.php#slide3"><button type="button" id="ensav" class="btn btn-primary">Retour </button></a>
        
    </div>
    
    </div>
</body>
</html>