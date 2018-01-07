
<?php
session_start(); // On démarre la session 
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
        <style>
            form {
                text-align: center;
            }

            .input {
                float: middle;
            }

            .tablemessage {
                width: 100%;
                float: middle;
                text-align: center;
            }

            .messageancien {
                width: 50%;
                float: center;
                text-align: middle;
            }
            input, textarea{
                width: 30%;
               
                font-size: 17px;
            }
            .espace:after{
                content: "";
                display: table;
                clear: both;
            }
        </style>
    </head>

    <body>

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
                            <textarea type="text" name="message" id="message" placeholder="Write something.."style="height:200px"></textarea>
                        </td>
                    </tr>
                    <div class="espace"></div>                    <tr>
                        <td>
                            <input type="submit" value="Envoyer" />
                        </td>
                    </tr>
                </table>
            </p>
        </form>
        <div class="messageancien">
            <?php
// Connexion à la base de données
	$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'Alexi27', 'Alexi2427');



// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT dateetheure, pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p>' . htmlspecialchars($donnees['dateetheure']) .'<strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}
$reponse->closeCursor(); // on libère le curseur pour la prochaine requête


?>
        </div>
    </body>

    </html>