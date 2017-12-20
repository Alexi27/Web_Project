<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'Alexi27', 'Alexi2427');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//on compare si le peseudo est dans la db
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (dateetheure, pseudo, message) VALUES (CURRENT_TIMESTAMP(), ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>