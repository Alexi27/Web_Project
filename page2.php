<html>
<body>
    
<?php
$mail = $_POST['mail'];
$password = $_POST['password'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$genre = $_POST['genre'];
$tel = $_POST['tel'];
$birthday = $_POST['birthday'];
echo $_POST['mail'];
echo $_POST['password'];
echo $_POST['nom'];
echo $_POST['prenom'];
echo $_POST['genre'];
echo $_POST['tel'];
echo $_POST['birthday'];?>

<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'Alexi27', 'Alexi2427');?>
<! On ajoute une entrée dans la table >
<?php
$req = $bdd->prepare('INSERT INTO projetweb(mail, password, nom, prenom, genre, tel, birthday) VALUES(:mail, :password, :nom, :prenom, :genre, :tel, :birthday)');
$req->execute(array(
	'mail' => $mail,
	'password' => $password,
	'nom' => $nom,
	'prenom' => $prenom,
	'genre' => $genre,
    'tel' => $tel,
    'birthday' => $birthday
	));

echo 'Information bien enregistré!';

?><table>
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
            <input type="password" name="pws" value=<?php echo $_POST['pws'];?>> <! auto remplissage avec la valeur du formulaire >
        </td>
    </tr>
</table>
<input type="submit" value="connexion">
</body>
</html>