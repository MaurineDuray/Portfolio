<?php
    require "connexion.php";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Maurine Portfolio</title>
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
                    <li><a href="#slide2"><div class="haut-titre">About me</div><div class="sous-titre">À PROPOS</div></a></li>
                    
                    <li><a href="#slide3"><div class="haut-titre">See my work</div><div class="sous-titre">PORTFOLIO</div></a></li>
                    <li><a href="#slide4"><div class="haut-titre">Get in touch</div><div class="sous-titre">CONTACT</div></a></li>
                
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
        
        <div class="row g-0">
            <div class="col-xl-6" id="gauche1">
                <div class="group offset-0 offset-xl-1">
                    <div class="logoslide1">
                        <img src="images/logo.png" alt="">
                    </div>
                    <h1>DURAY MAURINE</h1>
                    <h3>Graphiste - Infographiste</h3>
                </div>
            </div>
            <div class="col-xl-6" id="droite1">
                <img src="images/illuHome.svg" alt="">
            </div>
        </div>
        
    </div>
    <div class="slide" id="slide2">
        <div class="container">
        <div class="row">
            <div class="col-xl-6 gauche2">
                <div class="row ">
                        <div class="col-4 fleur"><img src="images/fleur.png" alt=""></div>
                        <div class="donnees">
                            <h5 class="duray">DURAY</h5>
                            <h5> MAURINE</h5>
                            <p>0479088681</p>
                            <p>Rue de Ghislenghien, 33</p>
                            <p>7822 Ghislenghien</p>
                            <p>maurine.duray@skynet.be</p>
                        </div>
                </div>
            </div>
            <div class="col-xl-6 droite2">
                    <h2>À PROPOS</h2>
                    <h4>about me</h4>
                    <h6>Parcours</h6>
                        <div class="trait"></div>
                        <p>Etudes secondaires - Athénée Royale d’Enghien option langues
                            <br>Etudes supérieures -  Bachelier en Arts Appliqués à la HEPH Condorcet de Saint-Ghislain
                            <br>Bachelier en Techniques graphiques à l’EPSE de Marcq
                        </p>
                    <h6>Logiciels</h6>
                        <div class="trait"></div>
                        <div class="logiciels">
                            <?php
                                $skills = $bdd -> query("SELECT * FROM skills");
                                while($donSkills= $skills->fetch()){
                                    echo '<div class="carre" >';
                                    echo '<img  src="../upload/'.$donSkills['image'].'" alt="image de '.$donSkills['skills'].'" >';
                                    echo '</div>';
                                }
                            ?>
                            
                            
                            
                        </div>
                    <h6>Personnalité</h6>
                        <div class="trait"></div>
                        <p>Joviale - Travailleuse - Rapide - Apprend vite - Souriante - Autonome</p>
                    <h6>Passions</h6>
                        <div class="trait"></div>
                        <p>Nature/animaux - dessin - cuisine - balades - musique </p>
            </div>
        </div>
    </div>
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
                        $works = $bdd -> query("SELECT * FROM works");
                        while($donWorks = $works ->fetch()){
                            echo '<div class="col-md-4" >';
                                echo '<div class="cadre" >';
                                    echo '<img src="../upload/'.$donWorks['image'].'" alt="image de '.$donWorks['title'].'" >';
                                echo '</div>';
                            echo '</div>';

                            
                        }
                    ?>
                    
                </div>
                <button type="button" id="ensav" class="btn btn-primary">En voir plus</button>
              </div>
           
        
    </div>
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
                <h4>Get in touch</h4>
               <div class="trou">
                   <form action="POST">
                        <input type="text" placeholder="Nom" name="nom">
                        <input type="text" placeholder="Prénom" name="prenom">
                        <input type="text" placeholder="Sujet du message" name="sujet">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Votre message" name="message"></textarea>
                        <input type="submit" value="ENVOYER">  
                   </form>
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
                    <li><a href="#slide2">A propos</a></li>
                    <li><a href="#slide3">Portfolio</a></li>
                    <li><a href="#slide4">Contact</a></li>
                </ul>
            </div>
            <div class="copy col-md-6">Copyright @ Duray Maurine</div>
        </div>
    </footer>
</body>
</html> 