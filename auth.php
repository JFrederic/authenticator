<?php

$username = $_POST['username'];
$password = $_POST['password'];

  $user = 'root';
  $pass = 'simplon974';
  $db = new PDO('dblib:host=localhost;dbname=authentificator;charset=UTF-8', $user, $pass);


  if (isset($_POST['envoi'])) {
    $requete = "SELECT * FROM users
    WHERE  user_name = '".$user."'
    AND user_pass = '".$pass."' ";


    mysqli_query($link,$requete) or exit(mysqli_error());
    if ($password == $_POST['password']) {
      header("Location:main.php");
    }
  }

  mysqli_close($link);





 ?>
