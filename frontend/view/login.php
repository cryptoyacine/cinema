<!DOCTYPE PHP>
<PHP lang="fr">
<head>
    <!-- Demarrage session avec un test pour savoir si on est connecté -->
<?php

session_start();

if (isset($_SESSION['id'])) {
  header("Location: 404.php ");
}

else{

?>

<!-- SITE TITTLE -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bibliothèque de Dugny</title>
<!-- include de php redondant -->
<?php include '../include_frontends/styles.php';  ?>
</head>

<body class="body-wrapper">


<section>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light navigation">
        <a class="navbar-brand" href="../../index.php">
          <img src="../../style/images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto main-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="../../index.php">Accueil</a>
            </li>
              <!--  test pour savoir si on est connecté -->
              <?php if (isset($_SESSION["id"])){   ?>
            <li class="nav-item dropdown dropdown-slide">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">
                Profile<span><i class="fa fa-angle-down"></i></span>
              </a>

              <!-- Dropdown list -->
              <div class="dropdown-menu">
                <a class="dropdown-item" href="user-profile.php">Ton profile</a>
                <a class="dropdown-item" href="reservation.php">Tes reservations</a>
              </div>
            </li>
            <?php } ?>
            <li class="nav-item dropdown dropdown-slide">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">
                Nos livres<span><i class="fa fa-angle-down"></i></span>
              </a>

              <!-- Dropdown list -->
              <div class="dropdown-menu">
                <a class="dropdown-item" href="categorieCD.php">Categorie CD</a>
                <a class="dropdown-item" href="categoriefilm.php">Categorie Film</a>
                <a class="dropdown-item" href="categorielivre.php">Categorie Livre</a>
              </div>
            </li>
            <li class="nav-item dropdown dropdown-slide">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pages <span><i class="fa fa-angle-down"></i></span>
              </a>

              <!-- Dropdown list -->
              <div class="dropdown-menu">
                <a class="dropdown-item" href="about-us.php">A propos</a>
                <a class="dropdown-item" href="contact-us.php">Contact</a>

              </div>
            </li>
  <!--  test pour savoir si on est admin -->
            <?php if (isset($_SESSION['role']) and $_SESSION['role']==1) {

             ?>

                        <li class="nav-item dropdown dropdown-slide">
                          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin <span><i class="fa fa-angle-down"></i></span>
                          </a>


                          <!-- Dropdown list -->
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="admin.php">Admin  </a>
                              <a class="dropdown-item" href="adminajout.php">Admin ajout  </a>
                              <a class="dropdown-item" href="adminajoutlivre.php">Admin ajout livre </a>
                              <a class="dropdown-item" href="adminajoutfilm.php">Admin ajout film </a>
                              <a class="dropdown-item" href="adminajoutcd.php">Admin ajout cd </a>
                          </div>
                        </li>

              <?php }  ?>
            </ul>
           <ul class="navbar-nav ml-auto mt-10">
              <?php if (isset($_SESSION["id"])){   ?>

                <li class="nav-item">
                  <a class="nav-link login-button" href="../../backend/process/deconnexion.php">Deconnexion</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link text-white add-button" href="reservation.php"><i class="fa fa-plus-circle"></i> Ajouter au panier </a>
               </li>
              <?php }  else {  ?>

             <li class="nav-item">
               <a class="nav-link login-button" href="register.php">Inscription</a>
             </li>

            <!--  <li class="nav-item">
               <a class="nav-link login-button" href="user-profile.php"><i class="fa fa-plus-circle"></i> Mon compte</a>
             </li>-->
          <?php } ?>
           </ul>
         </div>
       </nav>
     </div>
   </div>
 </div>
 </section>
<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">

                    <h3 class="bg-gray p-4">Se connecter</h3>

                        <fieldset class="p-4">

                    <form action= "../../backend/process/connexion.php" method= "post">

                            <input type="text" name="username"
                            <?php
                            if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevide" or  isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "erreur" ){ echo'placeholder="Veuillez rentrer un nom d\'utilisateur valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                            if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "uservide") { echo'placeholder="Veuillez rentrer un nom d\'utilisateur valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                            else { echo 'placeholder="Utilisateur" class="border p-3 w-100 my-2" />';} ?>
                            <input type="password" name="password"
                            <?php
                            if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevide" or isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"]){ echo'placeholder="Veuillez rentrer un mot de passe valide*"'  ; echo 'class="form-controlred p-3 w-100 my-2"';}
                            if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "passwordvide") { echo'placeholder="Veuillez rentrer un mot de passe valide*"'; echo 'class="form-controlred p-3 w-100 my-2"';;}
                            else {
                              echo 'placeholder="Mot de passe" class="form-control p-3 w-100 my-2" />';}
                              ?>




                            <div class="loggedin-forgot">
                                    <input type="checkbox" id="keep-me-logged-in">
                                    <label for="keep-me-logged-in" class="pt-3 pb-2">Rester connecter</label>
                            </div>
                              <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">Se connecter</button>
</form>
                          <!-- <a class="mt-3 d-block  text-primary" href="#">Mot de passe oublié?</a>-->
                            <a class="mt-3 d-inline-block text-primary" href="register.PHP">S'inscrire</a>
                        </fieldset>

                </div>
            </div>
        </div>
    </div>
</section>

<!--============================
=            Footer            =
=============================-->
<?php include('../include_frontends/footers.php'); ?>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>
<?php include('../include_frontends/plugins.php'); ?>
</body>
<?php $_SESSION["erreurcase"] = ''; }?>

</PHP>
