<!DOCTYPE PHP>
<PHP lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Classimax</title>
<!-- include de php redondant -->
<?php include '../include_frontends/styles.php';  ?>
</head>

<body class="body-wrapper">

<!-- Demarrage session avec un test pour savoir si on est connecté et si on est admin -->
<section>
  <?php session_start();
if (isset($_SESSION['role']) and $_SESSION['role'] == 1 ){

   ?>
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
 								<a class="nav-link login-button" href="login.php">Connection</a>
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
                    <div class="border border">
                      <?php if ( $_SESSION["erreurcase"] == "reussis"){ ?>
                        <h3 class="bg-gray p-4">Ajout réussi </br> >Ajouter un autre livre : </h3>
                      <?php }  else {?>
                      <h3 class="bg-gray p-4">Ajouter un livre : </h3>
                    <?php }?>
                        <form action="../../backend/process/adminajoutlivre.php" method= "post">
                            <fieldset class="p-4">


                              <input type="text" name="livnom"
                              <?php


                                                            if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevide"){ echo'placeholder="Veuillez rentrer un nom valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                                                              if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevidesaufrefliv"){ echo'placeholder="Veuillez rentrer nom de livre valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                                                              if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevidesauflivaut"){ echo'placeholder="Veuillez rentrer nom de livre valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                                                            if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevidesaufreflivetlivaut") { echo'placeholder="Veuillez rentrer nom de livre valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                                                            else { echo 'placeholder="nom du livre*" class="border p-3 w-100 my-2" ';} ?> />

                              <input type="text" name="livaut"
                              <?php

                              if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevide"){ echo'placeholder="Veuillez rentrer un nom valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevidesaufrefliv"){ echo'placeholder="Veuillez rentrer un auteur de livre valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevidesauflivnom"){ echo'placeholder="Veuillez  rentrer un auteur de livre valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                              if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevidesaufreflivetlivnom") { echo'placeholder="Veuillez rentrer  rentrer un auteur de livre valide**"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                              else { echo 'placeholder=" rentrer un auteur de livre valide*" class="border p-3 w-100 my-2" ';} ?> />


                                <div class="form-group">
                                  <label for="current-password">ROLE :
                                    CHOISIR action:
                                                 </br>     </br>     </br>
                                                 <input  type="radio" name="livth" class="form-controlred p-1 w-50 my-1" value="A"
                                         checked></BR></BR></BR>
                                               </>
CHOISIR AVENTURE :</>
                                               <input type="radio" name="livth" class="form-controlred p-1 w-50 my-1" value="AV"
                                               ></BR></BR></BR>
                                              CHOISIR MYSTERE :</>
                                               <input type="radio" name="livth" class="form-controlred p-1 w-50 my-1" value="M"
                                               ></BR></BR></BR>

                                               CHOISIR DRAMA :</>
                                                <input type="radio" name="livth" class="form-controlred p-1 w-50 my-1" value="D"
                                                ></BR></BR></BR>

                                </div>





                                <div class="loggedin-forgot d-inline-flex my-3">
                                        <label for="registering" class="px-2">En vous inscrivant vous acceptez nos <a class="text-primary font-weight-bold" href="terms-condition.PHP">termes et conditions et politique de confidentialité</a></label>
                                </div>
                                <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">S'inscrire</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
      <div class="top-to">
        <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
      </div>
    </footer>

    <!-- JAVASCRIPTS -->
    <script src="../../style/plugins/jQuery/jquery.min.js"></script>
    <script src="../../style/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../../style/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../style/plugins/bootstrap/js/bootstrap-slider.js"></script>
      <!-- tether js -->
    <script src="../../style/plugins/tether/js/tether.min.js"></script>
    <script src="../../style/plugins/raty/jquery.raty-fa.js"></script>
    <script src="../../style/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="../../style/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../../style/plugins/fancybox/jquery.fancybox.pack.js"></script>
    <script src="../../style/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <script src="../../style/plugins/google-map/gmap.js"></script>
    <script src="../../style/js/script.js"></script>

    </body>
<?php $_SESSION["erreurcase"] = ''; } else {
  header("Location: 404.php");
}?>

</PHP>
