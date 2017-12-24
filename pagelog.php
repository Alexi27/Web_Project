<?php
session_start(); // On démarre la session 
?>
<html>
<body>
    
<?php // Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'Alexi27', 'Alexi2427');

?>
<form action="veriflog.php" method="post">
<table>
    <tr>
        <td>
            pseudo :
        </td>
        <td>
            <input class="pseudo" type="text" name="pseudo" > 
            <br>
        </td>
    </tr>
    <tr>
        <td>
            Mot de passe :
        </td>
        <td>
            <input type="password" name="password" >
        </td>
    </tr>
</table>
<input type="submit" value="connexion">
</form>
</body>
</html>