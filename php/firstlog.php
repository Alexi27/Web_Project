<?php
   session_start(); // On démarre la session 
   ?>
<html>
   <body>
      <?php // Connexion à la base de données
         $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'Alexi27', 'Alexi2427');
         
         // On ajoute les infos a la bd 
         $req = $bdd->prepare('INSERT INTO inscription(pseudo, mail, password, nom, prenom, genre, tel, birthday) VALUES(?,?,?,?,?,?,?,?)');//les '?' sont les zones de remplissage 
         $req->execute(array($_POST['pseudo'], $_POST['mail'], $_POST['password'],$_POST['nom'], $_POST['prenom'], $_POST['genre'],$_POST['tel'],$_POST['birthday']));//ou viennent se loger les variables.
         
         echo 'Information bien enregistré!';
         
         ?>
      <form action="veriflog.php" method="post">
         <table>
            <tr>
               <td>
                  pseudo :
               </td>
               <td>
                  <input class="pseudo" type="text" name="pseudo" value=<?php echo $_POST['pseudo'];?>> <!-- auto remplissage avec la valeur du formulaire-->
                  <br>
               </td>
            </tr>
            <tr>
               <td>
                  Mot de passe :
               </td>
               <td>
                  <input type="password" name="password" value=<?php echo $_POST['password'];?>> <!-- auto remplissage avec la valeur du formulaire-->
               </td>
            </tr>
         </table>
         <input type="submit" value="connexion">
      </form>
   </body>
</html>