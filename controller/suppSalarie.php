<?php
require_once('../Model/salarie.class.php');

$salarie = new salarie($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['email'],$_POST['service'] ,$_POST['salaire'] ,$_POST['image'],$_POST['commentaire']);
$salarie->supprimer();



header("location:../liste-salarie.php?resultat=oui supprim");
exit();
?>