<?php

require_once '../model/utilisateur.php';
require_once '../model/bdd.php';
require_once '../manager/manager.php';

try {







  $user = new utilisateur([

    "cdth" => $_POST["cdth"],
    "cdaut" => $_POST["cdaut"],
    "cdnom" => $_POST["cdnom"],                        //RENTRER LES VALEURS DANS LES SETTERS

    ]);



    $man = new manager();


    $man->adminajoutcd($user);           //UTILISE LA METHOD AJOUT CD QUI AJOUTE UN CD


} catch (Exception $e) {
  $_SESSION["erreurcase"] = $e->getMessage();

  if ($_SESSION["erreurcase"] == '') {
    header("Location: ../../frontend/view/adminajoutcd.php");
    $_SESSION["erreurcase"] = "reussis";
  }



}
header("Location: ../../frontend/view/adminajoutcd.php");

















 ?>
