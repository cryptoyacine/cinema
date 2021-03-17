<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Demarrage session -->
    <?php include '../include_frontends/nav.php';  if (isset($_SESSION["id"]) ) {

     ?>
<!--==================================
=            User Profile            =
===================================-->
<section class="dashboard section">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="../../style/images/user/596-5961334_kono-dio-da-meme-template-hd-png-download.png" alt="" class="rounded-circle">
						</div>
						<!-- User Name -->
						<h5 class="text-center"><?php echo $_SESSION["nom"]?></h5>
						<a href="user-profile.php" class="btn btn-main-sm">Change ton profile</a>
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
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">Mes livres</h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Image</th>
								<th>Titre</th>
								<th class="text-center">Categorie</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="product-thumb">
									<img width="80px" height="auto" src="../../style/images/products/81ovTNILQfL.jpg" alt="image description"></td>
								<td class="product-details">
									<h3 class="title">Petit Chaperon Rouge</h3>
									<span class="add-id"><strong>ID:</strong> ng3D5hAMHPajQrM</span>
									<span><strong>Acheter le: </strong><time>27 juin, 2017</time> </span>
									<span class="status active"><strong>Statue:</strong>Emprunté</span>
								</td>
								<td class="product-category"><span class="categories">Livre</span></td>

							</tr>
							<tr>


						</tbody>
					</table>

				</div>

				<!-- pagination -->
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>

							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- pagination -->

			</div>
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
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
