<!DOCTYPE php>
<php lang="en">
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
<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search">
					<form>
						<div class="form-row">
							<div class="form-group col-md-4">
								<input type="text" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="Titre">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control my-2 my-lg-0" id="inputCategory4" placeholder="Categorie">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control my-2 my-lg-0" id="inputLocation4" placeholder="Auteur">
							</div>
							<div class="form-group col-md-2">

								<button type="submit" class="btn btn-primary">Rechercher</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">
				<div class="product-details">
					<h1 class="product-title">Le Petit Poucet </h1>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-user-o"></i> De :<a href="">Charles Perrault</a></li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Categorie :<a href="">Conte</a></li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Location :<a href="">France</a></li>
						</ul>
					</div>

					<!-- product slider -->
				<!--	<div class="product-slider">
						<div class="product-slider-item my-4" data-image="../../style/images/products/products-1.jpg">
							<img class="img-fluid w-100" src="../../style/images/products/products-1.jpg" alt="product-img">
						</div>
						<div class="product-slider-item my-4" data-image="../../style/images/products/products-2.jpg">
							<img class="d-block img-fluid w-100" src="../../style/images/products/products-2.jpg" alt="Second slide">
						</div>
						<div class="product-slider-item my-4" data-image="../../style/images/products/products-3.jpg">
							<img class="d-block img-fluid w-100" src="../../style/images/products/products-3.jpg" alt="Third slide">
						</div>
						<div class="product-slider-item my-4" data-image="../../style/images/products/products-1.jpg">
							<img class="d-block img-fluid w-100" src="../../style/images/products/products-1.jpg" alt="Third slide">
						</div>
						<div class="product-slider-item my-4" data-image="../../style/images/products/products-2.jpg">
							<img class="d-block img-fluid w-100" src="../../style/images/products/products-2.jpg" alt="Third slide">
						</div>
					</div>-->
					<!-- product slider -->

					<div class="content mt-5 pt-5">
						<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
								 aria-selected="true">Details du produit</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
								 aria-selected="false">Specificité</a>
							</li>

						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<h3 class="tab-title">Description du produit</h3>
								<p>Le Petit Poucet est un conte appartenant à la tradition orale,
                   retranscrit et transformé par Charles Perrault en France et paru dans Les Contes de ma mère l'Oye, en 1697.
                   C'est également le nom du personnage principal de ce conte.  </p>

								<iframe width="100%" height="400" src="https://fr.wikipedia.org/wiki/Le_Petit_Poucet#/media/Fichier:Poucet9.jpg"
								 frameborder="0" allowfullscreen></iframe>
								<p></p>
								<p>Un bûcheron et sa femme n'ont plus de quoi nourrir leurs sept garçons. Un soir, alors que les enfants dorment, les parents se résignent, la mort dans l'âme, à les perdre dans la forêt. Heureusement, le plus petit de la fratrie, âgé de sept ans, surnommé Petit Poucet en raison de sa petite taille, espionne la conversation. Prévoyant, il se munit de petits cailloux blancs qu'il laissera tomber un à un derrière afin que lui et ses frères puissent retrouver leur chemin. Le lendemain, le père met son sinistre plan à exécution. Mais le Petit Poucet et ses frères regagnent vite leur logis grâce aux cailloux semés en chemin. Les parents sont heureux de les revoir car, entre-temps, le seigneur du village avait enfin remboursé aux bûcherons l'argent qu'il leur devait.  </p>

							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<h3 class="tab-title">Specificité du produit</h3>
								<table class="table table-bordered product-table">
                  <tbody>
                    <tr>
                      <td>Prix</td>
                      <td>4€</td>
                    </tr>
                    <tr>
                      <td>Ajouté le :</td>
                      <td>26th Decembre</td>
                    </tr>
                    <tr>
                      <td>Pays</td>
                      <td>France</td>
                    </tr>
                    <tr>
                      <td>Editeur</td>
                      <td>Baudelair</td>
                    </tr>
                    <tr>
                      <td>Condition</td>
                      <td>Neuf</td>
                    </tr>
                    <tr>
                      <td>Modele</td>
                      <td>2017</td>
                    </tr>
                    <tr>
                      <td>Lieux:</td>
                      <td>Dugny</td>
                    </tr>
                    <tr>
                      <td>Temps d'emprunt</td>
                      <td>23 jours</td>
                    </tr>
                  </tbody>
								</table>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget price text-center">
						<h4>Disponibilité :</h4>
						<p>Disponible</p>
					</div>
					<!-- User Profile widget -->
					<div class="widget user text-center">
						<img class="rounded-circle img-fluid mb-5 px-5" src="../../style/images/user/CP-1.jpg" alt="">
						<h4><a href="">Charles Perrault</a></h4>
						<p class="member-time">Date de publication originale : 1697</p>
						<!--<a href="">See all ads</a>-->
						<ul class="list-inline mt-20">
							<!--<li class="list-inline-item"><a href="" class="btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">Contact</a></li>-->
							<li class="list-inline-item"><a href="" class="btn btn-offer d-inline-block btn-primary ml-n1 my-1 px-lg-4 px-md-3">Reserver</a></li>
						</ul>
					</div>
					<!-- Rate Widget -->
					<div class="widget rate">
						<!-- Heading -->
						<h5 class="widget-header text-center">Noter
							<br>
							ce produit</h5>
						<!-- Rate -->
						<div class="starrr"></div>
					</div>
					<!-- Safety tips widget -->
				<!--	<div class="widget disclaimer">
						<h5 class="widget-header">Safety Tips</h5>
						<ul>
							<li>Meet seller at a public place</li>
							<li>Check the item before you buy</li>
							<li>Pay only after collecting the item</li>
							<li>Pay only after collecting the item</li>
						</ul>
					</div>-->
					<!-- Coupon Widget -->

				</div>
			</div>

		</div>
	</div>
	<!-- Container End -->
</section>
<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="../../style/images/logo.png" alt="">
          <!-- description -->
          <p class="alt-color"> La Bibliothèque de Dugny propose un grand nombre de livres de plusieurs catégories différentes
            accessible simplement et rapidement en quelques cliques.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Pages du site</h4>
          <ul>
            <li><a href="recherche.php">Recherche</a></li>
            <li><a href="categorie.php">Categories</a></li>
            <li><a href="about-us.php">A propos</a></li>
            <li><a href="contact-us.php">Contact</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">

      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <div class="mobile d-flex">
            <a href="">
              <!-- Icon -->
              <img src="../../style/images/footer/phone-icon.png" alt="mobile-icon">
            </a>
            <p>Installer notre application Bibliothèque de Dugny (bientot Disponible)</p>
          </div>
          <div class="download-btn d-flex my-3">
            <img src="../../style/images/apps/google-play-store.png" class="img-fluid ml-3" alt="">

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-vimeo" href=""></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <!-- include de php redondant -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>
<?php include('../include_frontends/plugins.php'); ?>
</body>

</php>
