<?php

require_once '../model/utilisateur.php';
require_once '../model/bdd.php';
require_once '../manager/manager.php';

try {

//Changement role par l'admin

  $user = new utilisateur([

    "roleadminmodif" => $_POST["roleadminmodif"],

    ]);

//instantiation
    $man = new manager();

    $man->modificationroleadmin($user); //instancie method qui permet a un admin de modifier le role d'un utilisateur




} catch (Exception $e) {
  $_SESSION["erreurcase"] = $e->getMessage();



  header("Location: ../../frontend/view/admin.php");

}



  header("Location: ../../frontend/view/admin.php");








 ?>
