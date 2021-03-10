<!DOCTYPE php>
<php lang="en">
<head>
  <!-- Demarrage session -->
<?php session_start(); ?>
  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Classimax</title>
<!-- include de php redondant -->
  <?php include 'frontend/include_frontends/stylesindex.php';  ?>
</head>

<body class="body-wrapper">
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="index.php">
						<img src="style/images/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Accueil</a>
							</li>
              <!-- test pour savoir si on est connecté -->
                <?php if (isset($_SESSION["id"])){   ?>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">
                  Profile<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="frontend/view/user-profile.php">Ton profile</a>
									<a class="dropdown-item" href="frontend/view/reservation.php">Tes reservations</a>
								</div>
							</li>
              <?php } ?>
              <li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">
                  Nos livres<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<div class="dropdown-menu">
                  <a class="dropdown-item" href="frontend/view/categorieCD.php">Categorie CD</a>
                  <a class="dropdown-item" href="frontend/view/categoriefilm.php">Categorie Film</a>
                  <a class="dropdown-item" href="frontend/view/categorielivre.php">Categorie Livre</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages <span><i class="fa fa-angle-down"></i></span>
								</a>


								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="frontend/view/about-us.php">A propos</a>
									<a class="dropdown-item" href="frontend/view/contact-us.php">Contact</a>

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
                <a class="dropdown-item" href="frontend/view/admin.php">Admin  </a>
                  <a class="dropdown-item" href="frontend/view/adminajout.php">Admin ajout  </a>
                  <a class="dropdown-item" href="frontend/view/adminajoutlivre.php">Admin ajout livre </a>
                  <a class="dropdown-item" href="frontend/view/adminajoutfilm.php">Admin ajout film </a>
                  <a class="dropdown-item" href="frontend/view/adminajoutcd.php">Admin ajout cd </a>
              </div>
            </li>

  <?php }  ?>
</ul>

						<ul class="navbar-nav ml-auto mt-10">
              <!-- test pour savoir si on est connecté  -->
              <?php if (isset($_SESSION["id"])){   ?>

                <li class="nav-item">
                  <a class="nav-link login-button" href="backend/process/deconnexion.php">Deconnexion</a>
                </li>
                <li class="nav-item">
  								<a class="nav-link text-white add-button" href="frontend/view/reservation.php"><i class="fa fa-plus-circle"></i> Ajouter au panier </a>
  							</li>
              <?php }  else {  ?>

							<li class="nav-item">
								<a class="nav-link login-button" href="frontend/view/login.php">Connection</a>
							</li>
              <li class="nav-item">
								<a class="nav-link login-button" href="frontend/view/register.php">Inscription</a>
							</li>

            <!--  <li class="nav-item">
								<a class="nav-link login-button" href="frontend/view/user-profile.php"><i class="fa fa-plus-circle"></i> Mon compte</a>
							</li>-->
          <?php } ?>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Bibliothèque de Dugny </h1>
					<p>Retrouvez des milliard de livres comprenant <br> un grand nombre de thèmes littéraire différents</p>
					<div class="short-popular-category-list text-center">
						<h2>Catégories Populaires</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="frontend/view/recherche.php"><i class="fa fa-wheelchair-alt"></i> Action</a></li>
							<li class="list-inline-item">
								<a href="frontend/view/recherche.php"><i class="fa fa-compass"></i> Aventure</a>
							</li>
							<li class="list-inline-item">
								<a href="frontend/view/recherche.php"><i class="fa fa-map-pin"></i> Mystère</a>
							</li>
							<li class="list-inline-item">
								<a href="frontend/view/recherche.php"><i class="fa fa-frown-o"></i> Drama</a>
							</li>
						</ul>
					</div>

				</div>


			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Nouveautés</h2>
					<p>Voici les dernières nouveautés.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="frontend/view/singlepp.php">
				<img class="card-img-top img-fluid" src="style/images/products/Le-Petit-Poucet.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="frontend/view/singlepp.php">Le Petit Poucet</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="frontend/view/categorie.php"><i class="fa fa-folder-open-o"></i>Conte</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a><i class="fa fa-calendar"></i>1697</a>
		    	</li>
		    </ul>
		    <p class="card-text">Le Petit Poucet est un conte appartenant à la tradition orale, retranscrit et transformé par Charles Perrault en France et paru dans Les Contes de ma mère l'Oye</p>
        <div class="widget rate">

          <div class="starrr"></div>
        </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="frontend/view/singlee.php">
				<img class="card-img-top img-fluid" src="style/images/products/250px-Camus23.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="frontend/view/singlee.php">L'étranger</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="frontend/view/categorie.php"><i class="fa fa-folder-open-o"></i>Roman</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a><i class="fa fa-calendar"></i>19 mai 1942</a>
		    	</li>
		    </ul>
		    <p class="card-text">L'Étranger est le premier roman d’Albert Camus, paru en 1942.</p>
        <div class="widget rate">

          <div class="starrr"></div>
        </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="frontend/view/singlerj.php">
				<img class="card-img-top img-fluid" src="style/images/products/inddzdzex.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="frontend/view/singlerj.php">Roméo et Juliette</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="frontend/view/categorie.php"><i class="fa fa-folder-open-o"></i>Tragédie</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a><i class="fa fa-calendar"></i>1597</a>
		    	</li>
		    </ul>
		    <p class="card-text">Roméo et Juliette est une tragédie de William Shakespeare.</p>
        <div class="widget rate">

          <div class="starrr"></div>
        </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="frontend/view/singlepc.php">
				<img class="card-img-top img-fluid" src="style/images/products/81ovTNILQfL.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="frontend/view/singlepc.php">Le Petit Chaperon Rouge</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="frontend/view/categorie.php"><i class="fa fa-folder-open-o"></i>Conte</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a ><i class="fa fa-calendar"></i>1697</a>
		    	</li>
		    </ul>
		    <p class="card-text">Le Petit Chaperon rouge est un conte de tradition orale d'origine française. </p>
        <div class="widget rate">

          <div class="starrr"></div>
        </div>
		</div>
	</div>
