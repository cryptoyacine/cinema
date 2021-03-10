<?php


require_once '../model/utilisateur.php';
require_once '../model/bdd.php';
require_once '../manager/manager.php';

try {



    $man = new manager();
    $man->affichernom($user);    //UTILISER LA QUI AFFICHE LES NOM
