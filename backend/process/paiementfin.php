<?php

require_once '../model/utilisateur.php';
require_once '../model/bdd.php';
require_once '../manager/manager.php';

try {







  $user = new utilisateur([

    "place" => $_POST["place"],
    "tarif" => $_POST["tarif"],               //RENTRER LES VALEURS DANS LES SETTERS
 "prix"=>$_POST["prix"],
    "cb" => $_POST["cb"],

    ]);




    $man = new manager();


    $man->paiement($user);      //UTILISE LA METHOD AJOUT FILM QUI AJOUTE UN FILM


} catch (Exception $e) {
  $_SESSION["erreurcase"] = $e->getMessage();

  if ($_SESSION["erreurcase"] == '') {
  //  header("Location: ../../index.php");
    $_SESSION["erreurcase"] = "reussis";
  }

  else {
    $_SESSION["erreurcase"] = "erreur";
    //header("Location: ../../frontend/view/choixpaiement.php");


  }



}


















 ?>
