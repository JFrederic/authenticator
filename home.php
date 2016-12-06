<?php
   require_once 'connexion.php';


    if(!$user->is_loggedin()){
      $user->redirect('loginForm.php');
    }
    if (isset($_POST['msg'])) {
      $user->logout();
    }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <h1>Wp ! Vous êtes connécté</h1>
    <a href="logout.php" name="deco">Deconnexion</a>
  </body>
</html>
