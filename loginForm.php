

<?php
  require_once 'connexion.php';


  if(isset($_POST['Connexion']))
  {

    $uname = $_POST['txt_username'];
    $upass = $_POST['pwd'];
      if($user->login($uname,$upass))
        {
            $user->redirect('home.php');
        }
      else
        {
      $error = "Identifiant incorrect !";
 }
 }
 ?>


<html>
<head>
<title>Formulaire d'authentification</title>
<link rel="stylesheet" href="bootstrap-3.1\css\bootstrap.min.css" media="screen" title="no title">
<link rel="stylesheet" href="css\style.css" media="screen" title="no title">
</head>

<body>
  <?php if (isset($error))
    echo $error;
  ?>
  <br>
  <div class = "container">
  	<div class="wrapper">
  		<form action="" method="post" name="Login_Form" class="form-signin">
  		    <h3 class="form-signin-heading">S'identifier</h3>
  			  <hr class="colorgraph"><br>

  			  <input type="text" class="form-control" name="txt_username" placeholder="Username" required="" autofocus="" />
  			  <input type="password" class="form-control" name="pwd" placeholder="Password" required=""/>

  			  <button class="btn btn-lg btn-primary btn-block"  name="Connexion" value="Login" type="Submit">Login</button>
  	</div>
  </div>
</body>
</html>
