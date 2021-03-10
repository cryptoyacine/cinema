<?php

require_once '../model/utilisateur.php';
require_once '../model/bdd.php';
require_once '../manager/manager.php';

try {







  $user = new utilisateur([

    "filmth" => $_POST["filmth"],
    "filmaut" => $_POST["filmaut"],               //RENTRER LES VALEURS DANS LES SETTERS

    "filmnom" => $_POST["filmnom"],

    ]);



    $man = new manager();


    $man->adminajoutfilm($user);      //UTILISE LA METHOD AJOUT FILM QUI AJOUTE UN FILM


} catch (Exception $e) {
  $_SESSION["erreurcase"] = $e->getMessage();

  if ($_SESSION["erreurcase"] == '') {
    header("Location: ../../frontend/view/adminajoutfilm.php");
    $_SESSION["erreurcase"] = "reussis";
  }



}
header("Location: ../../frontend/view/adminajoutfilm.php");

















 ?>
