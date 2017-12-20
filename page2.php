<html>
<body>
    
<?php // Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'Alexi27', 'Alexi2427');

// On ajoute les info a la bd 
$req = $bdd->prepare('INSERT INTO projetweb(mail, password, nom, prenom, genre, tel, birthday) VALUES(?,?,?,?,?,?,?)');
$req->execute(array($_POST['mail'],$_POST['password'],$_POST['nom'],$_POST['prenom'],$_POST['genre'],$_POST['tel'],$_POST['birthday']));

echo 'Information bien enregistré!';

?>
<table>
    <tr>
        <td>
            email:
        </td>
        <td>
            <input class="pseudo" type="mail" name="mail" value=<?php echo $_POST['mail'];?>> <! auto remplissage avec la valeur du formulaire>
            <br>
        </td>
    </tr>
    <tr>
        <td>
            Mot de passe :
        </td>
        <td>
            <input type="password" name="pws" value=<?php echo $_POST['password'];?>> <! auto remplissage avec la valeur du formulaire >
        </td>
    </tr>
</table>
<input type="submit" value="connexion">
</body>
</html>