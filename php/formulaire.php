<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/Formulaire.css" />
    <title>Premiers tests du CSS</title>
</head>

<body style="background-image:url(https://st2.depositphotos.com/3757793/11154/v/950/depositphotos_111543510-stock-illustration-memphis-line-seamless-pattern-colorful.jpg)">

    <form action="firstlog.php" method="post">
        <div id="log">
            <h4>Informations de connexion</h4>
            <table>
                <tr>
                    <td>
                        <p>pseudo</p>
                    </td>
                </tr>
                <tr> 
                    <td>
                        <input class="pseudo" type="text" name="pseudo">
                    </td>
                </tr>
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
                        <input type="password" name="password">
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
                        <input class="pseudo" type="text" name="nom">
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
                        <input class="pseudo" type="tel" name="tel">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>date de naissance:</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="date" name="birthday">
                    </td>
                </tr>
            </table>
            </br>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>


</html>
