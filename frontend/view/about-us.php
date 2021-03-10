<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Demarrage session-->
  <?php session_start(); ?>

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
<!--================================
=            Page Title            =
=================================-->
<section class="page-title">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<!-- Title text -->
			<h3>A propos de nous</h3>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img">
                     <img src="../../style/images/user/596-5961334_kono-dio-da-meme-template-hd-png-download.png" class="img-fluid w-100 rounded" alt="">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <div class="about-content">
                    <h3 class="font-weight-bold">Introduction</h3>
                    <p>Retrouvez des milliard de livres comprenant <br> un grand nombre de thèmes littéraire différents</p>
                     <h3 class="font-weight-bold">Que proposons nous</h3>
                     <p>La Bibliothèque de Dugny propose un grand nombre de livres de plusieurs catégories différentes
                       accessible simplement et rapidement en quelques cliques.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading text-center text-capitalize font-weight-bold py-5">
                    <h2>Notre équipe</h2>
                </div>

  </div>
            <div class="col-lg-6 col-sm-9">
                <div class="card my-3 my-lg-0">
                     <img class="card-img-top" src="../../style/images/user/596-5961334_kono-dio-da-meme-template-hd-png-download.png" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                      <h5 class="card-title">Jérémie LELONG</h5>
                      <p class="card-text">FONDATEUR/PDG</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-9">
                <div class="card my-3 my-lg-0">
                     <img class="card-img-top" src="../../style/images/user/596-5961334_kono-dio-da-meme-template-hd-png-download.png" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                      <h5 class="card-title">Yacine TABTI</h5>
                      <p class="card-text">FONDATEUR/PDG</p>
                    </div>
                </div>
            </div>

    </div>
  </div>
</section>

<section class="section bg-gray">
    <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-7 my-lg-2 my-4">

                <div class="counter-content text-center bg-light py-4 rounded">
                    <i class="fa fa-user-o d-block"></i>
                    <span class="counter my-2 d-block" data-count="1013">0</span>
                    <h5>Membres actifs</h5>
                </div>
            </div>
              <div class="col-lg-4 col-sm-7 my-lg-1 my-4">
                <div class="counter-content text-center bg-light py-4 rounded">
                        <i class="fa fa-bar-chart d-block"></i>
                    <span class="counter my-2 d-block" data-count="2413">0</span>
               <h5>Nombre d'article</h5>
                </div>
            </div>
              <div class="col-lg-4 col-sm-7 my-lg-1 my-4">
                <div class="counter-content text-center bg-light py-4 rounded">
                  <i class="fa fa-eur d-block"></i>
                 <span class="counter my-2 d-block">Pas un rond</span>
                 <h5>Revenue</h5>
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

</html>
