<?php
session_start(); // On démarre la session 
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/minichat.css">
        <title>Mini-chat</title>

    </head>

    <body>
        <div class="liste">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
            <?php
                // Connexion à la base de données
                    $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'Alexi27', 'Alexi2427');
                // Récupération des inscri dans la dB
                $reponse = $bdd->query('SELECT pseudo FROM inscription ORDER BY ID');
            ?>
            <ul id="myUL">
                <?php
                    while ($donnees = $reponse->fetch())
                    {
                        echo '<li>' . '<a href="#">'  . htmlspecialchars($donnees['pseudo']) . '</a>'.'</li>';
                    }
                ?>
            </ul>
        </div>    
            <script>
                    function myFunction() {
                        var input, filter, ul, li, a, i;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        ul = document.getElementById("myUL");
                        li = ul.getElementsByTagName("li");
                        for (i = 0; i < li.length; i++) {
                            a = li[i].getElementsByTagName("a")[0];
                            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                li[i].style.display = "";
                            } else {
                                li[i].style.display = "none";

                            }
                        }
                    }
            </script>
                        <div class="messageancien">

                <?php
                // Récupération des 10 derniers messages
                $reponse = $bdd->query('SELECT dateetheure, pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

                // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                while ($donnees = $reponse->fetch())
                {
                    if (htmlspecialchars($donnees['pseudo']) == $_SESSION['pseudo']){?>
                        <div class="container">
                            
                            <p>
                                <?php echo htmlspecialchars($donnees['message']) ?> 
                            </p>
                            <span class="time-left">
                                <?php echo htmlspecialchars($donnees['dateetheure']) ?>
                            </span>
                        </div>
                        <?php
                    }
                    else {?>
                        <div class="container darker">
                            
                            <p>
                                <?php echo htmlspecialchars($donnees['message']) ?> 
                            </p>
                            <span class="time-right">
                                <?php echo htmlspecialchars($donnees['dateetheure']) ?>
                            </span>
                        </div>
                        <?php
                        }
                    
                }
                $reponse->closeCursor(); // on libère le curseur pour la prochaine requête


?>
                            <form action="minichat_post.php" method="post">
                                <p>
                                    <table class="tablemessage">
                                        <tr>
                                            <td>
                                                <?php echo $_SESSION['pseudo'];?>
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
    </body>

    </html>