<?php
session_start(); // On démarre la session
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/index.css">
        <title>Premiers test</title>

    </head>

    <body>
        <div class="dropdown" style="float:right;">
            <button class="dropbtn">
                <img src="http://www.icone-png.com/png/53/53000.png" width="30" height="30">
            </button>
            <div class="dropdown-content">

                <div>
                    <?php  
                        if(isset($_SESSION['pseudo']))// on verrifie qu'il y a quelque chose dans le pseudo du tableau session  
                        { //<img src='C:\wamp64\www\Projet_Web\user.png'>
                            if(strlen($_SESSION['pseudo'] == 0))// si oui on check alors qu'il est pas egal a 0
                            {
                                 echo $_SESSION['pseudo'];// et alors on ecris le pseudo de l'utilisateur
                            } 
                        }
                        else 
                        { 
                            echo '<a href="./pagelog.php">connection </a>';// sinon on lui propose de se connecter
                            echo'<a href="./formulaire.php">inscription</a>';//ou de s'inscrire
                        }
                    ?>
                </div>

                <a href="./deconnexion.php">deconnexion</a>
                <a href="./minichat.php">minichat</a>
            </div>
        </div>

        <h1 id="nomtitre">Robin NAVARI</h1>

        <div class="leshastags">
            <strong>#Productible.rn #Design </strong>
        </div><table class="tabledot"><tr><td>
        <a href="#bandetetework" class="dot"></a></tr></tr></br><tr><td>
        <a href="#bandeteteGalerie" class="dot"></a></tr></tr></br><tr><td>
        <a href="#bandeteteabout" class="dot"></a></tr></tr></br><tr><td>
        <a href="#bandeteteContact" class="dot"></a></tr></tr></br></table>
        <div>



            <div class="parallax"></div>
            <div id="bandetetework">
                <h2>
                    <strong>Work</strong>
                </h2>
            </div>
            <div class="triangle-down"></div>
            <div class="structure1">
                <table>
                    <tr>
                        <td>
                            <div class="image1">
                                <img src="images/chaise/DSC1357.png" width="400" height="350 ">
                                <div class="image1text">
                                    <h4>Chaise</h4>
                                    <p>chaise design salon</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <img class="image2" src="images/photocouteaux/DSC_1344.jpg" width="400" height="350" alt="Texte " title="Texte ">
                            <div class="image2text">
                                <h4>couteau</h4>
                                <p>couteau design cuisine</p>
                            </div>
                        </td>
                        <td>
                            <img src="images/photomaquettechocolat/DSC_1351.JPG" width="400" height="350" alt="Texte " title="Texte ">
                            <div class="image2text">
                                <h4>Maquette Chocolat</h4>
                                <p>maquette design Chocolat</p>
                            </div>
                        </td>
                        <td>
                            <img src="images/renderring/untitled.611.JPG" width="400" height="350" alt="Texte " title="Texte ">
                            <div class="image2text">
                                <h4>Maquette Chocolat</h4>
                                <p>maquette design Chocolat</p>
                        </td>
                        <td>
                            <img src="">
                        </td>
                    </tr>
                </table>
                </div>
                <div class="parallax"></div>
               
                <div id="bandeteteGalerie">
                    <h2>
                        <strong>Galerie</strong>
                    </h2>
                </div>
                <div class="triangle-down"></div>
                <div class="structure1">
                <div class="boxGalerie">

<div class="mySlides fade">
  <div class="numeroimage">1 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171127121601-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">2 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171127121850-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">3 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171127121929-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">4 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171127122015-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">5 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171127122042-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">6 / 1</div>
  <img src="images/scanprojetparplanchesalamain/20171201172757-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">7 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171127122233-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">8 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171127122303-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">9 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171127122325-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">10 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171127122346-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">11 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171130100746-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">12 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171130100810-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">13 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171130100834-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">14 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171201172553-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">15 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171201172631-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">16 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171201172655-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">17 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171201172714-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numeroimage">18 / 3</div>
  <img src="images/scanprojetparplanchesalamain/20171201172732-1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>



