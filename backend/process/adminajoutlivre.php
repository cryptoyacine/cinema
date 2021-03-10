<?php

require_once '../model/utilisateur.php';
require_once '../model/bdd.php';
require_once '../manager/manager.php';

try {







  $user = new utilisateur([

    "livth" => $_POST["livth"],
    "livaut" => $_POST["livaut"],
    "livnom" => $_POST["livnom"],              //RENTRER LES VALEURS DANS LES SETTERS


    ]);



    $man = new manager();


    $man->adminajoutlivre($user);        //UTILISER LA METHOD QUI AJOUTE DES LIVRES


} catch (Exception $e) {
  $_SESSION["erreurcase"] = $e->getMessage();

  if ($_SESSION["erreurcase"] == '') {
    header("Location: ../../frontend/view/adminajoutlivre.php");
    $_SESSION["erreurcase"] = "reussis";
  }



}
header("Location: ../../frontend/view/adminajoutlivre.php");

















 ?>
