<?php
session_start(); // On démarre la session
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="index.css">
        <title>Premiers test</title>
    </head>

    <body style="background-image:url(https://st2.depositphotos.com/3757793/11154/v/950/depositphotos_111543510-stock-illustration-memphis-line-seamless-pattern-colorful.jpg)">

        <div class="menuderoulant"> 
            <button class="menuderoulantbouton">
                <img src='C:\wamp64\www\Projet_Web\user.png'>
            </button>
            <div class="menuderoulant-content">
                <div>
                    <?php 
                        if(isset($_SESSION['pseudo']))// on verrifie qu'il y a quelque chose dans le pseudo du tableau session  
                        {
                            if(strlen($_SESSION['pseudo'] == 0))// si oui on check alors qu'il est pas egal a 0
                            {
                                 echo $_SESSION['pseudo'];// et alors on ecris le pseudo de l'utilisateur
                            } 
                        }
                        else 
                        { 
                            echo '<a href="./pagelog.php">connection </a>';// sinon on lui propose de se connecter
                        }
                    ?>
                </div>
                <a href="./formulaire.html">inscription</a> 
                <a href="./deconnexion.php">deconnexion</a>
                <a href="./minichat.php">minichat</a>
            </div>
        </div>
        <div id="structure">
            <h1 class="nom">Navari Robin</h1>
        </div>
        <div>
            <strong>#Productible.rn #Design #eko </strong>
        </div>
        <table>
            <tr>
                <td>
                    <img class="image1" src="https://image.freepik.com/free-vector/colorful-ornamental-abstract-design_23-2147501644.jpg" width="50"
                        height="50" alt="Texte " title="Texte " />
                </td>
                <td>
                    <img class="image2" src="http://img.chefdentreprise.com/Img/BREVE/2014/1/232881/design-levier-competitivite-sous-exploite-par-PME-F.jpg"
                        width="50" height="50" alt="Texte " title="Texte ">
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
        <a href="./formulaire.html">inscription</a>
        <a href="./minichat.php">chat</a>
    </body>

    </html>