<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div class="pointrepere">
<div class="pointimg">
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171127121601-1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171127121850-1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171127121929-1.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171127122015-1.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171127122042-1.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171201172757-1.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171127122233-1.jpg" style="width:100%" onclick="currentSlide(7)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171127122303-1.jpg" style="width:100%" onclick="currentSlide(8)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171127122325-1.jpg" style="width:100%" onclick="currentSlide(9)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171127122346-1.jpg" style="width:100%" onclick="currentSlide(10)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171130100746-1.jpg" style="width:100%" onclick="currentSlide(11)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171130100810-1.jpg" style="width:100%" onclick="currentSlide(12)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171130100834-1.jpg" style="width:100%" onclick="currentSlide(13)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171201172553-1.jpg" style="width:100%" onclick="currentSlide(14)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171201172631-1.jpg" style="width:100%" onclick="currentSlide(15)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171201172655-1.jpg" style="width:100%" onclick="currentSlide(16)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171201172714-1.jpg" style="width:100%" onclick="currentSlide(17)" alt="Snowy Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/scanprojetparplanchesalamain/20171201172732-1.jpg" style="width:100%" onclick="currentSlide(17)" alt="Snowy Mountains">
    </div>

  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
                </div>

                <div class="parallax"></div>
                

                <div id="bandeteteabout">
                    <h2>
                        <strong>About</strong>
                    </h2>

                </div>
                <div class="triangle-down"></div>
                <div class="structure1">


                    <div class="card">
                        <img src="https://www.scpraias.com.br/wp-content/uploads/2017/10/avatar-homem-3.jpg" alt="Robin" style="width:100%">
                        <h1>Robin Navari</h1>
                        <p class="title">Designer & Graphiste, Artiste</p>
                        <p>Condé University</p>
                        <div style="margin: 24px 0;">
                            <a href="#">
                                <i class="fa fa-dribbble"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </div>
                        <p class="Boutoncontact">Contact</p>
                    </div>
                    <img id="qrcode" src="http://www.unitag.io/qreator/generate?setting=%7B%22EYES%22%3A%7B%22EYE_TYPE%22%3A%22Simple%22%7D%2C%22E%22%3A%22M%22%2C%22BODY_TYPE%22%3A0%2C%22LAYOUT%22%3A%7B%22COLORBG%22%3A%22ffffff%22%2C%22COLOR1%22%3A%22000000%22%7D%7D&data=%7B%22TYPE%22%3A%22vcard%22%2C%22DATA%22%3A%7B%22FIRSTNAME%22%3A%22Robin%22%2C%22NAME%22%3A%22Navari%22%2C%22EMAIL%3BINTERNET%22%3A%22navari9203%40outlook.com%22%2C%22EMAIL%3BHOME%3BINTERNET%22%3A%22%22%2C%22TEL%3BCELL%22%3A%220681746320%22%2C%22TEL%3BWORK%22%3A%22%22%2C%22TEL%3BHOME%22%3A%22%22%2C%22TEL%3BHOME%3BFAX%22%3A%22%22%2C%22URL%22%3A%22%22%2C%22TITLE%22%3A%22%22%2C%22ORG%22%3A%22%22%2C%22ADR%22%3A%22%22%2C%22PC%22%3A%22%22%2C%22CITY%22%3A%22%22%2C%22COUNTRY%22%3A%22%22%2C%22NOTE%22%3A%22%22%7D%7D"
                </a>
                </div>

                <div class="parallax"></div>
                <div id="bandeteteContact">
                    <h2>
                        <strong>Contact</strong>
                    </h2>
                </div>
                <div class="triangle-down"></div>
                <div class="structure1">

                    <form action="minichat_post.php" method="post">
                        <p>
                            <table class="tablemessage">
                                <tr>
                                    <td>
                                        <label for="pseudo">Pseudo</label> :
                                    </td>
                                </tr>
                                <div class="espace"></div>
                                <tr>
                                    <td>
                                        <input type="text" name="pseudo" id="pseudo" />
                                    </td>
                                </tr>
                                <div class="espace"></div>
                                <tr>
                                    <td>
                                        <label for="object">Objet</label> :</td>
                                    <td>
                                </tr>
                                <div class="espace"></div>
                                <tr>
                                    <td>
                                        <input type="text" name="object" id="object" />
                                    </td>
                                </tr>
                                <div class="espace"></div>
                                <tr>
                                    <td>
                                        <label for="message">Message</label> :
                                    </td>
                                </tr>
                                <div class="espace"></div>
                                <tr>
                                    <td>
                                        <textarea type="text" name="message" id="message" placeholder="Write something.." style="height:200px"></textarea>
                                    </td>
                                </tr>
                                <div class="espace"></div>
                                <tr>
                                    <td>
                                        <input type="submit" value="Envoyer" />
                                    </td>
                                </tr>
                            </table>
                        </p>
                    </form>

                </div>
            </div>
            <button onclick="topFunction()" id="boutontop">Top</button>
            <script>
                //Quand on descend de 20px on affiche le bouton 
                window.onscroll = function () { scrollFunction() };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("boutontop").style.display = "block";
                    } else {
                        document.getElementById("boutontop").style.display = "none";
                    }
                }

                // Quand on clique su le bouton on remonte en haut de la page
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
    </body>

    </html>