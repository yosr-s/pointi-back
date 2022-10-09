<?php

require_once('../Model/salarie.class.php');
/*echo $_FILES["image"]["name"];
exit;*/
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";
    include('../includes/connect_db.php');

       //$id=$_GET['user'];
       $data_rbk = htmlspecialchars( basename( $_FILES["image"]["name"]));
      echo $data_rbk;
        $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
/*if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}*/

// Check file size
if ($_FILES["image"]["size"] > 800000) {
  echo "Sorry, your file is too large.";

  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
     //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
     $salarie = new salarie($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['email'],$_POST['password'],$_POST['service'],$_POST['salaire'],$_FILES['image']['name'],$_POST['commentaire']);
     $salarie->modifier();
     
     header("location:../liste-salarie.php?resultat=oui modif");
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>