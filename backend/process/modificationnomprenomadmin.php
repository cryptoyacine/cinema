<?php

require_once '../model/utilisateur.php';
require_once '../model/bdd.php';
require_once '../manager/manager.php';

try {

//changement du prenom de l'utilisateur par admin

  $user = new utilisateur([


    "nom" => $_POST["nom"],
    "prenom" => $_POST["prenom"],

    ]);


//instantiation

    $man = new manager();

    $man->modificationnomprenomadmin($user); //instancie method qui permet a un admin de modifier le nom et prenom d'un utilisateur




} catch (Exception $e) {


  $_SESSION["erreurcase"] = $e->getMessage();

 header("Location: ../../frontend/view/admin.php");
}

header("Location: ../../frontend/view/admin.php");










 ?>
