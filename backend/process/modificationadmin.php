<?php

require_once '../model/utilisateur.php';
require_once '../model/bdd.php';
require_once '../manager/manager.php';

try {

//modification role par admin

  $user = new utilisateur([

    "idmodif" => $_POST["modif"],
    ]);

//instantiation
    $man = new manager();

    $man->selectadmin($user);     //permet de s'electioner un utilisateur puis de modifier 

    $man->modifadmin($user);




} catch (Exception $e) {
  $_SESSION["erreurcase"] = $e->getMessage();


  header("Location: ../../frontend/view/admin.php");

}



  header("Location: ../../frontend/view/admin.php");




 ?>
