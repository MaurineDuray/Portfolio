<?php
    require "connexion.php";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Maurine Portfolio</title>
    <link rel="icon" type="image/png" href="images/logo.png" />
    <meta name="title" content="Duray Maurine - Portfolio">
    <meta property="og:title" content="Maurine Duray - Portfolio">
    <meta property="og:url" content="http://maurine.duray.info/">
    <meta property="og:description" content="Maurine Duray, graphiste-infographiste vous présente son portfolio.">
    <meta property="og:site_name" content="Duray Maurine">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:image" content="http://maurine.duray.info/images/logoMenu.png">
<meta property="og:image:width" content="500">
<meta property="og:image:height" content="500">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <link rel="stylesheet" href="css/sal.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    
    <script src="js/sal.js"></script>


        <script >
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
                    items.classList.toggle('hoverOrange')
                })
            })
          
           

            const navGroup = document.querySelectorAll('#Travaux ul .row li')
            
            const title = document.querySelector("#titre span")
            
            navGroup.forEach(navi => {
            navi.addEventListener('click',()=>{
                const target = document.querySelector(navi.dataset.id)
                const myTitle = navi.dataset.title
                title.innerHTML = myTitle
                navGroup.forEach(navi=>{
                    navi.childNodes[0].classList.remove('hoverOrange')
                })
                navi.childNodes[0].classList.add('hoverOrange')
                
                
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
                    const myTitle = link.dataset.title
                    title.innerHTML = myTitle
                    galGroup.forEach(groupe => {
                        groupe.classList.remove('galopen')
                       
                    })
                    target.classList.toggle('galopen')
                    
                })
            })
        
        
        /*menu change de couleur*/
        
       const home = document.querySelector('#slide1')
        const pres = document.querySelector('#slide2')
        const gal = document.querySelector('#slide3')
        const cont = document.querySelector('#slide4')
        const nav = document.querySelector('#principal')
        const li = document.querySelectorAll("#principal ul li a")
        var scrolling
console.log(li)
        window.addEventListener('scroll',()=>{
            scrolling = document.documentElement.scrollTop || window.scrollY || window.pageYOffset || document.body.scrollTop

            if(scrolling < pres.offsetTop - 100){
                nav.style.backgroundColor="rgba(0, 161, 154, 1)"
            
            }else if((scrolling > pres.offsetTop - 100)&(scrolling < gal.offsetTop - 100)){
                nav.style.backgroundColor="white"
                
            }else if((scrolling > gal.offsetTop - 100)&(scrolling <cont.offsetTop - 100)){
                nav.style.backgroundColor="rgba(0, 161, 154, 1)"
                
            }else if(scrolling > cont.offsetTop - 100){
                nav.style.backgroundColor="white"
                
            }
            
        })

        

           
        })
    </script>

