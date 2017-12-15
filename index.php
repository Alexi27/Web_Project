<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Formulaire.css" />
    <title>Premiers tests du CSS</title>
</head> 
s

<body>
 
    <form action="page2.php" method="post">
        <div id="log"> 
            <h4>Informations de connexion</h4>
            <table> 
                <tr>
                    <td>
                        <p>email</p>
                    </td> 
                </tr>
                <tr>
                    <td>
                        <input type="mail" name="mail">
                    </td>
                </tr>
                <tr>
                    <td>
                    <p>Mot de passe:</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pws">
                    </td>
                    <tr>
                </table>
        </div>   
        <div id="formulaire">
            <h4>Information personnels</h4>
            <table>
                <tr>
                    <input type="radio" name="genre" value="M" checked> homme
                    <input type="radio" name="genre" value="F"> femme
                    <input type="radio" name="genre" value="autre"> autre
                </tr>
                <tr>
                    <td>
                    <p>Nom:</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="pseudo" type="text" name="Nom">
                    </td>
                </tr>
                <tr>
                    <td>
                    <p>Prénom:</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="pseudo" type="text" name="prenom">
                    </td>
                </tr>
                <tr>
                    <td>
                    <p>telephone:</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="pseudo" type="tel" name="telephone">
                    </td>
                </tr>

                <tr>
                    <td>
                    <p>date de naissance:</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="date" name="datedenaissances">
                    </td>
                </tr>
            </table>
            </br>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>

</html>