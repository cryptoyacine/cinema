<?php

require_once '../model/utilisateur.php';

require_once '../model/bdd.php';
require_once '../manager/manager.php';

//desincription de l'utilisateur
try {

session_start();

  $user = new utilisateur([
    "id" =>   $_SESSION['id'],

  ]);

//instantiation supprimer

  $man = new manager();

  $man->supprimer($user); //permet de supprimer son compte


} catch (Exception $e) {



header("Location: ../../backend/process/deconnexion.php");


}


header("Location: ../../backend/process/deconnexion.php");







 ?>
