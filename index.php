</html>

<?php
session_start(); // On démarre la session
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="index.css">
        <title>Premiers test</title>

        <style>
            body,
            html {
                height: 100%;
            }

            .parallax {
                background-image: url('https://wallpaperscraft.com/image/inkwell_pen_ink_77039_2048x1152.jpg');
                height: 100%;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-color: 
            }

            .dropbtn {
   
    color: white;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1
    }

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.structure1{
    margin:auto;
    float:center;
    height:800px;
    width:70%;
    background-color:black;
    
}

#nomtitre {
                margin: auto;
                text-align: center;
                vertical-align: middle;
            }
            .image2 {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }

            .image2:hover {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }

            /* Opacité */

            .image1 div {
                background: #000000;
            }

            .image1:hover {
                opacity: .5;
            }
        </style>
    </head>
    <body>
    <div class="dropdown" style="float:right;">
    <button class="dropbtn">  <img src="http://www.icone-png.com/png/53/53000.png" width="30" height="30">
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
                            echo'<a href="./formulaire.html">inscription</a>';//ou de s'inscrire
                        }
                    ?>
                </div>

                <a href="./deconnexion.php">deconnexion</a>
                <a href="./minichat.php">minichat</a>
            </div>
        </div>

        <h1 id="nomtitre">Navari Robin</h1>

        <div class "leshastags">
            <strong>#Productible.rn #Design #eko</strong>
        </div>
        <div class="parallax"></div>

        <div class="structure1">
            <table>
                <tr>
                    <td>
                        <img class="image1" src="https://image.freepik.com/free-vector/colorful-ornamental-abstract-design_23-2147501644.jpg" width="400"
                            height="300" alt="Texte " title="Texte " />
                    </td>
                    <td>
                        <img class="image2" src="http://img.chefdentreprise.com/Img/BREVE/2014/1/232881/design-levier-competitivite-sous-exploite-par-PME-F.jpg"
                            width="300" height="300" alt="Texte " title="Texte ">
                    </td>
                    <td>
                        <img src="">
                    </td>
                    <td>
                        <img src="">
                    </td>
                    <td>
                        <img src="">
                    </td>
                </tr>
            </table>
        </div>

        <div class="parallax">
        </div>

        <a href="./formulaire.html">inscription</a>
        <a href="./minichat.php">chat</a>
        </div>
    </body>
    </html>