<?php
echo '<pre>';
echo 'GET:<br>';
print_r($_GET);
echo '<br>POST:<br>';
print_r($_POST);
?>
<?php 
include('includes/connect_db.php');

$cin = $_GET['cin'];
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$date = $_GET['date'];
$time = $_GET['time'];
$time1 = $_GET['time1'];
$idd = $_GET['idd'];
$time0="00:00:00";


$req = $bdd->query("SELECT count(`id`) p FROM `salarie` where `cin`=$cin");
?>
<?php
header("Content-type:application/json;charset=utf-8");

$donnees = $req->fetch();
$result=$donnees['p'];

if ($result==1){
  $etat=1;
  
}
else{
  $etat=0;
}





  $tab=array("etat"=>$etat);
  echo json_encode($tab);
  
  if($etat==1){
    echo"oui";
    if ($time1=='08'){
      echo "heyy";
      $bdd->exec("INSERT INTO `pointage`(`idd`,`date`, `arrivee`, `sortie`, `arrive`, `sort`,`nom`,`prenom` ) VALUES ('$idd','$date','$time','$time0','$time0','$time0','$nom','$prenom')");
      echo"done";

    }
    else if($time1=='13'){
      echo "yes";
      $bdd->exec("UPDATE `pointage` SET `sortie`='$time'  WHERE idd='$idd' and sortie='$time0' and date='$date' ");
      echo "done";
      
    }
    else if($time1=='13'){
      echo "yes";
      $bdd->exec("UPDATE `pointage` SET `arrive`='$time'  WHERE idd='$idd' and arrive='$time0' and date='$date' ");
      echo "done";
      
    }
    else if($time1=='15'){
      echo "yes";
      $bdd->exec("UPDATE `pointage` SET `sort`='$time'  WHERE idd='$idd' and sort='$time0' and date='$date' ");
      echo "done";
      
    }
  }


  
  

?>
