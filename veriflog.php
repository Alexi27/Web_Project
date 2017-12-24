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

if(!isset($_POST['pseudo']) OR !isset($_POST['password'])) { // on check si les champs ne sont pas vides
    die('Erreur : Les champs doivent être renseigné');
}

if(strlen($_POST['pseudo']) == 0 OR strlen($_POST['password']) == 0) { // on check si les champs ne sont pas vides
    die('Erreur : Les champs doivent être renseigné');
}

$username = $_POST['pseudo'];
$password = $_POST['password'];

$sql = 'SELECT pseudo, password FROM inscription WHERE pseudo = "'. $username .'" LIMIT 1;';// mettre les gros "" pour les chaines de caractere

$response = $bdd->query($sql);
$response = $response->fetch();

if($response == false) { // si utilisateur non trouvé dans la Bd
    die('Aucun utilisateur correspondant trouver');
}

if($response['password'] != $password) { // Si MDP faux
    die('Mot de passe incorrecte');
}

echo "connecter";

?>