<?php
require_once('../Model/emploi.class.php');

$emploi = new emploi($_POST['dps'],$_POST['fps'],$_POST['dds'],$_POST['fds'],$_POST['nbh'],$_POST['prix'],$_POST['prixhsup']);
$emploi->supprimer();

header("location:../emploi.php?resultat=oui supprim");
exit();
?>