</head>
<body>


    <nav id="principal">
            <div class="logo"><a href="index.php"><img src="images/logoMenu.png" alt=""></a></div>
            <ul>
                    <li><a href="index.php"><div class="haut-titre">Welcome</div><div class="sous-titre">ACCUEIL</div></a></li>
                    <li><a href="#slide2"><div class="haut-titre">About me</div><div class="sous-titre">À PROPOS</div></a></li>
                    
                    <li><a href="#slide3"><div class="haut-titre">See my work</div><div class="sous-titre">PORTFOLIO</div></a></li>
                    <li><a href="#slide4"><div class="haut-titre">Get in touch</div><div class="sous-titre">CONTACT</div></a></li>
                
            </ul>
            <div class="menuBurger">
                <div class="barre"></div>
                <div class="barre"></div>
                <div class="barre"></div>
                <p>Menu</p>
            </div>
        
    </nav>
    <div class="slide" id="slideMenu">
        <div class="haut">
            <div class="logoResp"><img src="images/logo.png" alt="logo"></div>
            <div class="croix">
                <div class="barre" id="barre1"></div>
                <div class="barre" id="barre2"></div>
                <p>Fermer</p>
            </div>
        </div>

        <nav id="responsive">
            <ul class="menuResp">
                <li>
                    <a href="index.php"><div class="haut-tit">Welcome</div><div class="sous-tit">ACCUEIL</div></a>
                </li>
                <li>
                    <a href="#slide2"><div class="haut-tit">About me</div><div class="sous-tit">À PROPOS</div></a>
                </li>
                <li>
                    <a href="#slide3"><div class="haut-tit">See my work</div><div class="sous-tit">PORTFOLIO</div></a>
                </li>
                <li>
                    <a href="#slide4"><div class="haut-tit">Get in touch</div><div class="sous-tit">CONTACT</div></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="slide" id="slide1">
        
        <div  class="row g-0">
            <div class="col-xl-6" id="gauche1">
                <div class="group offset-0 offset-xl-1">
                    <div  data-sal-easing="ease-out-back" data-sal-duration ="400" data-sal="slide-right" data-sal-delay="300"class="logoslide1">
                        <img src="images/logo.png" alt="">
                    </div>
                    <h1 >MAURINE DURAY</h1>
                    <h3 data-sal-duration ="400" data-sal="slide-left" data-sal-delay="300" >Graphiste - Infographiste</h3>
                </div>
            </div>
            <div class="col-xl-6" id="droite1">
                <img src="images/illuHome.svg" alt="">
            </div>
        </div>
        <div class="fleche"><img src="images/fleche.png" alt=""></div>
    </div>
    <div class="slide" id="slide2">
        <div class="container">
        <div class="row">
            <div class="col-xl-6 gauche2">
                <div class="row ">
                        <div class="col-4 fleur"><img src="images/fleur.png" alt=""></div>
                        <div  class="donnees">
                            <h5 class="duray" data-sal="flip-left" data-sal-delay="300" data-sal-easing="ease-out-back">DURAY</h5>
                            <h5 data-sal="zoom-in" data-sal-delay="300" data-sal-easing="ease-out-back"> MAURINE</h5>
                            <p data-sal="zoom-in" data-sal-delay="400" data-sal-easing="ease-out-back">0479088681</p>
                            <p data-sal="zoom-in" data-sal-delay="400" data-sal-easing="ease-out-back">Rue de Ghislenghien, 33</p>
                            <p data-sal="zoom-in" data-sal-delay="400" data-sal-easing="ease-out-back">7822 Ghislenghien</p>
                            <p data-sal="zoom-in" data-sal-delay="400" data-sal-easing="ease-out-back">maurine.duray@skynet.be</p>
                        </div>
                </div>
            </div>
            <div class="col-xl-6 droite2">
                    <h2>À PROPOS</h2>
                    <h4 data-sal-duration ="1000" data-sal="slide-left" data-sal-delay="800">About me</h4>
                    <h6>Parcours</h6>
                        <div data-sal-duration ="500" data-sal="slide-left" data-sal-delay="850"class="filet"></div>
                        <p>Etudes secondaires - Athénée Royale d’Enghien option langues
                            <br>Etudes supérieures -  Bachelier en Arts Appliqués à la HEPH Condorcet de Saint-Ghislain
                            <br>Bachelier en Techniques graphiques à l’EPSE de Marcq
                        </p>
                    <h6>Compétences</h6>
                        <div data-sal-duration ="1000" data-sal="slide-left" data-sal-delay="900"class="filet"></div>
                        <div class=" logiciels ">
                            <?php
                                $skills = $bdd -> query("SELECT * FROM skills");
                                while($donSkills= $skills->fetch()){
                                    echo '<div class="carre col-1" >';
                                    echo '<img style="width:40px; height:40px;" src="upload/'.$donSkills['image'].'" alt="image de '.$donSkills['skills'].'" >';
                                    echo '</div>';
                                }
                            ?>
                            
                        </div>
                    <h6>Personnalité</h6>
                        <div data-sal-duration ="1000" data-sal="slide-left" data-sal-delay="950"class="filet"></div>
                        <p>Joviale - Travailleuse - Rapide - Apprend vite - Souriante - Autonome</p>
                    <h6>Passions</h6>
                        <div data-sal-duration ="1000" data-sal="slide-left" data-sal-delay="1000"class="filet"></div>
                        <p>Nature/animaux - dessin - cuisine - balades - musique </p>
            <p><a href="index.php#slide3">Voir mon portfolio</a></p>
        </div>
            
        </div>   
    </div>
     <div class="fleche"><img src="images/fleche.png" alt=""></div>
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
        <h4 data-sal-duration ="500" data-sal="slide-right" data-sal-delay="500">See my work</h4>
        <div class="menuTravx">
            <nav id="Travaux">
                <ul>
                    <div class="row g-0 justify-content-evently">
                        <li data-id="#group0" data-title='Travaux récents'  class="col-12 text-start p-5"><a href="#slide3" class="col-2 g-0 text-center" >Travaux récents
                    </a></li>
                        <li data-id="#group1" data-title='Dessin et illustration'class="col-2 text-center"><a href="#slide3">Dessin et illustration</a></li>
                        <li data-id="#group2" data-title='Retouches graphiques'class="col-2 text-center"><a href="#slide3">Retouches graphiques  </a></li>
                        <li data-id="#group3" data-title='Dessin vectoriel'class="col-2 text-center"><a href="#slide3">Dessin vectoriel</a></li>
                        <li data-id="#group4" data-title='Mise en page PAO'class="col-2 text-center"><a href="#slide3">Mise en page PAO</a></li>
                        <li data-id="#group5" data-title='Web - WebDesign'class="col-2 text-center"><a href="#slide3">Web - WebDesign</a></li>
                        <li data-id="#group6" data-title='Animation'class="col-2 text-center"><a href="#slide3">Animation</a></li>  
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

        <div id="portfolio" class="container overflow-hidden gal-container" >
                <div class="row g-3 galgroup galopen" id="group0" >
                    <?php
                        $works = $bdd -> query("SELECT * FROM works  ORDER BY date DESC LIMIT 6");
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

                        $works = $bdd -> query ("SELECT * FROM works WHERE category = 'dessinIllu' ORDER BY date DESC LIMIT 6");
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
                        $works = $bdd -> query("SELECT * FROM works WHERE category = 'retoucheGraph' ORDER BY date DESC LIMIT 6");
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
                        $works = $bdd -> query("SELECT * FROM works WHERE category = 'dessinVectoriel' ORDER BY date DESC LIMIT 6");
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
                        $works = $bdd -> query("SELECT * FROM works WHERE category = 'pao' ORDER BY date DESC LIMIT 6");
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
                        $works = $bdd -> query("SELECT * FROM works WHERE category = 'web' ORDER BY date DESC LIMIT 6");
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
                        $works = $bdd -> query("SELECT * FROM works WHERE category = 'animation' ORDER BY date DESC LIMIT 6");
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
           <a href="galerie.php"><button type="button" id="ensav" class="btn btn-primary col-1">En voir plus</button></a>
        
    </div>
    <div class="fleche"><img src="images/fleche.png" alt=""></div>
    </div>
    
    <div class="slide" id="slide4">
        <div class="row">
            <div class="gauche4 col-lg-6">
                <img class='image-fluid illu' src="images/contactillu.svg" alt="">
                <div class="contact">
                    <h5>DURAY MAURINE</h5>
                    <p>0479088681</p>
                    <p>Rue de Ghislenghien, 33</p>
                    <p>7822 Ghislenghien</p>
                    <p>maurine.duray@skynet.be</p>
                </div>
            </div>
            <div class="droite4 col-lg-6">
                <h2>CONTACT</h2>
                <h4 data-sal-duration ="500" data-sal="slide-left" data-sal-delay="500">Get in touch</h4>
               
               <div class="trou">
                   <form method="POST" action="admin/treatmentAddMessage.php">
                        <input type="text" placeholder="Nom / Prénom" name="name" id="name">
                        <input type="email" placeholder="Votre adresse e-mail" name="email" id="email">
                        <input type="text" placeholder="Sujet du message" name="subject" id="subject">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message"  ></textarea>
                        <input type="submit" value="ENVOYER">  

                        
                   </form>
                   <?php
                            if(isset($_GET['success']))
                            {
                                echo "<div class='row col-9'>" ;
                                echo "<div class='alert alert-success'>Votre message a bien été envoyé ! </div>"; 
                                echo "</div >" ;
                            }
                            if(isset($_GET['error']))
                            {
                                echo "<div class='row col-9'>" ;
                                echo "<div class='alert alert-danger'> Il y a eu une erreur dans l'envoi de votre message. </div>"; 
                                echo "</div >" ;
                            }
                            
                        ?>
               </div>
            </div>
        </div>
    </div>
    <footer>
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
                    <li><a href="#slide1">Accueil</a></li>
                    <li><a href="#slide2">À propos</a></li>
                    <li><a href="#slide3">Portfolio</a></li>
                    <li><a href="#slide4">Contact</a></li>
                </ul>
            </div>
            <div class="copy col-md-6">Copyright @ Duray Maurine</div>
        </div>
    </footer>





    <script>
        sal({
           
            once: false,
        });
    </script>

</body>

</html> 