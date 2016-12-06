<?php
//require_once 'connexion.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap-3.1\css\bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css\style.css" media="screen" title="no title">
  </head>
  <body>
    <div class = "container">
      <div class="wrapper">
        <form action="auth.php" method="post" name="Login_Form" class="form-signin">
            <h3 class="form-signin-heading">S'identifier</h3>
            <hr class="colorgraph"><br>

            <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Password" required=""/>

            <button class="btn btn-lg btn-primary btn-block"  name="envoi" value="Login" type="Submit">Login</button>
      </div>
    </div>
  </body>
</html>
