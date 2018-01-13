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

            .bandetete {
                float: center;
                width: 100%;
                height: 5%;
                text-align: center;
                background-color: grey;
                font-size: 16px;
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
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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

            .structure1 {
                margin: auto;
                float: center;
                height: 600px;
                width: 100%;
                background-color: black;/* rgba(0, 0, 0, 0);*/
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

            .image1text h4 {
                padding-top: 10px;
            }
            
            .image1text {
                position: relative;
                bottom: 100px;
                background-color: rgba(0,0,0,0.5);
                color: white;
                padding-left: 20px;
                padding-right: 20px;
                display: block;
                text-align: center;

            .image1:hover {
                opacity: .4;
            }
        </style>
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
            <a href="http://www.unitag.io/qreator/generate?setting=%7B%22EYES%22%3A%7B%22EYE_TYPE%22%3A%22Simple%22%7D%2C%22E%22%3A%22M%22%2C%22BODY_TYPE%22%3A0%2C%22LAYOUT%22%3A%7B%22COLORBG%22%3A%22ffffff%22%2C%22COLOR1%22%3A%22000000%22%7D%7D&data=%7B%22TYPE%22%3A%22vcard%22%2C%22DATA%22%3A%7B%22FIRSTNAME%22%3A%22Robin%22%2C%22NAME%22%3A%22Navari%22%2C%22EMAIL%3BINTERNET%22%3A%22navari9203%40outlook.com%22%2C%22EMAIL%3BHOME%3BINTERNET%22%3A%22%22%2C%22TEL%3BCELL%22%3A%220681746320%22%2C%22TEL%3BWORK%22%3A%22%22%2C%22TEL%3BHOME%22%3A%22%22%2C%22TEL%3BHOME%3BFAX%22%3A%22%22%2C%22URL%22%3A%22%22%2C%22TITLE%22%3A%22%22%2C%22ORG%22%3A%22%22%2C%22ADR%22%3A%22%22%2C%22PC%22%3A%22%22%2C%22CITY%22%3A%22%22%2C%22COUNTRY%22%3A%22%22%2C%22NOTE%22%3A%22%22%7D%7D ">
                <img src="http://www.unitag.io/qreator/generate?setting=%7B%22EYES%22%3A%7B%22EYE_TYPE%22%3A%22Simple%22%7D%2C%22E%22%3A%22M%22%2C%22BODY_TYPE%22%3A0%2C%22LAYOUT%22%3A%7B%22COLORBG%22%3A%22ffffff%22%2C%22COLOR1%22%3A%22000000%22%7D%7D&data=%7B%22TYPE%22%3A%22vcard%22%2C%22DATA%22%3A%7B%22FIRSTNAME%22%3A%22Robin%22%2C%22NAME%22%3A%22Navari%22%2C%22EMAIL%3BINTERNET%22%3A%22navari9203%40outlook.com%22%2C%22EMAIL%3BHOME%3BINTERNET%22%3A%22%22%2C%22TEL%3BCELL%22%3A%220681746320%22%2C%22TEL%3BWORK%22%3A%22%22%2C%22TEL%3BHOME%22%3A%22%22%2C%22TEL%3BHOME%3BFAX%22%3A%22%22%2C%22URL%22%3A%22%22%2C%22TITLE%22%3A%22%22%2C%22ORG%22%3A%22%22%2C%22ADR%22%3A%22%22%2C%22PC%22%3A%22%22%2C%22CITY%22%3A%22%22%2C%22COUNTRY%22%3A%22%22%2C%22NOTE%22%3A%22%22%7D%7D"
                    alt="QR Code - Robin NAVARI carte de visite"> </a>
        </div>
        <div class="parallax"></div>
        <div class="bandetete">
            <strong>Work</strong>
        </div>
        <div class="structure1">
            <table>
                <tr>
                    <td>
                        <div class="image1">
                            <img src="./chaise/DSC1357.png" width="450" height="400" >
                            <div class="image1text">
                                <h4>Chaise</h4>
                                <p>chaise design salon</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <img class="image2" src="./photocouteaux/DSC_1344.jpg" width="300" height="300" alt="Texte " title="Texte ">
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

        <div class="parallax"></div>
        <div class="bandetete">
            <strong>About</strong>
        </div>
        <div class="structure1">
            <table>
                <tr>
                    <td>
                        <img class="image1" src="C:\wamp64\www\Projet_Web\chaise\DSC1357.png" width="400" height="300" alt="Texte " title="Texte "
                        />

                    </td>
                    <td>
                        <img class="image2" src="C:\wamp64\www\Projet_Web\photocouteaux\DSC_1344.jpg" width="300" height="300" alt="Texte " title="Texte ">
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

        <a href="./formulaire.html">inscription</a>
        <a href="./minichat.php">chat</a>
        </div>
    </body>

    </html>
