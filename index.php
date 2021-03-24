<!DOCTYPE php>
<php lang="en">
<head>
  <!-- Demarrage session -->
<?php session_start() ?>
  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Classimax</title>
<!-- include de php redondant -->
  <?php include 'frontend/include_frontends/stylesindex.php';  ?>
</head>

  <?php include 'frontend/include_frontends/navindex.php';  if (isset($_SESSION['stop']) and  $_SESSION['stop'] ==4) {    $res=$_SESSION["film"];   }

  else {
     $_SESSION['stop']=4;?>
     <script type="text/javascript">
       window.location.href =   "backend/process/affichertoutfilmindex.php";
     </script>
  <?php  } ?>


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
					<h1>Cinéma de Dugny </h1>
					<p>Retrouvez des centaines de film comprenant <br> un grand nombre de film du monde entier</p>
					<div class="short-popular-category-list text-center">
						<h2>Catégories Populaires</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#"><i class="fa fa-wheelchair-alt"></i> Action</a></li>
							<li class="list-inline-item">
								<a href="#"><i class="fa fa-compass"></i> Aventure</a>
							</li>
							<li class="list-inline-item">
								<a href="#"><i class="fa fa-map-pin"></i> Mystère</a>
							</li>
							<li class="list-inline-item">
								<a href="#"><i class="fa fa-frown-o"></i> Drama</a>
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

						<!-- product card -->

<?php foreach ( $res as $value) {





?>


					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
		<div class="price"><?php echo  $value["salleid"] ;?></div>
			<a href="frontend/view/singleironman.php">
				<img class="card-img-top img-fluid" src="<?php echo $value['image']; ?>" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="style/images/products/flash.jpg"><?php echo $value["SALLENomfilm"] ;?></a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-folder-open-o"></i><?php echo $value["theme"] ;?></a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a><i class="fa fa-calendar"></i></a>
		    	</li>
		    </ul>


		</div>
	</div>
</div> </div>
<?php }?>


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
