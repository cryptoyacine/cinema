<?php


require_once '../model/utilisateur.php';
require_once '../model/bdd.php';
require_once '../manager/manager.php';

try {






$user = new utilisateur([

  "nomlivre" => $_POST["nomlivre"],              //RENTRER LES VALEURS DANS LES SETTERS

  ]);


  $man = new manager();
 $_SESSION['stop']=2;
$man->affichertoutlivre($user);        //UTILISE METHOD QUI AFFICHE TOUT LES LIVRES



    } catch (Exception $e) {



    header("Location: ../../frontend/view/categorielivre.php");

    }



    header("Location: ../../frontend/view/categorielivre.php");

 ?>
