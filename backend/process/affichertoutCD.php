<?php


require_once '../model/utilisateur.php';
require_once '../model/bdd.php';
require_once '../manager/manager.php';

try {






$user = new utilisateur([

  "nomcd" => $_POST["nomcd"],                 //RENTRER LES VALEURS DANS LES SETTERS

  ]);



  $man = new manager();
 $_SESSION['stop']=3;
$man->affichertoutcd($user);        //UTILISE METHOD QUI AFFICHE TOUT LES CD



    } catch (Exception $e) {



    header("Location: ../../frontend/view/categoriecd.php");

    }



    header("Location: ../../frontend/view/categoriecd.php");

 ?>
