<?php

require_once '../model/utilisateur.php';
require_once '../model/bdd.php';
require_once '../manager/manager.php';

try {

//Changement pseudo utilisateur par admin

  $user = new utilisateur([

    "username" => $_POST["username"],

    ]);

//instantiation
    $man = new manager();

    $man->modificationusernameadmin($user); //instancie method qui permet a un admin de modifier le username d'un utilisateur




} catch (Exception $e) {
  $_SESSION["erreurcase"] = $e->getMessage();



  header("Location: ../../frontend/view/admin.php");

}



  header("Location: ../../frontend/view/admin.php");








 ?>
