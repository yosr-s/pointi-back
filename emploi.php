<?php
session_start();
if (empty($_SESSION['id'])) {
header('Location:login2.php');
}else{?>
<?php 
include('includes/connect_db.php');
$req = $bdd->query("SELECT * FROM emploi");
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/viho/theme/datatable-basic-init.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 20:39:32 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>gestion emploi</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.css">
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
                  <h3>Gestion emploi</h3>
                 
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
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                         <?php 
                                            if (isset($_GET['resultat'])) {

                                            if ($_GET['resultat'] == 'oui') {
                                           ?>
                                        <div class="alert alert-success" role="alert">
                                         Emploi ajouté avec succès!
                                        </div>
                                    <?php } } ?>
                                     <?php 
                                            if (isset($_GET['resultat'])) {

                                            if ($_GET['resultat'] == 'oui modif') {
                                           ?>
                                        <div class="alert alert-success" role="alert">
                                          Emploi modifié avec succès!
                                        </div>
                                    <?php } } ?>
                                    <?php 
                                            if (isset($_GET['resultat'])) {

                                            if ($_GET['resultat'] == 'oui supprim') {
                                           ?>
                                        <div class="alert alert-danger" role="alert">
                                         Emploi supprimé avec succès!
                                        </div>
                                    <?php } } ?>
                        <thead>
                          <tr>
                            <th>debut 1 </th>
                            <th>fin 1</th>
                            <th>debut 2 </th>
                            <th>fin 2</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 

while ($donnees = $req->fetch()) {

?> 
                        
                          <tr>
                            <td><?php echo $donnees['dps'] ?></td>
                            <td><?php echo $donnees['fps'] ?></td>
                            <td><?php echo $donnees['dds'] ?></td>
                            <td><?php echo $donnees['fds'] ?></td>



                            
                            <td> 
                            <a href="modif-emploi.php?id=<?php echo $donnees['id']; ?>" class="btn btn-primary">Modifier</a>

                     
                        
                            <span class="btn btn-danger">
                             <a href="controller/suppemploi.php?id=<?php echo $donnees['id']; ?>" style="color: #fff;">supprimer</a>
                            </span>
                       </td>
                          </tr>

                        
                         
                         


                          
                          
                        </tbody>
                      </table>
                      <br>
                      <label for="">nb heures/mois:</label>
                          <input type="text" value="<?php echo $donnees['nbh'] ?>" readonly>
                          <br>
                          <label for="">Prix heure:</label>
                          <input type="text" value="<?php echo $donnees['prix'] ?> dt" readonly>
                          <br>
                          <label for="">Prix heure supplémentaire:</label>
                          <input type="text" value="<?php echo $donnees['prixhsup'] ?> dt" readonly>
                          <?php } ?>


                    
                     
                    </div>
                  </div>
                </div>
              </div>
             
              
             
             
            
             
             
             
             
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
       
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
    <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.com/viho/theme/datatable-basic-init.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 20:39:34 GMT -->
</html>
<?php 
}
?>