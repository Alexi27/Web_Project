<html>
<body>
<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'Alexi27', 'Alexi2427');?>
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
            <input type="password" name="pws" value=<?php echo $_POST['pws'];?>> <! auto remplissage avec la valeur du formulaire >
        </td>
    </tr>
</table>
<input type="submit" value="connexion">
</body>
</html>