<?php


require_once '../model/utilisateur.php';
require_once '../model/bdd.php';
require_once '../manager/manager.php';

try {






$user = new utilisateur([

  "livnom" => $_POST["LivNom"],               //RENTRER LES VALEURS DANS LES SETTERS

  ]);


  $man = new manager();
 $_SESSION['stop']=4;
$man->afficherlivre($user);       //UTILISE METHOD QUI AFFICHE LIVRE CHOISIS



    } catch (Exception $e) {



   header("Location: ../../frontend/view/categorielivre.php");

    }



   header("Location: ../../frontend/view/categorielivre.php");
 ?>
