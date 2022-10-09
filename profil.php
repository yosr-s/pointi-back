<?php
session_start();
if (empty($_SESSION['id'])) {
header('Location:login2.php');
}else{?>
<?php 
include('includes/connect_db.php');
$id = $_GET['id'];
/*echo $id;
exit;*/
$req = $bdd->query(" SELECT * FROM salarie WHERE id = $id ");
$donnees = $req->fetch();
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/viho/theme/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 20:08:57 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>profil-salarié</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/photoswipe.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php include "includes/nav.php"; ?>

      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <?php include "includes/header.php"; ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Profil salarié</h3>
                 
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="user-profile">
              <div class="row">
                <!-- user profile header start-->
             
                <!-- user profile header end-->
               
                <div class="col-xl-9 col-lg-12 col-md-7 xl-65">
                  <div class="row">
                    <!-- profile post start-->
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="profile-post">
                          <div class="post-header">

                            <div class="media"><img class="img-thumbnail rounded-circle me-3" src="<?php echo 'http://localhost/pointi/uploads/'.$donnees['image'] ?>" alt="Generic placeholder image">
                              <div class="media-body align-self-center"><a href="social-app.html">
                                  <h5 class="user-name"><?php echo $donnees['nom'] ?> <?php echo $donnees['prenom'] ?></h5></a>
                              </div>
                            </div>
                            <div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
                          </div>
                          
                      <div class="tab">
                        <div class="form-group">
                          <label for="name">Nom</label>
                          <input class="form-control" id="name" type="text" name="nom" required="required" value="<?php echo $donnees['nom'] ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="lname">Prenom</label>
                          <input class="form-control" id="lname" type="text" name="prenom" value="<?php echo $donnees['prenom'] ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="contact">Num carte d'indentite</label>
                          <input class="form-control digits" id="contact" type="text" name="cin" value="<?php echo $donnees['cin'] ?>" readonly>
                        </div>
                         <div class="form-group">
                          <label for="contact">Email</label>
                          <input class="form-control digits" id="contact" type="Email" name="email" value="<?php echo $donnees['email'] ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="contact">Service</label>
                          <input class="form-control digits" id="contact" type="text" name="Service" value="<?php echo $donnees['service'] ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="contact">Salaire</label>
                          <input class="form-control digits" id="contact" type="text" name="Salaire" value="<?php echo $donnees['salaire'] ?>"readonly>
                        </div>
                        
                       
                        
                       
                        
                      </div>
                      
                      
                      
                    
                  
                      
                              
                              
                              
                            
                        




                        </div>
                      </div>
                    </div>
                    <!-- profile post end-->
                    <!-- profile post start-->
                    
                    <!-- profile post end   -->
                    <!-- profile post start-->
                    
                    <!-- profile post end                           -->
                  </div>
                </div>
                <!-- user profile fifth-style end-->
                
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              
              
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="assets/js/counter/jquery.counterup.min.js"></script>
    <script src="assets/js/counter/counter-custom.js"></script>
    <script src="assets/js/photoswipe/photoswipe.min.js"></script>
    <script src="assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="assets/js/photoswipe/photoswipe.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.com/viho/theme/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 20:10:27 GMT -->
</html>
<?php 
}
?>