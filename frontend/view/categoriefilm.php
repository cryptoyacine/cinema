<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Demarrage session -->
<?php include '../include_frontends/nav.php';

if (isset($_SESSION['stop']) and  $_SESSION['stop'] ==4) {    $res=$_SESSION["film"];   }

else {
   $_SESSION['stop']=4; header("Location: ../../backend/process/affichertoutfilm.php");
} ?>



<!--===================================
=            Clients Section        =
====================================-->


<section class="client-slider-03">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Client Slider -->
			<div class="col-md-12">
				<!-- Client Slider -->
<div class="category-slider">
  
    <div class="item">
        <a href="#" onclick="event.preventDefault();" class="text-info">
            <!-- Slider Image -->
          	<i class="fa fa-film"></i>
            <h4>Film</h4>
        </a>
    </div>


    </div>
    			</div>
    		</div>
    	</div>
    	<!-- Container End -->
    </section>

    <section class="stores section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="section-title">
    					<h2>Les auteurs</h2>
    				</div>

    				<!-- Second Letter -->
    				<div class="block">
    					<!-- Store First Letter -->
    					<h5 class="store-letter">Film</h5>
    					<hr>
    					<!-- Store Lists -->
    					<div class="row">
    						<!-- Store List 01 -->
                <?php



                foreach ( $res as $value) {





            ?>
    						<div class="col-md-3 col-sm-6">
    							<ul class="store-list">
    								<li> <?php echo $value['FilmNom'];?> </li>

    							</ul>
    						</div>
    <?php } ?>


    						</div>
    					</div>
    				</div>

    			</div>
    		</div>
    	</div>
    </section>


    <section class="stores section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="section-title">

    				</div>

    				<!-- Second Letter -->
    				<div class="block">
    					<!-- Store First Letter -->
    					<h5 class="store-letter">film recherche</h5>
    					<hr>
    					<!-- Store Lists -->
    					<div class="row">
    						<!-- Store List 01 -->
                <?php

    if (isset($_SESSION["recherchefilm"]) and $_SESSION["recherchefilm"]!='') {

    $rer =  $_SESSION["recherchefilm"];





                foreach ( $rer as $value) {





            ?>
    						<div class="col-md-3 col-sm-6">
    							<ul class="store-list">
    								<li> <?php echo $value['FilmNom']; ?> </li>

    							</ul>
    						</div>
              <?php } ?>
    </br>
                  <form action="../../backend/process/afficherfilm.php" method= "post">
                    <input type="text" name="FilmNom" value=""/>
                  </br>  </br>
                  <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">chercher</button> </form>
    <?php } else {

    ?>
  </br>
    <form action="../../backend/process/afficherfilm.php" method= "post">
      <input type="text" name="FilmNom" value="">
        </br>  </br>
      <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">chercher</button>
    </form>

    <?php } ?>

    						</div>
    					</div>
    				</div>

    			</div>
    		</div>
    	</div>
    </section>n






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

    <?php include('../include_frontends/plugins.php'); if (isset ($_SESSION["recherchefilm"])){ $rer = $_SESSION["recherchefilm"]='';}?>
    </body>

    </html>
