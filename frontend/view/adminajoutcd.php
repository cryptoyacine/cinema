<!DOCTYPE PHP>
<PHP lang="en">
<head>

  <?php include '../include_frontends/nav.php';  ?>
  <?php session_start();
if (isset($_SESSION['role']) and $_SESSION['role'] == 1 ){

   ?>
   
<section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border border">
                      <?php if ( $_SESSION["erreurcase"] == "reussis"){ ?>
                        <h3 class="bg-gray p-4">Ajout réussi </br> >Ajouter un autre cd : </h3>
                      <?php }  else {?>
                      <h3 class="bg-gray p-4">Ajouter un cd : </h3>
                    <?php }?>
                        <form action="../../backend/process/adminajoutcd.php" method= "post">
                            <fieldset class="p-4">



                              <input type="text" name="cdnom"
                              <?php


                                                            if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevide"){ echo'placeholder="Veuillez rentrer un nom valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                                                              if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevidesaufrefcd"){ echo'placeholder="Veuillez rentrer  rentrer un nom de cd valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                                                              if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevidesaufcdaut"){ echo'placeholder="Veuillez rentrer  rentrer un nom de cd valide**"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                                                            if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevidesaufrefcdetcdaut") { echo'placeholder=""Veuillez rentrer  rentrer un nom de cd valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                                                            else { echo 'placeholder="Veuillez rentrer  rentrer un nom de cd *" class="border p-3 w-100 my-2" ';} ?> />

                              <input type="text" name="cdaut"
                              <?php

                              if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevide"){ echo'placeholder="Veuillez rentrer un auteur de cd valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevidesaufrefcd"){ echo'placeholder="Veuillez rentrer un auteur de cd valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                                if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevidesaufcdnom"){ echo'placeholder="Veuillez rentrer un auteur de cd valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                              if (isset($_SESSION["erreurcase"]) and $_SESSION["erreurcase"] == "toutecasevidesaufrefcdetcdnom") { echo'placeholder="Veuillez rentrer un auteur de cd valide*"';  echo 'class="form-controlred p-3 w-100 my-2"' ;}
                              else { echo 'placeholder="Veuillez rentrer un auteur de cd *" class="border p-3 w-100 my-2" ';} ?> />


                              <div class="form-group">
                                <label for="current-password">ROLE :
                                  CHOISIR action:
                                               </br>     </br>     </br>
                                               <input  type="radio" name="cdth" class="form-controlred p-1 w-50 my-1" value="A"
                                       checked></BR></BR></BR>
                                             </>
CHOISIR AVENTURE :</>
                                             <input type="radio" name="cdth" class="form-controlred p-1 w-50 my-1" value="AV"
                                             ></BR></BR></BR>
                                            CHOISIR MYSTERE :</>
                                             <input type="radio" name="cdth" class="form-controlred p-1 w-50 my-1" value="M"
                                             ></BR></BR></BR>

                                             CHOISIR DRAMA :</>
                                              <input type="radio" name="cdth" class="form-controlred p-1 w-50 my-1" value="D"
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
<?php include('../include_frontends/footers.php'); ?>
      <!-- Container End -->
      <!-- To Top -->
      <div class="top-to">
        <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
      </div>
    </footer>
<?php include('../include_frontends/plugins.php'); ?>
    </body>
<?php $_SESSION["erreurcase"] = ''; } else {
  header("Location: 404.php");
}?>

</PHP>
