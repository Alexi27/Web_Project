<?php
session_start(); // On démarre la session 

<!DOCTYPE html>
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
$sql = 'SELECT id,pseudo FROM inscription WHERE pseudo = "'. $_POST['pseudo'] .'" LIMIT 1;';

$response = $bdd->query($sql);
$response = $response->fetch();

if($response == false) { // si utilisateur non trouvé dans la Bd
    die('Aucun utilisateur correspondant trouver');
}
// Insertion du message avec requête préparée
$req = $bdd->prepare('INSERT INTO minichat (dateetheure,ID_proprietaire, pseudo, message) VALUES (CURRENT_TIMESTAMP(),?, ?, ?)');
$req->execute(array($response['id'], $_POST['pseudo'], $_POST['message']));

// Redirection vers la page minichat
header('Location: minichat.php');
?>