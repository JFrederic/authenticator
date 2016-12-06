<?php

// Connexion à la base de donnée
  session_start();
  $host = "localhost";
  $login = "root";
  $password = "simplon974";
  $db_name = "authentificator";

  try {
    $bdd = new PDO("mysql:host={$host};dbname={$db_name};charset=utf8",$login,$password);

  }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }

  require_once 'User.php';
  $user = new User($bdd);

   ?>