</div>



					</div>
				</div>
			</div>


		</div>
	</div>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>Statistiques des catégories</h2>
					<p>La liste de toutes les catégories avec le nombre de livres dans chaque catégories.</p>
				</div>
				<div class="row">
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-wheelchair-alt icon-bg-1"></i>
								<h4>Action</h4>
							</div>
							<ul class="category-list" >
						<!--	<li><a href="style/view/category.php">Laptops <span>93</span></a></li>
								<li><a href="style/view/category.php">Iphone <span>233</span></a></li>
								<li><a href="style/view/category.php">Microsoft  <span>183</span></a></li>
								<li><a href="style/view/category.php">Monitors <span>343</span></a></li>-->
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-compass icon-bg-2"></i>
								<h4>Aventure</h4>
							</div>
							<ul class="category-list" >
						<!--	<li><a href="style/view/category.php">Cafe <span>393</span></a></li>
								<li><a href="style/view/category.php">Fast food <span>23</span></a></li>
								<li><a href="style/view/category.php">Restaurants  <span>13</span></a></li>
								<li><a href="style/view/category.php">Food Track<span>43</span></a></li>-->
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-map-pin icon-bg-3"></i>
								<h4>Mystère</h4>
							</div>
							<ul class="category-list" >
							<!--	<li><a href="style/view/category.php">Farms <span>93</span></a></li>
								<li><a href="style/view/category.php">Gym <span>23</span></a></li>
								<li><a href="style/view/category.php">Hospitals  <span>83</span></a></li>
								<li><a href="style/view/category.php">Parolurs <span>33</span></a></li>-->
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-frown-o icon-bg-4"></i>
								<h4>Drama</h4>
							</div>
							<ul class="category-list" >
								<!--<li><a href="style/view/category.php">Mens Wears <span>53</span></a></li>
								<li><a href="style/view/category.php">Accessories <span>212</span></a></li>
								<li><a href="style/view/category.php">Kids Wears <span>133</span></a></li>
								<li><a href="style/view/category.php">It & Software <span>143</span></a></li>-->
							</ul>
						</div>
					</div> <!-- /Category List -->


				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>
<!--============================
=            Footer            =
=============================-->
<!-- include de php redondant -->
<?php include('frontend/include_frontends/footersindex.php'); ?>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>
<!-- include de php redondant -->
<?php include('frontend/include_frontends/pluginsindex.php'); ?>
</body>

</php>
