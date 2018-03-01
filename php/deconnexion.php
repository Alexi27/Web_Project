<?php
session_start(); // On detruit la session la session

session_destroy(); // On detruit la session la session
?>
<!DOCTYPE html>
<?php
// Redirection vers la page principal
header('Location: index.php?err=2');
?> 
