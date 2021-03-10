<!DOCTYPE php>
<php lang="en">
<head>

  <!-- Demarrage session avec un test pour savoir si on est connecté -->
  <?php  session_start(); if (isset($_SESSION["id"]) ) {

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
                  <a class="nav-link login-button" href="backend/process/deconnexion.php">Deconnexion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white add-button" href="reservation.php"><i class="fa fa-plus-circle"></i> Ajouter au panier </a>
                </li>
              <?php }  else {  ?>

              <li class="nav-item">
                <a class="nav-link login-button" href="login.php">Connection</a>
              </li>
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
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user">
						<!-- User Image -->
						<div class="image d-flex justify-content-center">
							<img src="../../style/images/user/596-5961334_kono-dio-da-meme-template-hd-png-download.png" alt="" class="">
						</div>
						<!-- User Name -->
						<h5 class="text-center"><?php echo $_SESSION["nom"]?></h5>
					</div>
          <!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
              <li>
                <a href="../../backend/process/deconnexion.php"><i class="fa fa-cog"></i> Deconnexion</a>
              </li>
              <li>
                <a href="" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Supprimer le compte</a>
              </li>
            </ul>
          </div>
          <!-- delete-account modal -->
											  <!-- delete account popup modal start-->
                <!-- Modal -->
                <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                        <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
                        <h6 class="py-2">Voulez vous vraiment supprimer votre compte?</h6>
                        <p>Ce procédé est irreversible.</p>

                      </div>
                      <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-lg-between justify-content-center">

                        <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>
                        <form   action="../../backend/process/supprimer.php" method="post" >
                        <button type="submit" type="button" class="btn btn-danger">Supprimer</button></form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- delete account popup modal end-->
					<!-- delete-account modal -->

				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Edit Profile Welcome Text -->
				<div class="widget welcome-message">
					<h2>Modifier le profile</h2>
					<p>Vous pouvez modifier vos informations personnels ici</p>
				</div>
				<!-- Edit Personal Info -->
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info">
							<h3 class="widget-header user">Modifier les informations personnels</h3>
							<form method="post" action="../../backend/process/modificationnomprenom.php">
								<!-- First Name -->
								<div class="form-group">
									<label for="first-name">Prénom actuel : <?php  echo  $method = ucfirst($_SESSION["prenom"]);  ?></label>
									<input type="text" name = "prenom"
                  <?php
                  //gestion d'erreur des cases
                  if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "caseprenomvide"){ echo'placeholder="Veuillez rentrer un prenom valide*"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
                  else { echo 'placeholder="" class="form-control  p-3 w-100 my-2 " ';} ?> />


								</div>
								<!-- Last Name -->
								<div class="form-group">
									<label for="last-name">Nom actuel : <?php echo $method = ucfirst($_SESSION["nom"]); ?></label>
                  <input type="text" name = "nom"
                  <?php
//gestion d'erreur des cases
                  if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "caseprenomvide"){ echo'placeholder="Veuillez rentrer un nom valide*"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
                  else { echo 'placeholder="" class="form-control  p-3 w-100 my-2 " ';} ?> />



								</div>

								<!-- Zip Code -->
							<!--	<div class="form-group">
									<label for="zip-code">Zip Code</label>
									<input type="text" class="form-control" id="zip-code">
								</div>-->
								<!-- Submit button -->
								<button name="typemodif" value="changernomprenom" type="submit" class="btn btn-transparent">Sauvegarder les modifications</button>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Password -->
					<div class="widget change-password">
						<h3 class="widget-header user">Modifier le mot de passe</h3>
						<form method="post" action="../../backend/process/modificationpassword.php">
							<!-- Current Password -->
							<div class="form-group">
								<label for="current-password">Mot de passe actuel</label>
								<input type="password" name="password"  <?php
//gestion d'erreur des cases
                  if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasepasswordvide"){ echo'placeholder="Veuillez rentrer un mot de passe valide *"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
                  if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "passwordvide") { echo'placeholder="Veuillez rentrer un mot de passe valide*"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
                    if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "mauvaispassword") { echo'placeholder="Veuillez rentrer le bon mot de passe"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}

                  else { echo 'placeholder="" class="form-control  p-3 w-100 my-2"';} ?> />
							</div>
							<!-- New Password -->
							<div class="form-group">
								<label for="new-password">Nouveau mot de passe</label>
								<input type="password" name="passwordmodif"
                <?php
//gestion d'erreur des cases
                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasepasswordvide"){ echo'placeholder="Veuillez rentrer un mot de passe valide *"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "passwpordmodifvide") { echo'placeholder="Veuillez rentrer un mot de passe valide*"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "passwpordmodifvide") { echo'placeholder="Veuillez rentrer un mot de passe valide*"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "passwmordmodifconfmodifvide") { echo'placeholder="placeholder="Veuillez rentrer un mot de passe valide*"'; echo 'class="form-controlred p-3 w-100 my-2/>"';}
if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "correspondpas") { echo'placeholder="Les mots de passe rentrés ne sont pas identiques*"'; echo 'class="form-controlred p-3 w-100 my-2/>"';}
                else { echo 'placeholder="" class="form-control  p-3 w-100 my-2"';} ?> />
							</div>

							<!-- Confirm New Password -->
							<div class="form-group">
								<label for="confirm-password">Confirmer le nouveau mot de passe</label>
								<input type="password" name="passwordmodifconf"
                <?php

                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasepasswordvide"){ echo'placeholder="Veuillez rentrer un mot de passe valide *"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "passwpordmodifconfvide") { echo'placeholder="Veuillez rentrer un mail valide*"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "correspondpas") { echo'placeholder="Les mots de passe rentrés ne sont pas identiques*"'; echo 'class="form-controlred p-3 w-100 my-2/>"';}
                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "passwmordmodifconfmodifvide") { echo'placeholder="placeholder="Veuillez rentrer un mot de passe valide*"'; echo 'class="form-controlred p-3 w-100 my-2/>"';}
                else { echo 'placeholder="" class="form-control  p-3 w-100 my-2"';} ?> />
							</div>
							<!-- Submit Button -->
							<button name="typemodif" value="changermotdepasse" type="submit" class="btn btn-transparent">Modifier le mot de passe</button>
						</form>
					</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Email Address -->
					<div class="widget change-email mb-0">
						<h3 class="widget-header user">Changer l'adresse mail</h3>
						<form action="../../backend/process/modificationmail.php" method="post">
							<!-- Current Password -->
							<div class="form-group">
								<label for="current-email">Mail actuel</label>
								<input type="email" name="mail"
                <?php

                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasemailvide"){ echo'placeholder="Veuillez rentrer un mail valide*"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "mailvide") { echo'placeholder="Veuillez rentrer un mail valide*"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
                else { echo 'placeholder="" class="form-control  p-3 w-100 my-2 " ';} ?> />

							</div>
							<!-- New email -->
							<div class="form-group">
								<label for="new-email">Nouveau Mail</label>
								<input type="email" name="mailmodif"
                <?php

                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasemailvide"){ echo'placeholder="Veuillez rentrer un mail valide*"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "mailmodifvide") { echo'placeholder="Veuillez rentrer un mail valide*"';  echo 'class="form-controlred  p-3 w-100 my-2"' ;}
                else { echo 'placeholder="" class="form-control  p-3 w-100 my-2"';} ?> />
							</div>
							<!-- Submit Button -->
							<button name="typemodif" value="changermail" type="submit" class="btn btn-transparent">Changer le mail</button>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->
<!-- include de php redondant -->
<?php include('../include_frontends/footers.php'); ?>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>
<?php include('../include_frontends/plugins.php'); ?>
</body>
<?php }   else {  $_SESSION["erreurcase"] = '';
header("Location: 404.php ");}?>

</php>
